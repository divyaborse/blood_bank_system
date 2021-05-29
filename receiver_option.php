<?php
require "navbar1.php";
?>	
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
	<h1>Blood Bank System</h1>
<div class="container">
 


 <br><br>            
  <table class="table table-striped table-bordered">

  	<?php
  	include "connection.php";
  	//session_start();
  	$user_email= $_SESSION['email'];
//echo $user_email;
  	$sum = 0;
  $id = 0;
  		$db = mysqli_connect("localhost","root","","bloodbanksystem");
$bloodgroup = "SELECT * from receiver_register where email = '$user_email'";
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
//echo $user_id;

	$sql = "SELECT hospital_register.name as Name ,add_info.id as ID,
   hospital_register.email as Email,add_info.bloodgroup as BloodGroup,add_info.hospital_id as hosptial_id,add_info.bagsize as Bagsize,add_info.price as Price  FROM add_info inner join hospital_register on add_info.hospital_id = hospital_register.id where add_info.hospital_id=hospital_register.id and add_info.status != 'requested' and add_info.bloodgroup = '$value'";



  	
  	$result =mysqli_query($db,$sql) or die(mysqli_error($db));
  	if(mysqli_num_rows($result) >=1){

  	?>
    <thead>
      <tr>
        <th>Number</th>
        <th>Hospital Name</th>
        <th>Hospital Email</th>
        <th>Blood group</th>
        <th>Blood Bag size</th>
        <th>Price</th>
       <!--  <th>Avalable bag quantity</th>
          <th>Add quantity</th>-->
         
         <th>Request for blood sample</th>
      </tr>
    </thead>

    <tbody>
    <?php

    while($row = mysqli_fetch_array($result)){
     
    $hosptial_id =$row['hosptial_id'];
    $ID = $row['ID'];

  
echo '
      <tr>
        <td>'.++$id.'</td>
         <td>'.$row['Name'].'</td>
        <td>'.$row['Email'].'</td>
          <td>'.$row['BloodGroup'].'</td>
        <td>'.$row['Bagsize'].'</td>
          <td>'.$row['Price'].'</td>
      



        <td>
        	<a href="success.php?id='.$ID.'" class="btn btn-primary">Request</a></td>
      
      </tr>';


    }

    ?>  
    </tbody>
    <?php 
}
   else{
echo "<center><h2 style='background-color:Tomato;'>No blood samples available</h2></center>";
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
