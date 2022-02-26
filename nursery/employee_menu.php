<?php
include_once "connect.php";
include_once "employee_navbar.php";
?>


<html>
<head>
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
<th>Plant Name</th>
<th>Price</th>
<th>Left Product</th>
<th>Available Seed</th>
<th>Rating</th>
<th>Image</th>
<th>Edit</th>
<th>Delete</th>

</tr>
</thead>

<?php
include_once "connect.php";

$sql = "SELECT * from plant";
$result = mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){
?>
<tr>

<td> <?php echo $row["name"] ?> </td>
<td> <?php echo $row["price"] ?> </td>
<td> <?php echo $row["quantity"] ?> </td>
<td> <?php echo $row["seed"] ?> </td>
<td> <?php echo $row["rating"] ?> </td>
<td><img src="<?php echo $row['plant_image']; ?>" width="100" height="100" alt="image"></td>
<td><a href="emp_plant_edit.php?name=<?php echo $row['name'];?>&& price=<?php echo $row['price'];?>
&& quantity=<?php echo $row['quantity'];?>&& seed=<?php echo $row['seed'];?>&& rating=<?php echo $row['rating'];?>
&& plant_image=<?php echo $row['plant_image'];?>">Edit</a></td>
<td><a href= "plant_delete.php? serial_port=<?php echo $row['serial_port'];?>">Delete</a></td>
</tr>
<?php
}
?>
</table>
</form>
</center>
</body>
</head>
</html>