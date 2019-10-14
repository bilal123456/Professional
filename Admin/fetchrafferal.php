<?php include('Database/Connection.php'); 

if(isset($_POST['username']))
{
	$username = $_POST['username'];


echo	$sql = "SELECT * FROM `rafferal`
where rafferalunderusername='".$username."'";
$run = mysqli_query($link,$sql);
if(mysqli_num_rows($run)>0)
{$i = 1;
	while($row = mysqli_fetch_assoc($run))
	{



		?>

			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $row['todaydate'] ?></td>
				<td><?php echo $row['newregisterusername'] ?></td>

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