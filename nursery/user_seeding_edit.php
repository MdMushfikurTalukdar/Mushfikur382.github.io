<?php

include_once "connect.php";

$serial_port = $_GET['serial_port']; 
$price = $_GET['price'];

if($_SERVER['REQUEST_METHOD'] =="POST")
{
    $user = $_POST['user_email'];

if(!empty($user))
{
  $quantity = "SELECT * from plant where serial_port = '$serial_port'";
  $quantity1 = mysqli_query($conn,$quantity);
  if($left = mysqli_fetch_array($quantity1)){
    $quantity2 = $left['quantity'] - 1;
  }
  $quantity3 = "UPDATE plant SET quantity='$quantity2' where serial_port = '$serial_port'";
  mysqli_query($conn,$quantity3);
  
  $sql = "SELECT earn_point from nursery_user where user_email = '$user'";
  $add1=mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($add1))
{
  $add = (($price/100)*3) + $row['earn_point'];
}
$aql1 = "UPDATE nursery_user SET earn_point = '$add' where user_email='$user'";
$add3 = mysqli_query($conn,$aql1);
$query = "INSERT into online_delivery(order_status,user_email,employee_email,serial_port) 
values('processing','$user','harrypoter@gmail.com','$serial_port')";

$result = mysqli_query($conn,$query);
if($result){
header("Location:user_seeding_edit1.php");
die;
}
}
else
{
echo "Please enter some valid information";
}
}

?>


<!doctype html>
<html>
<head>
	<title>Buy Panel</title>
</head>
<body>
<style>
body {
  background-image: url('image/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
	<style type="text/css">
#text{
height: 25px;
border-radius: 5px;
padding:4px;
border:solid thin #aaa;
width: 100%;
}
#button{
padding:10px;
width: 100px;
color: white;
background-color: #397967;
border: none;
}
#box{

margin: 80px auto;
width: 300px;
padding: 30px;
top:20px;
}


a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: brown;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
	</style>

<div align="center" id="box">
<form method="post">
<div style="front-size: 20px; margin: 10px;color:white;">Enter your Email</div>
<input id="text" type="text" placeholder="entery your email address" name="user_email"><br><br>

<input id="button"  type="submit" value="Finish"><br><br>

</form>
</div>

</body>
</html>