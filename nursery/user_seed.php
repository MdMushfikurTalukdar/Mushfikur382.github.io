<?php
include_once "connect.php";
include_once "navagation_bar.php";
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <title>Display Seed Demo Data</title>
</head>

<body>
<style>
body {
  background-image: url('image/5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>>


<h2 align="center">Seed Information</h2>

<table height=150px weidth=100px align="center" border="2">

  <tr>
    <td>Seed Name</td>
    <td>Cost</td>
    <td>Left</td>
    <td>Rating</td>
    <td>Buy</td>
    
  </tr>

<?php


$records = mysqli_query($conn,"select * from plant where seed='yes'  "); 

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
    elseif($data['rating']==4){
      echo include_once "rating4.php" ;
    } 
    elseif($data['rating']==3){
      echo include "rating3.php" ;
    } 
    elseif($data['rating']==2){
      echo include "rating2.php" ;
    } 
    elseif($data['rating']==1){
      echo include "rating1.php" ;
    } 
    else{
      echo include "rating.php" ;
    } 
    
    
    ?></td>
       
    <td><a href="user_seed_edit.php?serial_port=<?php echo $data['serial_port']; ?>
    && price=<?php echo $data['price']; ?>">Buy</a></td>
    
  </tr>	
  
    
<?php
}
?>
</table>
<a href="nursery_user.php"><button style='margin:0px 20px' class='ui inverted green button'>Back</button></a><br><br>
<a href="user_discount.php"><button style='margin: 0px 1000px' class='ui inverted green button'>Next</button></a><br><br>
    
</body>
</html>