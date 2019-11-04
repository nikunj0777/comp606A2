<?php
//connection execute
include_once('connect.php');

if(!isset($_SESSION['username'])){
    header("Location:login.php");
   }
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css">
<title>WrongDetails</title>
<body>


<h1>Please enter valid details...!!!</h2>
<a class= logout href="logout.php">logout</a>


</body>
</head>
</html>
