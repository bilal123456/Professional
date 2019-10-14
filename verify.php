<?php 
session_start();
include('Admin/Database/Connection.php');
if(isset($_GET['vkey']))
{
	$vkey = $_GET['vkey'];
 $result  = "select verified,vkey from customer where vkey='".$vkey."' limit 1";
$run = mysqli_query($link,$result);
if(mysqli_num_rows($run) > 0)
{

 $update = "UPDATE `customer` SET `verified`= 1 WHERE  vkey='".$vkey."' LIMIT 1";
$ok = mysqli_query($link,$update);
if($ok)
{
	echo "your account has been verified you have to login";
	header("Location:Login.html");
}
}else
{
	echo "this account is invalid";
	header("location:Login.html");
}
}
else
{
	die("someting went wrong");
}



?>