<?php include('Database/Connection.php');

if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
$s = "delete from activationpackage where customerid='".$id."'";
$run = mysqli_query($link,$s);
header("Location:Activation.php");

 ?>