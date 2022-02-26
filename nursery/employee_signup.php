<?php

include_once "navagation_bar.php";
include_once "connect.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$last_name = $_POST['first_name'];
$first_name = $_POST['last_name'];
$date_of = $_POST['date_of_birth'];
$sector = $_POST['sector_name'];
$instute = $_POST['instute_name'];
$city = $_POST['city'];
$zip = $_POST['zip_code'];
$admin = $_POST['admin_email'];

if(!empty($email) && !empty($phone) && !empty($last_name)&& !empty($first_name)&& !empty($date_of)&& 
!empty($sector) && !empty($instute)&& !empty($city)&& !empty($zip)&& !empty($admin))
{

$sql =    "INSERT into job_seeker(email,phone_number,last_name,first_name,date_of_birth,sector_name,instute_name,city,zip_code,admin_email) 
            values('$email','$phone','$last_name','$first_name','$date_of','$sector','$instute','$city','$zip','$admin')";

mysqli_query($conn,$sql);
header("Location: employee_skill.php");
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
	<title>Apply For JOb</title>
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
color: white;
background-color: #397967;
border: none;
}
#box{

margin: auto;
width: 500px;
padding :80px;
}
	</style>

<div id="box">
    <form method="post">
        <div align="center" style="front-size: 20px; margin: 10px;color:white;">Apply Form</div>

            
            <input id="text" type="text" name="first_name" placeholder="first name"><br><br>
            <input id="text" type="text" name="last_name" placeholder="last name"><br><br>
            <input id="text" type="text" name="date_of_birth" placeholder="date of birth"><br><br>
            <input id="text" type="number" name="zip_code" placeholder="zip code"><br><br>
            <input id="text" type="text" name="city" placeholder="city"><br><br>
            <input id="text" type="text" name="sector_name" placeholder="sector name"><br><br>
            <input id="text" type="text" name="instute_name" placeholder="instute name"><br><br>
            <input id="text" type="text" name="email" placeholder="your email"><br><br>
            <input id="text" type="text" name="phone_number" placeholder="your phone number"><br><br>
            <input id="text" type="text" name="admin_email" placeholder="reference admin mail"><br><br>

            <input id="button" type="submit" value="Apply"><br><br>
            

            
    </form>
    <a href="employee_login.php"><button class='ui inverted orange button'>Cancel</button></a><br><br>
</div>

</body>
</html>