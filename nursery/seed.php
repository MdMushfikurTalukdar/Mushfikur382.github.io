<?php
include_once "connect.php";

$sql ="SELECT * FROM plant where seed='yes'";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
    <title>Seed</title>
</head>
<style>
    body {
  background-image: url('image/5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
table, th, td {
    border: 1px solid black;
}
</style>
<body>
<h2 style="padding-top: 100px"; align='center'>Seed Information

    
<div class="body"></div>
		<div class="grad"><?php include_once "navagation_bar.php"; ?></div>
		<div class="header">
			
		</div>
		<br>
		<div class="login">
        <?php 
    if ($result->num_rows > 0) {
        echo "<table align='center'><tr><th>Plant Name</th><th>Price</th><th>Sold</th></tr>";
    
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"]. "</td><td>" . $row["price"]. "</td><td> " . $row["sold"]. "</td></tr>";
        }
        echo "</table>";
    } 
    else {
        echo "0 results";
    }

    ?>

    <br>
    <a href="nursery.php"><button style='margin: 0px 1000px' class='ui inverted green button'>Exit</button></a><br><br>
            
            
        </div>
        




</body>
</html>