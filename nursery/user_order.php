<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<title>Plant</title>
<style>
body{
background-color: lightgray;

}

</style>
<body>
<center>
<form method="post" enctype="multipart/form-data">
<table width="50%" border="2" cellpadding="5" cellspacing="5">
<thead>
<tr>
<th>Name</th>
<th>Price</th>
<th>Employee Email</th>

</tr>
</thead>

<?php
session_start();
include_once "connect.php";
include_once "function.php";

$user = check_login($conn);

$id = $user['user_email'];

$sql ="SELECT *
FROM online_delivery AS o
RIGHT JOIN plant As p
ON p.serial_port = o.serial_port
WHERE user_email= '$id'";

$count ="SELECT count(*)
FROM online_delivery AS o
RIGHT JOIN plant As p
ON p.serial_port = o.serial_port
WHERE user_email= '$id'";

$hig ="SELECT MAX(price)
FROM plant
WHERE serial_port IN (select serial_port
                    from online_delivery
                    where user_email= '$id')";
$name ="SELECT name 
from plant 
where price IN (SELECT MAX(price)
FROM plant
WHERE serial_port IN (select serial_port
                    from online_delivery
                    where user_email= '$id'))";
$total = mysqli_query($conn,$count);
$result = mysqli_query($conn,$sql);
$hig1 = mysqli_query($conn,$hig);
$name1 = mysqli_query($conn,$name);
echo "<br>";
while($row1 = mysqli_fetch_array($total)){
    echo "Total Order is : ".$row1['count(*)'];
}
echo "<br>";
while($row3= mysqli_fetch_array($name1)){
    echo "Higest costly product is : ".$row3['name'];
}
while($row2 = mysqli_fetch_array($hig1)){
    echo " and price is ".$row2['MAX(price)'];
}

while($row= mysqli_fetch_array($result)){
?>

<tr>

<td> <?php echo $row["name"] ?> </td>
<td> <?php echo $row["price"] ?> </td>
<td> <?php echo $row["employee_email"] ?> </td>
<td><a href= "user_rating.php? rating=<?php echo $row['rating'];?>
&& serial_port=<?php echo $row['serial_port'];?>">Review</a></td>

</tr>
<?php
}
?>
</table>

</form>

<a href="nursery_user.php"><button class='ui inverted orange button'>GO BACK</button></a>
<a href="user_order1.php"><button class='ui inverted orange button'>Other Order</button></a>
</center>
</body>
</head>
</html>