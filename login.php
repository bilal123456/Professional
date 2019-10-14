<?php
include('Admin/Database/Connection.php');
session_start();

if(isset($_POST['login']))

{
	$email   = $_POST['email'];
	$password = $_POST['password'];

	

$select = "select * from customer where username='".$email."' and Password='".$password."' limit 1";
$run = mysqli_query($link,$select);
if(mysqli_num_rows($run)>0)
{
	
	while($row=mysqli_fetch_assoc($run))
	{
		$email = $row['email'];
		$_SESSION['email'] = $email;
		$_SESSION['id'] = $row['id'];
	}

	header("Location:slider.php");
}
else
{
	echo "wrong password";
	header("Location:login.html");
}


}