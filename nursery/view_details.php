<?php
include_once "connect.php";

$sql ="SELECT COUNT(*)  FROM viewer";
$result = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Viewer</title>
</head>
<body>
    
<div class="body"></div>
		<div class="grad"><?php include_once "navagation_bar.php"; ?></div>
		<div class="header">
			
		</div>
		<br>
		<div class="login">
            <h1><?php
            while($row = mysqli_fetch_array($result)){
                echo "Total Viewer is : ".$row['COUNT(*)'];
            }
            ?></h1>
            <a href="admin1.php"><button>GO BACK</button></a>
        </div>
        




</body>
</html>