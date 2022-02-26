


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
<th>User Name</th>
<th>House NO</th>
<th>serial_port</th>
<th>fertilizer_code</th>
<th>soil_code</th>
<th>Employee Email</th>
<th>Order Status</th>


</tr>
</thead>

<?php
include_once "connect.php";

$sql ="SELECT * 
FROM online_delivery AS o 
LEFT JOIN nursery_user AS n
ON o.user_email=n.user_email";

$result = mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){
?>
<tr>

<td> <?php echo $row["first_name"]. " ".$row["last_name"] ?> </td>
<td> <?php echo $row["house_no"] ?> </td>
<td> <?php echo $row["serial_port"] ?> </td>
<td> <?php echo $row["fertilizer_code"] ?> </td>
<td> <?php echo $row["soil_code"] ?> </td>
<td> <?php echo $row["employee_email"] ?> </td>
<td> <?php echo $row["order_status"] ?> </td>
<td> <a href="employee_user_order1.php?serial=<?php echo $row['serial'];?>"<button class='ui inverted blue button'>Update</button></a></td>

</tr>
<?php
}
?>
</table>

</form>

<a href="employee_menu.php"><button class='ui inverted orange button'>GO BACK</button></a>
</center>
</body>
</head>
</html>