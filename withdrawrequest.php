
<?php 
include('Admin/Database/Connection.php');
if(isset($_POST['customerid']))
{
	
	$customerid = $_POST['customerid'];
	$bitcoin = $_POST['bitcoin'];
	$withdraw = $_POST['witdraw'];
	$status = $_POST['status'];
	$todaydate = $_POST['todaydate'];
	$today = $_POST['today'];
	$amount = $_POST['amount'];
	$time = date("h:i:sa");

	
	if($amount < 29)
	{
		
		echo "Withdraw must be greater than 30";
	}
	else if($today == "Sunday")
	{
		echo "withdraw off on saturday and sunday";
	}
	else if($today == "Saturday")
	{
		echo "withdraw off on saturday and sunday";
	}
	if($amount>=30)
	{

		$insert = "insert into customer_withdraw(customerid,bitcoinaddress,amount,status,todaydate,send,time) values('".$customerid."','".$bitcoin."','".$amount."','".$status."','".$todaydate."','".$withdraw."','".$time."')";
            $run = mysqli_query($link,$insert);
            

           $s = "SELECT * FROM `dailyroi` d
inner join customer c
on c.id = d.customerid
where d.customerid='".$customerid."'
order by d.id DESC LIMIT 1";
$runs = mysqli_query($link,$s);
if(mysqli_num_rows($runs)>0)
{
	while($row = mysqli_fetch_assoc($runs))
	{
		$addroi = $row['addroi'];
		$username = $row['username'];
		$withdrawupdate  = $addroi - $withdraw;
		$updatequery = "update dailyroi set addroi='".$withdrawupdate."' where customerid='".$customerid."'";
		$runssqqsd = mysqli_query($link,$updatequery);
	}
	}

	echo "Your withdraw request has been submit successfully";



}
}

?>