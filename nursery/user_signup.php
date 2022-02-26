<?php
include_once "navagation_bar.php";
include_once "connect.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$user_email = $_POST['user_email'];
$password = $_POST['password'];
$last_name = $_POST['first_name'];
$first_name = $_POST['last_name'];
$town = $_POST['town'];
$house_number = $_POST['house_no'];
$zip_code = $_POST['zip_code'];
$gender = $_POST['gender'];

if(!empty($user_email) && !empty($password) && !is_numeric($user_email))
{

$sql =    "INSERT into nursery_user(user_email,user_password,last_name,first_name,town,house_no,zip_code,gender,email,coupon_code) 
            values('$user_email','$password','$last_name','$first_name','$town','$house_number','$zip_code','$gender','dhakanursery@gmail.com','NEW50ACCOUNT')";

mysqli_query($conn,$sql);

header("Location: user_login.php");
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
	<title> signup</title>
</head>
<body>
<style>
body {
  background-image: url('image/img.jpg');
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

margin: auto;
width: 300px;
padding: 80px;
}
	</style>

<div align="center" id="box">
    <form method="post">
        <div style="front-size: 20px; margin: 10px;color:white;">Signup</div>

            
            <input id="text" type="text" name="first_name" placeholder="first name"><br><br>
            <input id="text" type="text" name="last_name" placeholder="last name"><br><br>
            <input id="text" type="text" name="town" placeholder="town"><br><br>
            <input id="text" type="number" name="zip_code" placeholder="zip code"><br><br>
            <input id="text" type="text" name="house_no" placeholder="house no"><br><br>
            <input id="text" type="text" name="gender" placeholder="gender"><br><br>
            <input id="text" type="text" name="user_email" placeholder="email"><br><br>
            <input id="text" type="password" name="password" placeholder="Password"><br><br>

            <input id="button" type="submit" value="Signup"><br><br>
            

            <a href="user_login.php">Click to Login</a><br><br>
    </form>
</div>

</body>
</html>