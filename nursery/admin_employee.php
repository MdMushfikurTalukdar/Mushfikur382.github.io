<?php
include_once "connect.php";
include_once "admin_navbar.php";
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
<th>Name</th>
<th>E-mail</th>
<th>Phone Number</th>
<th>Salary</th>
<th>Join Date</th>
<th>Added By</th>

</tr>
</thead>

<?php
include_once "connect.php";

$sql = "SELECT * from employee AS e
RIGHT JOIN nursery_admin AS a
ON e.admin_email=a.admin_email";

$result = mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){
?>
<tr>

<td> <?php echo $row["first_name"]. " ".$row['last_name'] ?> </td>
<td> <?php echo $row["employee_email"] ?> </td>
<td> <?php echo $row["phone_number"] ?> </td>
<td> <?php echo $row["salary"] ?> </td>
<td> <?php echo $row["join_date"] ?> </td>
<td> <?php echo $row["afirst_name"]. " ".$row['alast_name'] ?> </td>

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