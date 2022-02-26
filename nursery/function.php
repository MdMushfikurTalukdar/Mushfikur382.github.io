<?php
function check_login($conn)
{
if(isset($_SESSION['user_email']))
{
$id = $_SESSION['user_email'];
$query = "SELECT * from nursery_user where user_email = '$id' limit 1";

$result = mysqli_query($conn,$query);
if($result && mysqli_num_rows($result)>0)
{
$user = mysqli_fetch_assoc($result);
return $user;
}
}
else{
header("Location: user_login.php");
die;
}
}