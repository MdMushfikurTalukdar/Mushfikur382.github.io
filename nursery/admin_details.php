<?php
include_once "connect.php";

$sql ="SELECT * FROM nursery_admin";
$result = mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_details.css">
    <title>Document</title>
</head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<body>
    
<div class="body"></div>
		<div class="grad"><?php include_once "navagation_bar.php"; ?></div>
		<div class="header">
			
		</div>
		<br>
		<div class="login">
        <h2><?php 
    if ($result->num_rows > 0) {
        echo "<table><tr><th>Phone Number</th><th>Name</th><th>Country</th><th>City</th><th>Zip Code</th><th>Gender</th><th>E-mail</th></tr>";
    
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["phone_number"]. "</td><td>" . $row["afirst_name"]. " " . $row["alast_name"]. "</td><td>" . $row["country"].
             "</td><td>" . $row["city"]. "</td><td>" . $row["zip_code"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["admin_email"]. "</td></tr>";
        }
        echo "</table>";
    } 
    else {
        echo "0 results";
    }

    ?></h2>

    <br>
            <a href="admin_menu.php"><button>Go Back</button></a>
            <a href="admin_connect_employee.php"><button>Admin's Employee</button></a>
            <a href="admin_update.php"><button>Update/Remove</button></a>
            <a href="admin_add.php"><button>Add Admin</button></a><br><br>
            <a href="admin_login.php"><button>LogOut</button></a>
            
        </div>
        




</body>
</html>