<?php
session_start();
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
	<?php

require 'nav1.php';

?>
<center>
	<h1>Blood Bank System</h1>
<div class="container">
 
  
 
 <div class="container">
 	  <br>     
<?php 
if(!isset($_SESSION['email'])){
	echo '<center><h2 style="background-color:Tomato;">Login/register to request for blood samples</h2></center>';
}
?>  
 
  <table class="table table-striped table-bordered">

  	<?php
  	$sum = 0;
  $id = 0;
  		$db = mysqli_connect("localhost","root","","bloodbanksystem");

  	$sql = "SELECT hospital_register.name as Name , hospital_register.email as Email,add_info.bloodgroup as BloodGroup,add_info.hospital_id as id,add_info.bagsize as Bagsize,add_info.price as Price FROM add_info inner join hospital_register on add_info.hospital_id = hospital_register.id where add_info.hospital_id=hospital_register.id and add_info.status = ''";
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
      </tr>
    </thead>

    <tbody>
    <?php

    while($row = mysqli_fetch_array($result)){
     
    $item_id =$row['id'];

  
echo '
      <tr>
        <td>'.++$id.'</td>
         <td>'.$row['Name'].'</td>
        <td>'.$row['Email'].'</td>
          <td>'.$row['BloodGroup'].'</td>
        <td>'.$row['Bagsize'].'</td>
          <td>'.$row['Price'].'</td>
    
        <!--<td>
        	<a href="success.php?id='.$item_id.'" class="btn btn-primary">Confirm Order</a></td>
        <td><a href="cart_remove.php?id='.$item_id.'" name="Remove" value="remove" class="btn btn-danger">Remove Item</a></td>-->
      </tr>';


    }

    ?>  
    </tbody>
    <?php 
}    else{
echo "<center><h2 style='background-color:Tomato;'>No blood samples available</h2></center>";
}
?>
  </table>
</div>



</div>
</center>
</body>
</html>
