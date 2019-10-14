<?php 
include('Database/Connection.php');
if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
$sql = "delete from vedio where id='".$id."'";
$run = mysqli_query($link,$sql);
header("Location:showmaterials.php");

?>