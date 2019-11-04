<html>
    <head>
    <title>My website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link type="text/css" href="Style.css" rel="stylesheet">
   
    
</head>
<body>
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
    This is page for displaying all bids by only single job.
*/
session_start();
include_once "autoload.php";
include_once "db/connection.php";

$job_id = $_GET['job_id'];
$_SESSION['job_id'] = $job_id;
$job_category = $_GET['job_category'];
$job_status = $_GET['job_status'];


if($job_status == 'Yes')
{
    echo '<div class="container text-center">';
    echo '<h2 class="font-italic text-success">Your job '.$job_category.' got bid! Below are the details: </h2><br>';
   $bid = Estimate::customer_view_estimate($mysqli, $job_id);
    
}else
{
    echo '<br><br>';
    echo '<div class="container text-center">';
    echo '<h2 class="text-dark" style="text-align:center">----Sorry. No Bid----</h2>';
    echo '<h4 class="text-dark"><a href="customer_detail.php" class="btn btn-info" role="button" style="margin: 0px 0px 0px 55px; width:200px;">Click here to see jobs</h4>';
    echo '</div>';
} 


