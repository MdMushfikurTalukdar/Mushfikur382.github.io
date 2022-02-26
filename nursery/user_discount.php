<?php
include_once "connect.php";
include_once "navagation_bar.php";
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <title>Discount</title>
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

<h2 style="padding-top: 80px"; align="center">Discount Information</h2>

<table height=300px weidht= 200px align="center" border="2">
  <tr>
    <td>Discount Name</td>
    <td>Percentage</td>
    <td>Coupon Code</td>
    
    
    
  </tr>

<?php


$records = mysqli_query($conn,"select * from discount  "); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['discount_name']; ?></td>
    <td><?php echo $data['percentage_of_discount']; ?></td>  
    <td><?php echo $data['coupon_code']; ?></td>  
    
       
    
    
  </tr>	
<?php
}
?>
</table>

<a href="nursery_user.php"><button style='margin:0px 20px' class='ui inverted green button'>Back</button></a><br><br>
<a href="user_flower.php"><button style='margin: 0px 1000px' class='ui inverted green button'>Next</button></a><br><br>


</body>
</html>