<html>
    <head>
    <title>My website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
    
</head>
<body style="background-color:lightgreen">
		<nav class="navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">SafeTrade</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> logout</a></li>
					
				</ul>
			</div>
		</nav>   
	
</body>
</html>




<?php
/*
    Code for display trademan's information
*/
session_start();
include_once "autoload.php";
include_once "db/connection.php";


$id = $_SESSION['id'];


echo '<br>';


echo '<div class="container text-center"';
echo '<p> </p>';
echo '<h2 class="text-primary">Posted Jobs</h2>';

$job = Job::trademan_view_job($mysqli, $id);


echo '<div class="container text-center">';
echo '<h2 class="text-primary">Bid jobs. Good luck.</h2>';

$estimate = Estimate::trademan_view_estimate($mysqli, $id);
echo '</div>';
echo '<br>';
