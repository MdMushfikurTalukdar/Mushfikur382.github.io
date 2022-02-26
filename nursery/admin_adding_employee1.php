<html>
	<head>
		<title>Employee Adding</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>

    
        <style>


body {
  background-image: url('image/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}


</style>
<style type="text/css">
#text{
height: 25px;
border-radius: 5px;
padding:4px;
border:solid thin #aaa;
width: 100%;
}
#button{
padding :10px;
width: 100px;
color: white;
background-color: #397967;
border: none;
}
#box{

margin: auto;
width: 500px;
padding :80px;
}
	</style>
<?php
    include_once "connect.php";


	$email  = $_GET["email"];
	$first_name = $_GET["first_name"];
	$last_name = $_GET["last_name"];
	$city = $_GET["city"];
	$zip_code = $_GET["zip_code"];
    $instute_name = $_GET["instute_name"];
    $sector_name = $_GET["sector_name"];
    $phone_number = $_GET["phone_number"];
    $date_of_birth = $_GET["date_of_birth"];

    if($_SERVER['REQUEST_METHOD'] =="POST"){
    $password = $_POST['employee_password'];
    $gender = $_POST['gender'];
    $work_hour = $_POST['work_hour'];
    $house_no = $_POST['house_no'];
    $salary = $_POST['salary'];
    $admin_email = $_POST['admin_email'];

	


	$sql =  "INSERT into employee(employee_email,employee_password,first_name,last_name,gender,phone_number,work_hour,city,zip_code,house_no,date_of_birth,salary,admin_email,coupon_code) 
            values('$email','$password','$first_name','$last_name','$gender','$phone_number','$work_hour','$city','$zip_code','$house_no','$date_of_birth','$salary','$admin_email','EMPLOYEE15')";

        
	$result = mysqli_query($conn,$sql);
    $sql2 = "UPDATE job_seeker SET j_status='Accepted' where email='$email'";
        $result2= mysqli_query($conn,$sql2);
    if($result && $result2){
        
        
        header("Location:admin_adding_employee.php");
        die;
    }
    else{
        echo '<script >alert("Already Accepted")</script>';
    }
}

?>
<div id="box">
    <form method="post">
        <div align="center" style="front-size: 20px; margin: 10px;color:white;">Adding As Employee</div>

            <input id="text" type="number" name="salary" placeholder="enter employee's salary"><br><br>
            <input id="text" type="number" name="work_hour" placeholder="enter employee's work hour"><br><br>
            <input id="text" type="text" name="gender" placeholder="employee's gender"><br><br>
            <input id="text" type="text" name="house_no" placeholder="employee's house number"><br><br>
            <input id="text" type="text" name="employee_password" placeholder="set employee password"><br><br>
            <input id="text" type="text" name="admin_email" placeholder="enter admin reference email"><br><br>

            <input id="button" type="submit" value="Accept"><br><br>
            

            
    </form>
    <a href="admin_adding_employee.php"><button class='ui inverted orange button'>Cancel</button></a><br><br>
</div>
</body>
</html>