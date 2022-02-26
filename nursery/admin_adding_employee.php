<?php
session_start();
include_once "connect.php";
include_once "admin_function.php";

?>


<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
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
<th>Date Of Birth</th>
<th>Sector Name</th>
<th>Instute Name</th>
<th>City</th>
<th>Zip Code</th>
<th>Skill</th>
<th></th>
<th>Status</th>

</tr>
</thead>

<?php

$sql = "SELECT * from job_seeker AS j
right join job_seeker_computer_skill AS c
on j.email=c.email";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
?>
<tr>

<td> <?php echo $row["first_name"]." ".$row["last_name"] ;?> </td>
<td> <?php echo $row['date_of_birth'] ;?> </td>
<td> <?php echo $row['sector_name'] ;?> </td>
<td> <?php echo $row['instute_name'] ;?> </td>
<td> <?php echo $row['city'] ;?> </td>
<td> <?php echo $row['zip_code'] ;?> </td>
<td> <?php echo $row['computer_skill'] ;?> </td>


<td><a href= "admin_adding_employee1.php? email=<?php echo $row['email'];?>
&&first_name=<?php echo $row['first_name'];?>
&& last_name=<?php echo $row['last_name'];?>
&& city=<?php echo $row['city'];?>
&& zip_code=<?php echo $row['zip_code'];?>
&& instute_name=<?php echo $row['instute_name'];?>
&& sector_name=<?php echo $row['sector_name'];?>
&& phone_number=<?php echo $row['phone_number'];?>
&& date_of_birth=<?php echo $row['date_of_birth'];?>">Accept</a></td>
<td> <?php echo $row['j_status']; ?></td>

</tr>
<?php
}
?>
</table>
</form>
<a href="admin_employee.php"><button class='ui inverted blue button'>Cancel</button></a><br><br>
</center>
</body>
</head>
</html>