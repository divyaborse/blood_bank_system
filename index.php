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
  <style type="text/css">
  	    @media (max-width: 576px) {  
  .xs {color:red;font-weight:bold;}
}

/* Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width:768px) {  
  .sm {color:red;font-weight:bold;}
}
 
/* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
@media (min-width: 768px) and (max-width:992px) {  
 .md {color:red;font-weight:bold;}
}
 
/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width:1200px) { 
 .lg {color:red;font-weight:bold;}
}
 
/* Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {  
    .xl {color:red;font-weight:bold;}
}
	body {
 background-image: url("images/bg3.jpg");
 background-size: cover;
background-repeat:no-repeat;
 

} 
  </style>

  </style>
</head>
<body>
<?php
session_start();
session_destroy();
unset($_SESSION['username']);
$_SESSION['message'] ="You are not signed in";

?>
	
<div class="container d-flex justify-content-center text-center" style="margin-top: 16%">
 
  <div class="card">
    <div class="card-body">
    	 <h1 class="card-title text-center">Blood Bank System</h1>
 <a href="hospital.php"> <button type="button" class="btn btn-success">Hospitals</button></a>

  <a href="receiver.php"><button type="button" class="btn btn-danger">Receivers</button></a>
 
</div>

</body>
</html>
