
<?php
	$email = $_GET["admin_email"];

	include_once "connect.php";
	
	$sql = "DELETE FROM nursery_admin WHERE admin_email='$email'";
	
	$result = mysqli_query($conn,$sql);
	
	if($result){
		
		header("Location: admin_details.php");
	}
	else{
		echo '<script >alert("Warning!! This is not able to delete")</script>';
	}
?>