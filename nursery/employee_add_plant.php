<?php

include_once "connect.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$name = $_POST['name'];
$plant_code = $_POST['plant_code'];
$sold = $_POST['sold'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$seed = $_POST['seed'];
$plant_image = $_POST['plant_image'];


if(!empty($name) && !empty($plant_code)&& !empty($sold)&& !empty($price)&& 
!empty($quantity) && !empty($seed)&& !empty($plant_image))
{
$sql="INSERT Into plant(name,plant_code,sold,price,quantity,seed,plant_image) 
     values('$name','$plant_code','$sold','$price','$quantity','$seed','$plant_image')";

mysqli_query($conn,$sql);
echo '<script >alert("Successfully Done")</script>';
header("location:employee_menu.php");
die;
}

else
{
  echo '<script >alert("Warning!! Try Again With Valid Information")</script>';
}
}
?>


<!doctype html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<title>Add Plant</title>
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
padding :10px;
width: 100px;
color: black;
background-color: #397967;
border: none;
}
#box{
background-color: #89AFA2;
margin: auto;
width: 300px;
padding :20px;
}
	</style>

<div id="box">
    <form method="post">
        <div align="center" style="front-size: 20px; margin: 10px;color:black;">Plant Information</div>

            
            <input id="text" type="text" name="name" placeholder= "name"><br><br>
            <input id="text" type="text" name="plant_code" placeholder="plant code"><br><br>
            <input id="text" type="text" name="sold" placeholder="sold"><br><br>
            <input id="text" type="number" name="price" placeholder="price"><br><br>
            <input id="text" type="number" name="quantity" placeholder="quantity"><br><br>
            <input id="text" type="text" name="seed" placeholder="seed"><br><br>
            <input id="text" type="text" name="plant_image" placeholder="plant image"><br><br>
            
            <input id="button" type="submit" value="Add"><br><br>
            

            
    </form>
    <a href="employee_menu.php"><button class='ui inverted orange button'>Cancel</button></a><br><br>
</div>

</body>
</html>
