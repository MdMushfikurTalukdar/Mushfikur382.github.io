<?php
include_once "connect.php";

$sql ="SELECT f_name,cost,action_time
FROM fertilizer
WHERE fertilizer_code IN (SELECT fertilizer_code
                      FROM plant_needed_fertillizer
                      WHERE serial_port IN (SELECT serial_port
                                         FROM plant
                                        )
                      )";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>fertilizer</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

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
<h2 style="padding-top: 100px"; align='center'>FertilizerInformation
    
<div class="body"></div>
		<div class="grad"><?php include_once "navagation_bar.php"; ?></div>
		<div class="header">
			
		</div>
		<br>
		<div class="login">
        <?php 
    if ($result->num_rows > 0) {
        echo "<table align='center'><tr><th>Fertilizer Name</th>
        <th>Price</th>
        <th>Active Time</th>
        </tr>";
    
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["f_name"]. "</td>
            <td>" . $row["cost"]. "</td>
            <td> " . $row["action_time"]. "</td>
            </tr>";
        }
        echo "</table>";
    } 
    else {
        echo "Sorry, there are no fetilizer found in this moment.";
    }

    ?>

    <br>
    <a href="soil.php"><button style='margin: 0px 1000px' class='ui inverted green button'>Next</button></a><br><br>

            
        </div>
        




</body>
</html>