<html>
	<head>
		<title>Admin's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
<body>
    <style>body {
  background-image: url('image/img.jpg');
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
    

	
?>

<h1 style="text-align:center; color:white">Update Record</h1>
    
<form class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=admin_update2.php>


<div class="field">
    
    <input type="hidden" name="admin_email" value='<?php echo $admin_email; ?>'>
    
  </div>
<div class="field">
    <label style="color:white">First Name</label>
    <input type="text" name="afirst_name" value='<?php echo $first_name; ?>'>
  </div>
  <div class="field">
    <label style="color:white">Last Name</label>
    <input type="text" name="alast_name" value='<?php echo $last_name; ?>'>
  </div>

  <div class="field">
    <label style="color:white">Phone Number</label>
    <input type="text" name="phone_number" value='<?php echo $phone_number; ?>'>
  </div>

  <div class="field">
    <label style="color:white">City</label>
    <input type="text" name="city" value='<?php echo $city; ?>'>
  </div>
  <div class="field">
    <label style="color:white">Zip Code</label>
    <input type="number" name="zip_code" value='<?php echo $zip_code; ?>'>
  </div>
  <div class="field">
    <label style="color:white">Gender</label>
    <input type="text" name="gender" value='<?php echo $gender; ?>'>
  </div>
  <div class="field">
    <label style="color:white">Security Key</label>
    <input type="text" name="security_key" value='<?php echo $security_key; ?>'>
  </div>
    
  
  <button class="ui inverted blue  button" type="submit">Update</button>
</form>
</body>
</html>