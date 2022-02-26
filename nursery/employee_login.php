<?php
	include_once "navagation_bar.php";
	include_once "connect.php";
	

	if($_SERVER['REQUEST_METHOD'] =="POST"){
		$email = $_POST['employee_email'];
		$password = $_POST['employee_password'];

		if(!empty($email) && !empty($password) && !is_numeric($email)){

			$sql = "SELECT * from employee where employee_email = '$email' limit 1";
			$result = mysqli_query($conn,$sql);
			if($result){
				if($result && mysqli_num_rows($result)>0){
					$user = mysqli_fetch_assoc($result);

					if($user['employee_password'] == $password){
						$_SESSION['employee_email'] = $user['employee_email'];
						header("Location: employee_menu.php");
						die;
					}
				}
			}
			echo '<script >alert("Warning!! Try Again With Valid Information")</script>';
		}
		else{
			  echo '<script >alert("Warning!! Try Again With Valid Information")</script>';

		}
	}

?>


<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title> Login</title>
</head>
<body>
<style>
body {
  background-image: url('image/e.jpg');
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

<div align="center"id="box">
<form method="post">
<b><div style="font-size: 25px; margin: 10px;color:black;">Employee Login</div></b>
<input id="text" type="text" placeholder="email" name="employee_email"><br><br>
<input id="text" type="password" placeholder = "password" name="employee_password"><br><br>
<input id="button" type="submit" value="login"><br><br>
<a href="employee_signup.php">Click To APPLY For Job</a><br><br>
</form>
</div>

</body>
</html>