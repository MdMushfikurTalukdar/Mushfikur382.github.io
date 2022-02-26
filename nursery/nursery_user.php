<?php
session_start();
include_once "navagation_bar.php";
include_once "connect.php";
include_once "function.php";

$user = check_login($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8>
    <meta http-equiv="X-UA-compatible"
     content="IF=edge">
     <meta name="viewport"
     content="width=device-width,initial-scale=1.0">
     <style>


.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  left:20%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.button {
  display: inline-block;
  height: 50px;
  line-height: 50px;
  padding-right: 30px;
  padding-left: 70px;
  position: relative;
  background-color:rgb(136, 120, 150);
  color:rgb(255,255,255);
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 15px;
  
  
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  text-shadow:0px 1px 0px rgba(0,0,0,0.5);
-ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true)";zoom:1;
filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true);

  -moz-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
  -webkit-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
  box-shadow:0px 2px 2px rgba(0,0,0,0.2);
  -ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true)";
filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true);
}


.button.orange {
  background: #bda5b1;
}

.button.purple {
  background: #555154;
}

.button.turquoise {
  background: #4b645f;
}

.button.red {
  background: #8aafad;
}
     </style>
     </head>
     <body>
     <style>
body {
  background-image: url('image/5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
      <div class="container">
        <div class="vertical-center">
      <br>
      <br>
      <h2 align="center"><div style='color:#668cff'>Welcome to our Nursery</div> <div style='color:#004d2e'><?php echo $user['first_name']." ".$user['last_name']; ?></div> 
      <div style='color:#df9fbf'>!</div></h2>
      <br>
      <br>    
          
  <a href="user_flower.php" class="button">Flower</a>
  <a href="user_fruit.php" class="button orange">Fruit</a>
  <a href="user_wood.php" class="button purple">Wood</a>
  <a href="user_decorated.php" class="button turquoise">Decorated</a>
  <br>
  <a href="user_fertilizer.php" class="button red">Fertilizer</a>
  <a href="user_soil.php" class="button">Soil</a>
  <a href="user_seeding.php" class="button orange ">Seeding</a>
  <a href="user_seed.php" class="button purple">seed</a>
  <br>
  <a href="user_discount.php" class="button turquoise">Discount</a>
  <a href="user_order.php" class="button purple">Order List</a>
  
  <a href="user_login.php" class="button red">Logout</a>
</div>
</div>

     </body>
</html>