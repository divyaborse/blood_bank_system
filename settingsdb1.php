<?php

require 'connection.php';
session_start();
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
if(isset($_POST['submit'])){
	
	$password = mysqli_real_escape_string($db,$_POST['password']);
	$new = mysqli_real_escape_string($db,$_POST['new']);
	$retype = mysqli_real_escape_string($db,$_POST['retype']);
	$password = md5($password);#hash password for security purpose
	$new = md5($new);
	$retype =md5($retype);
	$sql = "SELECT email,password FROM receiver_register WHERE email = '".$_SESSION['email']."'";

	$result =  mysqli_query($db,$sql) or die(mysqli_error($db));
	
	$row = mysqli_fetch_array($result);
	$old_pass = $row['password'];
	if ($password == '' || $new == '' || $retype == " ") {
		# code...
		header("location:settings1.php?error='Please fill all the fields '");
	}
	if($new != $retype){
		header("location:settings1.php?error='Two password does not match'");
	}
	else{
		if($old_pass == $password){
			$query = "UPDATE receiver_register set password = '$retype' where email = '".$_SESSION['email']."'";
			mysqli_query($db,$query) or die(mysqli_error($db));
			header("location:settings1.php?msg='Password changed successfully'");

		}
		else{
			header("location:settings1.php?error=''Wrong old passsword");
		}
	}

	
 	
}
?>