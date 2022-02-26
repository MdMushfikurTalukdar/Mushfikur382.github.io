<?php
include_once "connect.php";
include_once "navagation_bar.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$country = $_POST['country'];

if(!empty($country))
{

$query = "INSERT into viewer(country,email) values('$country','dhakanursery@gmail.com')";
mysqli_query($conn,$query);
header("Location:nursery.php");
die;
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
	<title>Viewer</title>
</head>
<body>
<style>
body {
  background-image: url('image/v.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
	<style type="text/css">
#text{
hight: 25px;
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
  color:yellow;
  background-color: transparent;
  text-decoration:none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color:black;
  background-color: transparent;
  text-decoration: underline;
}
	</style>

<div align="center" id="box">
<form method="post">
<b><div style="font-size:30px; margin: 10px;color:black;">Viewer</div></b>
<input id="text" type="text" placeholder="Country Name" name="country"><br><br>

<input id="button"  type="submit" value="view"><br><br>
<a href="user_signup.php">Click to Signup</a><br><br>
</form>
</div>

</body>
</html>