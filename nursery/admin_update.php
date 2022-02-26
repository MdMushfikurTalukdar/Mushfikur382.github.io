<?php
include_once "connect.php";

?>


<html>
<head>
<title>Admin</title>
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
<th>Admin Name</th>
<th>Edit</th>
<th>Delete</th>

</tr>
</thead>

<?php
include_once "connect.php";

$sql = "SELECT * from nursery_admin";
$result = mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){
?>
<tr>

<td> <?php echo $row["afirst_name"]." ".$row["alast_name"] ?> </td>


<td><a href= "admin_update1.php? admin_email=<?php echo $row['admin_email'];?>
&&afirst_name=<?php echo $row['afirst_name'];?>
&& alast_name=<?php echo $row['alast_name'];?>
&& city=<?php echo $row['city'];?>
&& zip_code=<?php echo $row['zip_code'];?>
&& gender=<?php echo $row['gender'];?>
&& phone_number=<?php echo $row['phone_number'];?>
&& security_key=<?php echo $row['security_key'];?>">Edit</a></td>

<td><a href= "admin_delete.php? admin_email=<?php echo $row['admin_email'];?>">Delete</a></td>


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