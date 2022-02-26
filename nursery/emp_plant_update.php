<html>
	<head>
		<title>Plants Information</title>
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
	$name  = $_GET["name"];
	$price = $_GET["price"];
	$quantity = $_GET["quantity"];
	$seed = $_GET["seed"];
	$rating = $_GET["rating"];
    $image = $_GET["plant_image"];

	include_once "connect.php";


	$query 	= "UPDATE plant SET name='$name',price='$price', quantity='$quantity', seed='$seed', rating='$rating' , plant_image='$image' WHERE name = '$name' ";


	$result = mysqli_query($conn, $query);
    if($result){
        header("Location:employee_menu.php");
        die;
    }
    
		

?>
</body>
</html>