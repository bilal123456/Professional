<?php
include('Database/Connection.php');
session_start();

if(isset($_POST['login']))

{
	$email   = $_POST['email'];
	$password = $_POST['password'];

$select = "select * from admin where username='".$email."' and Password='".$password."' limit 1";
$run = mysqli_query($link,$select);
if(mysqli_num_rows($run)>0)
{
	

	header("Location:dashboard.php");
}



}