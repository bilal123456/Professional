<?php 
include('Database/Connection.php');
if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
echo $sql = "delete from materialimage where id='".$id."'";
$run = mysqli_query($link,$sql);
header("Location:showmaterials.php");

?>