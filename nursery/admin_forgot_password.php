<?php
include_once "navagation_bar.php";
include_once "connect.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$user = $_POST['admin_email'];
$key = $_POST['security_key'];
$password = $_POST['admin_password'];

if(!empty($user) && !empty($key))
{

$sql = "SELECT * from nursery_admin where admin_email = '$user' limit 1";
$sql1 = "UPDATE nursery_admin SET admin_password='$password' WHERE admin_email='$user'";

$result = mysqli_query($conn,$sql);
if($result){
if($result && mysqli_num_rows($result)>0){
$user = mysqli_fetch_assoc($result);

if($user['security_key'] === $key){
$_SESSION['admin_email'] = $user['admin_email'];


$result = mysqli_query($conn,$sql1);
if($result){


if ($conn->query($sql1) === TRUE){
    header("Location:admin_password_changed.php");
    die;
}
else{
    header("Location:admin_password_unchanged.php");
    die;
}
}
else{
    header("Location:admin_password_unchanged.php");
    die;
}
header("Location:admin_password_changed.php");
die;
}
}
}
header("Location:admin_password_fail.php");
    die;
}
else
{
    header("Location:admin_password_fail.php");
    die;
}
}

?>


<!doctype html>
<html>
<head>
	<title> Login</title>
</head>
<body>


	<style type="text/css">
        body {
  background-image: url('image/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
#text{
height: 25px;
border-radius: 5px;
padding:4px;
border:solid thin #aaa;
width: 100%;
}
#button{
padding :10px;
width: match-parent;
color: black;
background-color: #397967;
border: none;
}
#box{

margin: auto;

width: 300px;
padding: 20px;
top:200px;
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
<div style="front-size: 20px; margin: 10px;color:white;">Admin Login</div>
<input id="text" type="text"placeholder="enter your email" name="admin_email"><br><br>
<input id="text" type="password"placeholder="enter your key" name="security_key"><br><br>
<input id="text" type= "password" placeholder="entery your new password" name="admin_password"><br><br>
<input id="button" type="submit" value="Change Password"><br><br>
<a href="admin_login.php" id = "button">GO BACK</a>

</form>
</div>

</body>
</html>