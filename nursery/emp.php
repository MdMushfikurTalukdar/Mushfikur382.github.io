<?php
include_once "connect.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/employee_signup.css">
    
    <title>Employee Apply</title>
</head>
<body>
    <div class="body"></div>
		<div class="grad" style="margin: 10px;"><?php include_once "navagation_bar.php"; ?><br><br></div>
        <form method="post">
		<div class="login">
            
                <div style="front-size: 40px; margin: 10px;color:white;">Employee Apply For Job</div>

				<input type="text" placeholder="First Name" name="first_name"><br>
				<input type="text" placeholder="Last Name" name="last_name"><br>
                <input type="text" placeholder="Date Of Birth" name="date_of_birth"><br>
				<input type="text" placeholder="The Department Name You have Passed" name="dep"><br>
                <input type="text" placeholder="The Institute Name" name="institute"><br>
				<input type="text" placeholder="City Name" name="city"><br>
                <input type="number" placeholder="Zip Code" name="zip"><br>
				<input type="text" placeholder="E-mail" name="email"><br>
                <input type="password" placeholder="password" name="password"><br>
				<input type="button" value="SIGN UP"><br><br>

                <a href= "employee_login.php"><input type="button" value="LOGIN"><br><br></a>
            
            
	    </div>
        </form>
</body>
</html>