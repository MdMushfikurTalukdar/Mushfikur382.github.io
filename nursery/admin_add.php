<?php
include_once "connect.php";
include_once "navagation_bar.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$first_name = $_POST['afirst_name'];
$last_name = $_POST['alast_name'];
$number = $_POST['phone_number'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$zip = $_POST['zip_code'];
$mail = $_POST['admin_email'];
$password = $_POST['admin_password'];
$security = $_POST['security_key'];
$ammount = $_POST['investment_ammount'];

if(!empty($first_name) && !empty($last_name) && !empty($number) && !empty($gender) && !empty($city)
 && !empty($zip) && !empty($mail) && !empty($password) && !empty($security) && !empty($ammount))
{
$branch = "dhakanursery@gmail.com";
$country = "Bangladesh";
$sql = "INSERT into nursery_admin(afirst_name,alast_name,phone_number,gender,city,zip_code,admin_email,admin_password,security_key,investment_ammount,email,country) 
values('$first_name','$last_name','$number','$gender','$city','$zip','$mail','$password','$security','$ammount','$branch','$country')";
$result = mysqli_query($conn,$sql);
if($result){
  header("Location:admin_details.php");
  die;
}
else{
  echo '<script >alert("Warning!! Unable to Update Information")</script>';
}
}

else
{
  echo '<script >alert("Warning!! Unable to Update Information")</script>';
}
}
?>


<!doctype html>
<html>
<head>
	<title>Adding Admin</title>
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
padding : 80px;
}

.btn {
  border: 10px;
  outline: 10px;
  padding: 5px 5px;
  background-color: #397967;
  cursor: grab;
  font-size: 24px;
}


.active, .btn:hover {
  background-color: #666;
  color: green;
}
	</style>

<div align="center" id="box">
    <form method="post">
        <div align="center" style="front-size: 20px; margin: 10px;color:white;">Adding New Admin</div>

            
            <input id="text" type="text" placeholder="First Name" name="afirst_name"><br>
            <input id="text" type="text" placeholder="Last Name" name="alast_name"><br>
            <input id="text" type="text" placeholder="Phone Number" name="phone_number"><br>
            <input id="text" type="text" placeholder="City" name="city"><br>
            <input id="text" type="number" placeholder="Zip Code" name="zip_code"><br>
            <input id="text" type="text" placeholder="Gender" name="gender"><br>
            <input id="text" type="number" placeholder="Ammount" name="investment_ammount"><br>
            <input id="text" type="text" placeholder="E-mail" name="admin_email"><br>
            <input id="text" type="password" placeholder="password" name="admin_password"><br>
            <input id="text" type="text" placeholder="Security Key" name="security_key"><br>

            <input id="button" type="submit" value="Submit"><br><br>
            

            
    </form>
    <a href="admin_details.php"><button class="btn">Cancel</button></a>
            <a href="admin_login.php"><button class="btn">Logout</button></a>
</div>

</body>
</html>