<?php
include_once "connect.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
    $review_old = $_GET['rating'];
    $serial_port = $_GET['serial_port'];
    $review_new = $_POST['rating'];

if(!empty($review_new))
{
$review = ($review_old+$review_new)/2;
$query = "UPDATE plant SET rating = '$review' where serial_port = '$serial_port'";
mysqli_query($conn,$query);

header("Location:user_order.php");
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
  background-image: url('image/img1.jpg');
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
<div style="front-size: 20px; margin: 10px;color:white;">press 1 to give 1 star<br>
press 2 to give 2 star<br>
press 3 to give 3 star<br>
press 4 to give 4 star<br>
press 5 to give 5 star<br><br></div>
<input id="text" type="number" placeholder="Give your rating here" name="rating"><br><br>

<input id="button"  type="submit" value="Submit"><br><br>
</form>
</div>

</body>
</html>