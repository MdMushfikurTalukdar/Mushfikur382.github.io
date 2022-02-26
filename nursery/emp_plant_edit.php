<html>
	<head>
		<title>Plants Information</title>
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
	$name  = $_GET["name"];
	$price = $_GET["price"];
	$quantity = $_GET["quantity"];
	$seed = $_GET["seed"];

    $image = $_GET["plant_image"];
    
?>

<h1 style="text-align:center; color:white">Update Record</h1>
    
<form class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=emp_plant_update.php>

<div class="field">
    <label style="color:white">Name</label>
    <input type="text" name="name" value='<?php echo $name; ?>'>
  </div>
  <div class="field">
    <label style="color:white">Price</label>
    <input type="number" name="price" value='<?php echo $price; ?>'>
  </div>
  <div class="field">
    <label style="color:white">Quantity</label>
    <input type="number" name="quantity" value='<?php echo $quantity; ?>'>
  </div>
  <div class="field">
    <label style="color:white">Seed</label>
    <input type=text name="seed" value='<?php echo $seed; ?>'>
  </div>
    
  <div class="field">
    <label style="color:white">Plant_image</label>
    <input type=text name="plant_image" value='<?php echo $image; ?>'>
  
</div> <br>
  <button class="ui inverted blue  button" type="submit">Update</button>
</form>
</body>
</html>