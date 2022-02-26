<?php
include_once "connect.php";

$sql ="SELECT *
FROM nursery_admin AS a JOIN employee AS e
WHERE a.admin_email = e.admin_email";

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
    if ($result) {
        echo "<table><tr>
        <th>Admin E-mail</th>
        <th>Employee Name</th>
        <th>Employee Email</th>
        <th>Employee Phone</th>
        <th>Salary</th></tr>";
    
        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $row["admin_email"]."</td>
            <td>" . $row["first_name"]. " " . $row["last_name"]. "</td>
            <td>" . $row["employee_email"]. "</td>
            <td>" . $row["phone_number"]. "</td>
            <td>" . $row["salary"]. "</td>
            
            </tr>";
        }
        echo "</table>";
    } 
    else {
        echo "0 results";
    }

    ?></h2>

    <br>
            <a href="admin_details.php"><button>Go Back</button></a>
            <a href="admin_login.php"><button>LogOut</button></a>
            
        </div>
        




</body>
</html>