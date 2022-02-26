<?php
session_start();
include_once "navagation_bar.php";
include_once "connect.php";
include_once "function.php";
if($_SERVER['REQUEST_METHOD'] =="POST")
{
$user = $_POST['user_email'];
$password = $_POST['user_password'];

if(!empty($user) && !empty($password))
{

$sql = "SELECT * from nursery_user where user_email = '$user' limit 1";

$result = mysqli_query($conn,$sql);
if($result){
if($result && mysqli_num_rows($result)>0){
$user = mysqli_fetch_assoc($result);

if($user['user_password'] == $password){
$_SESSION['user_email'] = $user['user_email'];
header("Location:nursery_user.php");
die;
}
}
}
echo '<script >alert("Warning!! Try Again With Valid Information")</script>';
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
	<title> Login</title>
</head>
<body>

<style>
body {
  background-image: url('image/u1.jpg');
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
color: white;
background-color: #397967;
border: none;
}
#box{

margin:80px auto;

width: 300px;
padding: 20px;
top:200px;
}
	</style>

<div align="center" id="box">
<form method="post">
<b><div style="font-size: 30px; margin: 10px;color:black;">User Login</div></b>
<input id="text" type="text"placeholder="enter your email" name="user_email"><br><br>
<input id="text" type="password"placeholder="enter your password" name="user_password"><br><br>
<input id="button" type="submit" value="login"><br><br>
 <a href="user_signup.php">Click to signup</a><br><br>
</form>
</div>

</body>
</html>