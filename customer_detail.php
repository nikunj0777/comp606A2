<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

   
    </head>
	<body style="background-color: lightgreen">
		<nav class="navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.html">SafeTrade</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Home</a></li>
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
    Displaying customer's posted jobs
*/

session_start();
include_once "autoload.php";
include_once "db/connection.php";


//Save the session 
$user_type = $_SESSION['user_type'];
$user_id = $_SESSION['id'];
$username = $_SESSION['username'];



//If customer logged in, he/she could view what jobs he/she created
if(isset($user_type) && $user_type == 'customer')
{
?>
    <a href="insert_job.php" class="btn btn-info" role="button" style="margin: 30px 0px 0px 600px; width:200px;">Create new job</a> 
    <div class="container text-center">
    <h1 class="font-weight-bold text-primary">Job view of <?php echo $username;?></h1><br>
    <br>
    <br>
    <!-- display the jobs -->
    <?php
    $job = Job::customer_view_job($mysqli, $user_id);
    
}
else
{echo 'something wrong';}
