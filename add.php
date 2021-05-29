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

session_start();

include "connection.php";
if(!isset($_SESSION['email'])){
  header("location:index.php");

}

require 'nav.php';


?>
<div class="container">
  <h2>Add blood sample information</h2>
  <div class="row">
    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
      
  <form action="add_info.php" method="post" name="f1">
    <div class="form-group">
      <label for="bloodgroup">Blood group</label>
      <input type="text" class="form-control" id="bloodgroup" placeholder="Enter blood group" name="bloodgroup">
    </div>
    <div class="form-group">
      <label for="bagsize">Blood bag size:</label>
      <input type="text" class="form-control" id="bagsize" placeholder="Enter blood bag size" name="bagsize">
    </div>
    <!--<div class="form-group">
      <label for="quantity">quantity of blood bag size:</label>
      <input type="number" class="form-control" id="quantity" placeholder="Enter quantity of blood bag size" name="quantity">
    </div>-->

     <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter the price of blood bag" name="price">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form></div>
<div class="col-xl-4 col-lg-4 col-md-5 col-sm-6">
  <img src="images\login.png" width="300" height="300">
</div>
</div>
</div>

</body>
</html>
