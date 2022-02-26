<?php

include_once "connect.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$order = $_POST['order_status'];
$id = $_GET['serial'];

if(!empty($order))
{

$sql =    "UPDATE online_delivery SET order_status='$order' where serial='$id'";

mysqli_query($conn,$sql);
header("Location: employee_user_order.php");
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<title>Skill</title>
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
padding:10px;
width: 100px;
color: black;
background-color: #D58AC1;
border: none;
}
#box{

margin: 80px auto;
width: 300px;
padding: 30px;
}
	</style>

<div align='center'id="box">
    <form method="post">
        

            
        
        <select name="order_status">
    <option>Finished</option>
    <option>Fail</option>
    
  </select>
  <br><br>

            <input id="button" type="submit" value="Update"><br><br>
            

            
    </form>
</div>
</body>
</html>