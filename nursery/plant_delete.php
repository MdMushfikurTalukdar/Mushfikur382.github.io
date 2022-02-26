<?php
	$serial_port = $_GET["serial_port"];

	include_once "connect.php";
	
    $sql = "DELETE FROM plant WHERE serial_port='$serial_port'";
    $result = mysqli_query($conn,$sql);
    if($result){
    	header("Location: employee_menu.php");
        die;
    }
    else{
        header("Location: plant_delete1.php");
            die;
        }
           
?>