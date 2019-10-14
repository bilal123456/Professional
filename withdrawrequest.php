
<?php 
include('Admin/Database/Connection.php');


if(isset($_POST['rafferalammount']))

{
	$rafferalammount = $_POST['rafferalammount'];
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
	if($today == "Sunday")
	{
		echo "withdraw off on saturday and sunday";
	}
	else if($today == "Saturday")
	{
		echo "withdraw off on saturday and sunday";
	}
	else
	{

		$insert = "insert into customer_withdraw(customerid,bitcoinaddress,amount,status,todaydate,send,time) values('".$customerid."','".$bitcoin."','".$amount."','".$status."','".$todaydate."','".$withdraw."','".$time."')";
            $run = mysqli_query($link,$insert);
            

           $s = "SELECT * FROM `rafferal` r
inner join customer c
on c.username = r.rafferalunderusername
WHERE c.id='".$customerid."'
LIMIT 1";
$runs = mysqli_query($link,$s);
if(mysqli_num_rows($runs)>0)
{
	while($row = mysqli_fetch_assoc($runs))
	{
		$totalcommission = $row['totalcommission'];
		$username = $row['username'];
		$withdrawupdate  = $rafferalammount - $withdraw;
		$updatequery = "update rafferal set totalcommission='".$withdrawupdate."' where rafferalunderusername='".$username."'";
		$runssqqsd = mysqli_query($link,$updatequery);
	}
	}

	echo "Your withdraw request has been submit successfully";

echo "<script>
	window.setTimeout(function(){

       
        window.location.href = 'home.php';

    }, 5000);</script>";

}
}
else
{
	$rafferalammount = $_POST['rafferalammount'];
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
	if($today == "Sunday")
	{
		echo "withdraw off on saturday and sunday";
	}
	else if($today == "Saturday")
	{
		echo "withdraw off on saturday and sunday";
	}
	else
	{

		$insert = "insert into customer_withdraw(customerid,bitcoinaddress,amount,status,todaydate,send,time) values('".$customerid."','".$bitcoin."','".$amount."','".$status."','".$todaydate."','".$withdraw."','".$time."')";
            $run = mysqli_query($link,$insert);
            

           $s = "SELECT * FROM `rafferal` r
inner join customer c
on c.username = r.rafferalunderusername
WHERE c.id='".$customerid."'
LIMIT 1";
$runs = mysqli_query($link,$s);
if(mysqli_num_rows($runs)>0)
{
	while($row = mysqli_fetch_assoc($runs))
	{
		$totalcommission = $row['totalcommission'];
		$username = $row['username'];
		$withdrawupdate  = $rafferalammount - $withdraw;
		$updatequery = "update rafferal set totalcommission='".$withdrawupdate."' where rafferalunderusername='".$username."'";
		$runssqqsd = mysqli_query($link,$updatequery);
	}
	}

	echo "Your withdraw request has been submit successfully";

echo "<script>
	window.setTimeout(function(){

       
        window.location.href = 'home.php';

    }, 5000);</script>";

}
}

?>