<?php

include_once "connect.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$email = $_POST['email'];
$skill = $_POST['computer_skill'];


if(!empty($skill))
{

$sql =    "INSERT into job_seeker_computer_skill(computer_skill,email) 
            values('$skill','$email')";

mysqli_query($conn,$sql);
header("Location: jobseeker_feedback.php");
die;
}
else
{
echo "Please enter some valid information";
}
}

?>


<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<title>Skill</title>
</head>
<body>


	<style type="text/css">
        body {
  background-image: url('image/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
#text{
height: 25px;
border-radius: 5px;
padding:4px;
border:solid thin #aaa;
width: 100%;
}
#button{
padding:10px;
width: 100px;
color: black;
background-color: #D58AC1;
border: none;
}
#box{

margin: 80px auto;
width: 300px;
padding: 30px;
}
	</style>

<div align='center'id="box">
    <form method="post">
        <div style="front-size: 20px; margin: 10px;color:white;">Enter Your Best Skill or Hobby</div>

            
        <b> <h2 style= 'color:#F34BC6' >Choose any skill:</h2></b>
  <select name="computer_skill">
    
    
    <option>Skilled in plant identification</option>
    <option>Ability to work outdoors and be physically fit</option>
    <option>Daily Observations</option>
    <option>Microsoft Skill</option>
    <option>Excellent written and oral communication skills</option>
    
  </select>
  <br><br>
            <input id="text" type="text" name="email" placeholder="your email"><br><br>

            <input id="button" type="submit" value="Done"><br><br>
            

            
    </form>
</div>
<a href="jobseeker_feedback.php"><button class='ui inverted pink button'>No Skill</button></a><br><br>
</body>
</html>