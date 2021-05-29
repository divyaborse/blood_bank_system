<?php


include_once("connection.php");
session_start();

if(isset($_POST['submit'])){

		$user_email= $_SESSION['email'];
		$db = mysqli_connect("localhost","root","","bloodbanksystem");
$bloodgroup = "SELECT * from hospital_register where email = '$user_email'";
  			$result1 = mysqli_query($db,$bloodgroup) or die(mysqli_error($db));
  			global $value;
  			global $user_id;
 	if(mysqli_num_rows($result1) >=1){
 while($rowb = mysqli_fetch_array($result1)){ 
$value =$rowb['bloodgroup'];

$user_id = $rowb['id'];
$_SESSION['id'] = $user_id;
}

}			
	$hospital_id= $_SESSION['id'];
	$bloodgroup = mysqli_real_escape_string($db,$_POST['bloodgroup']);
	$bagsize = mysqli_real_escape_string($db,$_POST['bagsize']);
	#$quantity = mysqli_real_escape_string($db,$_POST['quantity']);
	$price = mysqli_real_escape_string($db,$_POST['price']);
	$sql = "INSERT INTO add_info(hospital_id,bloodgroup,bagsize,price) VALUES('$hospital_id','$bloodgroup','$bagsize','$price')";
	mysqli_query($db,$sql) or die(mysqli_error($db));
	header("location:hospital.php");


}
?>

