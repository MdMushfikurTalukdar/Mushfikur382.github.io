<?php
session_start();
include_once "connect.php";
include_once "navagation_bar.php";
include_once "admin_function.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.btn {
  border: 10px;
  outline: 10px;
  padding: 15px 16px;
  background-color: #f1f1f1;
  cursor: grab;
  font-size: 32px;
}


.active, .btn:hover {
  background-color: #666;
  color: black;
}
body {
  background-image: url('image/admin.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>
<body>
 
<div style='margin:80px 20px' id="myDIV">
  <a href="admin_details.php"><button class="btn ">Admin Details</button></a><br><br>
  <a href="admin_employee.php"><button class="btn">Employee</button></a><br><br>
  <a href="admin_user.php"><button class="btn">User</button></a><br><br>
  <a href="admin_login.php"><button class="btn">Logout</button></a>
</div>

<script>
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>

</body>
</html>
