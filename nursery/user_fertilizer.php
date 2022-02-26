<?php
include_once "connect.php";
include_once "navagation_bar.php";
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <title>Display Fertilizer Demo Data</title>
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

<h2 style="padding-top: 80px"; align="center">Fertilizer Information</h2>

<table height=300px weidth=200px align="center" border="2">
  <tr>
    <td>Fertilizer Name</td>
    <td>Action Time</td>
    <td>Cost</td>
    <td>Type</td>
    <td>Percentage of Toxic</td>
    <td>Buy</td>
    
    
  </tr>

<?php


$records = mysqli_query($conn,"select * from fertilizer  "); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['f_name']; ?></td>
    <td><?php echo $data['action_time']; ?></td>
    <td><?php echo $data['cost']; ?></td>  
    <td><?php echo $data['type']; ?></td>
    <td><?php echo $data['percentage_of_toxic']; ?></td>   
    
       
    <td><a href="user_fertilizer_edit.php?fertilizer_code=<?php echo $data['fertilizer_code']; ?>
    && cost=<?php echo $data['cost']; ?>">Buy</a></td>
    
  </tr>	
<?php
}
?>
</table>
<a href="nursery_user.php"><button style='margin:0px 20px' class='ui inverted green button'>Back</button></a><br><br>
<a href="user_soil.php"><button style='margin: 0px 1000px' class='ui inverted green button'>Next</button></a><br><br>

</body>
</html>