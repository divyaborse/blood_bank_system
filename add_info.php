<?php


include_once("connection.php");
session_start();

if(isset($_POST['submit'])){

	$hospital_id= $_SESSION['id'];
	$bloodgroup = mysqli_real_escape_string($db,$_POST['bloodgroup']);
	$bagsize = mysqli_real_escape_string($db,$_POST['bagsize']);
	#$quantity = mysqli_real_escape_string($db,$_POST['quantity']);
	$price = mysqli_real_escape_string($db,$_POST['price']);
	$sql = "INSERT INTO add_info(hospital_id,bloodgroup,bagsize,price) VALUES('$hospital_id','$bloodgroup','$bagsize','$price')";
	mysqli_query($db,$sql) or die(mysqli_error($db));
	header("location:add.php");


}
?>

