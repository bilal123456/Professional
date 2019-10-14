<?php include('Database/Connection.php');

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$delete = "delete from notification where id='".$id."'";
	$run = mysqli_query($link,$delete);
	header("Location:show.php");
}

 ?>
