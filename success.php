
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<center>
	<?php

require "navbar1.php";
include_once("connection.php");


if(is_numeric($_GET['id']) && isset($_GET['id'])){

	$id= $_GET['id'];
	$user_id = $_SESSION['id'];
	//echo $user_id;
	$sql = "UPDATE  add_info set user_id='$user_id',status = 'Requested'  where id = '$id' ";
	mysqli_query($db,$sql) or die(mysqli_error($db));
	//header("location:receiver_option.php");


}
?>


<div class="alert alert-success" style="margin-top: 50px;">
  <strong>Thank You</strong> Requested blood samples wil be  delivered to you shortly.
  <center><hr width="300"></center> You can request more blood samples<a href="receiver_option.php" class="alert-link"> <b>here</b>	</a>..
</div>
</center>

</body>
</html>