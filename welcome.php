<html>
    <head>
    <title>My website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link type="text/css" href="Style.css" rel="stylesheet">
    <link type="text/css" href="style1.css" rel="stylesheet">
    
</head>
<body>
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
session_start();
include_once "db/autoload.php";

$user_type = $_SESSION['user_type'];
$user_id = $_SESSION['id'];
$username = $_SESSION['username'];





if(isset($user_type) && $user_type == 'customer')
{
    echo'<ul class="hello">';
      echo'<div class="welcome message"><h1 style="text-align:center">Welcome '.$username.'</h1></div>';
   // echo'<li><a href="logout.php">Logout</a></li>';
    echo'<a href="insert_job.php" class="btn btn-info" role="button" style="margin: 30px 0px 0px 400px; width:200px;" >Create job</a>';
    echo '<a href="customer_detail.php" class="btn btn-info" role="button" style="margin: 30px 0px 0px 50px; width:200px;" >My job list</a>';
    echo'</ul>';
   
}
else
{
    echo'<ul>';
    echo '<div class="welcome message"><h1>Welcome '.$username.',</h1></div>';
    echo'<h2 class="jo_title" style="text-align:center; text-shadow: 3px 2px grey;">Are you looking for the job ? </h2><a href="trademan_job.php" class="btn btn-info" role="button" style="margin: 30px 0px 0px 590px; width:200px;"> view of my bid job!</a>';
    echo'</ul>';
    
}
?>


