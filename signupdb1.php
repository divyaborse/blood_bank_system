<?php

require 'connection.php';
session_start();
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($db,$_POST['name']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
	$age = mysqli_real_escape_string($db,$_POST['age']);
	$bloodgroup = mysqli_real_escape_string($db,$_POST['blood_group']);
	$address = mysqli_real_escape_string($db,$_POST['address']);
	$contact = mysqli_real_escape_string($db,$_POST['contact']);
	$password = md5($password);#hash password for security purpose
	$sql1 = "SELECT * FROM receiver_register where email = '$email'";
	$query1 = mysqli_query($db,$sql1);
	$num = mysqli_num_rows($query1);
	if($num >= 1){
		$_SESSION['message'] = "Email already exists";
		$text = "Email already exists";
		header("Location:receiver_register.php?error=".$text);
	}
	else{
	$sql = "INSERT INTO receiver_register(name,address,age,bloodgroup,email,password,contact) VALUES('$name','$address','$age','$bloodgroup','$email','$password','$contact')";
	 mysqli_query($db,$sql);
	 //$_SESSION['message'] =  "You are now logged in";
	 //$_SESSION['name'] = $name;
	// header("Location:index.php");
 	}
}
?>