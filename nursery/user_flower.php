<?php
include_once "connect.php";
include_once "navagation_bar.php";
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <title>Display Flower Demo Data</title>
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

<h2 style="padding-top: 80px"; align='center'>Flower Information</h2>
<table height=400px; weidth=300px align="center" border="2">
  <tr>
    <td>Flower Name</td>
    <td>Cost</td>
    <td>Left</td>
    <td>Rating</td>
    <td>Picture</td>
    
  <td>Buy</td>
    
  </tr>

<?php


$records = mysqli_query($conn,"select * from plant where plant_code='flower'  "); 

while($data = mysqli_fetch_array($records))
{
?>

  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['price']; ?></td>
    <td><?php echo $data['quantity']; ?></td>
    <td><?php if($data['rating']==5){
      echo include "rating5.php" ;
      }
    else if($data['rating']==4){
      echo include_once "rating4.php" ;
    } 
    else if($data['rating']==3){
      echo include "rating3.php" ;
    } 
    else if($data['rating']==2){
      echo include "rating2.php" ;
    } 
    else if($data['rating']==1){
      echo include "rating1.php" ;
    } 
    else{
      echo include "rating.php" ;
    } 
    
    
    ?></td>

    <td><img src="<?php echo $data['plant_image']; ?>" width="100" height="100" alt="image"></td> 
    
       
    <td><a href="user_flower_edit.php?serial_port=<?php echo $data['serial_port']; ?>
    && price=<?php echo $data['price']; ?>">Buy</a></td>
    
  </tr>	
<?php
}
?>

</table>
<a href="nursery_user.php"><button style='margin:0px 20px' class='ui inverted green button'>Back</button></a><br><br>

<a href="user_fruit.php"><button style='margin: 0px 1000px' class='ui inverted green button'>Next</button></a><br><br>
    

</body>
</html>