<?php include('Database/Connection.php'); 

if(isset($_POST['id']))
{
	$username = $_POST['id'];


echo	$sql = "SELECT * FROM `customer_withdraw` 
where customerid='".$username."'";
$run = mysqli_query($link,$sql);
if(mysqli_num_rows($run)>0)
{$i = 1;
	while($row = mysqli_fetch_assoc($run))
	{



		?>

			<tr id="change">
				<td><?php echo $i++; ?></td>
				<td><?php echo $row['todaydate']; ?></td>
				<td><?php echo $row['amount']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><?php echo $row['bitcoinaddress']; ?></td>


			</tr>

		<?php
	}
}
else
{
	echo "<tr><td colspan='3'>No Record</td><tr>";
}
}


?>