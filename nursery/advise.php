<?php
include_once "connect.php";


$sql ="SELECT * FROM advise AS a LEFT JOIN plant AS p 
ON a.plant_code = p.plant_code AND a.serial_port=p.serial_port";

$result = mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Advice</title>
</head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<body>
<style>
body {
  background-image: url('image/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
        <h2><?php 
    if ($result->num_rows > 0) {
        echo "<table style=' height: 10px; width: 90%;margin: 0 auto'class='ui selectable celled table'   ><tr><th>Plant Name</th><th>Some Information About Plant</th></tr>";
    
        while($row = $result->fetch_assoc()) {
            echo "<tr ><td class='warning'>" . $row["name"]. "</td><td class='positive'>".$row["advise_text"]. "</td></tr>";
        }
        echo "</table>";
    } 
    else {
        echo "0 results";
    }

    ?></h2>

    <br>
            <a href="home.php"><button color="orange">GO BACK</button></a>
        




</body>
</html>