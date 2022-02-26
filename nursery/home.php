<?php
include_once "navagation_bar.php";
include_once "connect.php";
$sql ="SELECT COUNT(*)  FROM viewer";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.90">
    <title>Nursery Project</title>
    <meta http-equiv="refresh" content="3" />
</head>
<body>

<style>
body {
  background-image: url('<?php $a=array('image/Sunflower.jpg','image/Flax.jpg','image/Pumpkin.jpg','image/Wil.jpg'); echo $a[array_rand($a)];?>');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>

<div style="color:black;">

<div  style= "margin: 80px 0px;line-height: 3cm;color: #F39F14 ;text-align:center;font-size: 150px;">

<img src="image/leaf.png" alt="image" style="width:40px;height:25px">
<em><b> Plant Nursery Project</b></em></div>
<div style= "margin: -20px 150px;">
<?php
include "icon.php";
?>
</div>

<a href="home.php"><button class='ui inverted black button' style= "background: purple;margin: 73px 1000px;"><?php while($row = mysqli_fetch_array($result)){
                echo $row['COUNT(*)'];
            } ?> viewer
</button></a>



</body>
</html>