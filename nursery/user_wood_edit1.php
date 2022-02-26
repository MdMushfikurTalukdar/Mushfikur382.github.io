
<?php

include_once "connect.php";

?>


<!doctype html>
<html>
<head>
   <title>Successfull</title>
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
padding :10px;
width: match-parent;
color: black;
background-color: #397967;
border: none;
}
#box{

margin: auto;
color:white;
width: 300px;
padding: 20px;
top:200px;
}
a:link {
 color: white;
 background-color: transparent;
 text-decoration: none;
}

a:hover {
 color: brown;
 background-color: transparent;
 text-decoration: underline;
}
a:active {
 color: yellow;
 background-color: transparent;
 text-decoration: underline;
}
   </style>

<div align="center" id="box">
<h2 style="padding-top: 80px"; align='center'>Successfully order the item.</h2>
<a href="user_wood.php" id = "button">Done</a>
</div>

</body>
</html>