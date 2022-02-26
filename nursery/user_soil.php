<?php
include_once "connect.php";
include_once "navagation_bar.php";
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <title>Display Soil Demo Data</title>
</head>
<body>
<style>
body {
  background-image: url('image/5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<h2 style="padding-top: 80px"; align="center">Soil Information</h2>

<table height=350px weidth=250px align="center" border="2">
  <tr>
    <td>Soil Name</td>
    <td>Cost</td>
    <td>Left Stock(kg)</td>
    <td>Buy</td>
    
    
  </tr>

<?php


$records = mysqli_query($conn,"select * from soil  "); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['soil_name']; ?></td>
    <td><?php echo $data['cost']; ?></td>  
    <td><?php echo $data['quantity']; ?></td>  
    
       
    <td><a href="user_soil_edit.php?soil_code=<?php echo $data['soil_code']; ?>
    && cost=<?php echo $data['cost']; ?>">Buy</a></td>
    
  </tr>	
<?php
}
?>
</table>

<a href="nursery_user.php"><button style='margin:0px 20px' class='ui inverted green button'>Back</button></a><br><br>
<a href="user_seeding.php"><button style='margin: 0px 1000px' class='ui inverted green button'>Next</button></a><br><br>

</body>
</html>