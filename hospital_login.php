<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Bank System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php 
require "navbar.php";
if(isset($_SESSION['message'])){
if($_SESSION['message'] == 'Email/Password is incorrect'){
  echo '<div class ="alert alert-warning">'.$_SESSION['message'].'</div>';

}
else if($_SESSION['message'] == 'You are logged in'){
  echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$_SESSION['message'].'</div>';
}
}
?>
<div class="container">
   <div class="row">
  <div class="col-sm-5 col-md-6 col-lg-5 col-xs-5">
  <img src="images\login.png" width="300" height="300">
</div>
    <div class="col-sm-7 col-md-6 col-lg-7 col-xs-7">
      <h2>Login Form</h2>
      <p> Don't have an account?<a href="hospital_register.php">&nbsp;&nbsp;Register</a></p>
  <form action="logindb.php" method="post" name="f1">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="required">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required="required">
    </div>
   <!-- <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>-->
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form></div>

</div>
</div>

</body>
</html>
