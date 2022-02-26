<?php
include_once "connect.php";
include_once "admin_navbar1.php";
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
<th>User Name</th>
<th>Join Date</th>
<th>Gender</th>
<th>earn_point</th>

</tr>
</thead>

<?php
include_once "connect.php";

$sql = "SELECT * 
FROM nursery_user
ORDER BY earn_point DESC";

$result = mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){
?>
<tr>

<td> <?php echo $row["first_name"]. " ".$row['last_name'] ?> </td>
<td> <?php echo $row["join_date"] ?> </td>
<td> <?php echo $row["gender"] ?> </td>
<td> <?php echo $row["earn_point"] ?> </td>

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