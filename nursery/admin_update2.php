<html>
	<head>
		<title>Admin's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
        <style>body {
  background-image: url('hh.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<?php
	$admin_email = $_GET["admin_email"];
	$first_name  = $_GET["afirst_name"];
	$last_name = $_GET["alast_name"];
	$city = $_GET["city"];
    $phone_number = $_GET["phone_number"];
	
    $zip_code = $_GET["zip_code"];
	$gender = $_GET["gender"];
	$security_key = $_GET["security_key"];
	include_once "connect.php";


	$query 	= "UPDATE nursery_admin
     SET afirst_name='$first_name',
     alast_name='$last_name',
     admin_email='$admin_email', 
     security_key='$security_key',
     gender='$gender',
      city='$city',
      zip_code='$zip_code',
      phone_number='$phone_number'

       WHERE admin_email= '$admin_email' ";


	$result = mysqli_query($conn, $query);
    if($result){
     header("Location:admin_details.php");
        die;
    }
    
		

?>
</body>
</html>