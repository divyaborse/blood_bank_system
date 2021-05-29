
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <title>Mobi-Store</title>
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
require 'navbar1.php';
?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
  <h2>Change Password</h2>
  <form action="settingsdb1.php" method="post" name="f4">
    <div class="form-group">
      <label for="password">Old Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter old password" name="password" required="required">
    </div>
    <div class="form-group">
      <label for="new">New Password:</label>
      <input type="password" class="form-control" id="new" placeholder="Enter new password" name="new" required="required">
    </div>
    <div class="form-group">
      <label for="retype">Retype new Password:</label>
      <input type="password" class="form-control" id="retype" placeholder="Retype new password" name="retype" required="required">
    </div>

    
    <button type="submit" class="btn btn-primary" name="submit">Change</button>
  </form></div>

  <div class="col-sm-4">
    <center>
      <img class="img-responsive" src="images\reset.jpg" height="350">
    </center>
  </div>
</div>

</div>


</body>
</html>
