


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
  <?php
require 'navbar.php';
?>
<center>
  <h1>Blood Bank System</h1>
<div class="container">
 
  
 
 <br><br>            
  <table class="table table-striped table-bordered">

    <?php
    
    require "connection.php";
//session_start();
$email =  $_SESSION['email']; 
$sql1 = "select * from hospital_register where email = '$email'"; 
$result1 = mysqli_query($db,$sql1) or die(mysqli_error($db));
        global $value;
  if(mysqli_num_rows($result1) >=1){
 while($rowb = mysqli_fetch_array($result1)){ 
$value =$rowb['id'];



}

} 
//echo $value;    

    $sum = 0;
  $id = 0;
      $db = mysqli_connect("localhost","root","","bloodbanksystem");

    $sql = "SELECT receiver_register.name as Name,receiver_register.address as Address,receiver_register.age as Age,receiver_register.email as Email,receiver_register.contact as Contact,add_info.id as id,add_info.bloodgroup as BloodGroup,add_info.bagsize as Bagsize, add_info.price as Price from receiver_register inner join add_info on add_info.user_id = receiver_register.id where add_info.user_id = receiver_register.id and add_info.status= 'Requested' and add_info.hospital_id = $value";
    $result =mysqli_query($db,$sql) or die(mysqli_error($db));
    if(mysqli_num_rows($result) >=1){

    ?>
    <thead>
      <tr>
        <th>Number</th>
        <th>Receiver Name</th>
        <th>Receiver Email</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Blood group</th>
        <th>Blood Bag size</th>
        <th>Price</th>
      <!-- <th>Requested bag quantity</th>-->
         
         
        
      </tr>
    </thead>

    <tbody>
    <?php

    while($row = mysqli_fetch_array($result)){
     
  

  
echo '
      <tr>
        <td>'.++$id.'</td>
         <td>'.$row['Name'].'</td>
       <td>'.$row['Email'].'</td>
         <td>'.$row['Address'].'</td>
           <td>'.$row['Contact'].'</td>
          <td>'.$row['BloodGroup'].'</td>
        <td>'.$row['Bagsize'].'</td>
          <td>'.$row['Price'].'</td>
    
        <!--  <td><input type="text" name="bquantity"></td>-->
       <!-- <td><select id="year"></select>-->



      
      
      </tr>';


    }

    ?>  
    </tbody>
    <?php 
} 
   else{
echo "<center><h2 style='background-color:Tomato;'>No blood samples are requested</h2></center>";
}   
?>
  </table>
</div>
</div>
</center>
<!--<script type="text/javascript">
  var start = 1;
var end = ;
var options = "";
for(var year = start ; year <=end; year++){
  options += "<option>"+ year +"</option>";
}
document.getElementById("year").innerHTML = options;
</script>-->
</body>
</html>