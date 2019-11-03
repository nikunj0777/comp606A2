<?php
/*
	 customer edit the job details
*/
session_start();
include_once "db/autoload.php";
include_once "db/connection.php";

$type = $_SESSION['user_type'];
$user_id = $_SESSION['id'];
$username = $_SESSION['username'];
$job_id = $_GET['job_id'];


$location = $_GET['location'];
$job_type = $_GET['job_type'];
$job_category = $_GET['job_category'];
$payrate = $_GET['payrate'];
$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];




?>



<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="Style.css">
  <style>
     .container{
         background:#fff;
         margin-top:20px;
         border:1px solid grey;
     }
      </style>


  
<title>job detail</title>
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
					<li><a href="Login.php"><span class="glyphicon glyphicon-user"></span> login</a></li>
					<li><a href="Registration.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
				</ul>
			</div>
		</nav>    


<div class="container"><br>
<h2>Edit JOB</h2>
  <form action="form_action_files/customer_edit_job.php?job_id=<?php echo $job_id?>" class="login-form" method="post">
    <div class="form-group">
      <label for="location">Location</label>
      <select class="form-control" name="location">
          <option value="Auckland" <?php if ($location == "Auckland") echo 'selected ' ; ?>>Auckland</option>
          <option value="Hamilton" <?php if ($location == "Hamilton") echo 'selected ' ; ?>>Hamilton</option>
          <option value="Wellington" <?php if ($location == "Wellington") echo 'selected ' ; ?>>Wellington</option>
          <option value="Christchurch" <?php if ($location == "Christchurch") echo 'selected ' ; ?>>Christchurch</option>

      </select>
      
    </div>

    <div class="form-group">
      <label for="type">Job Type</label>
      <select class="form-control" name="job_type">
          <option <?php if ($job_type == "part time" ) echo 'selected ' ; ?>>part time</option>
          <option <?php if ($job_type == "full time" ) echo 'selected ' ; ?>>full time</option>

      </select>

      
     
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select class="form-control" name=job_category>
          <option <?php if ($job_category == "Science and Technology" ) echo 'selected ' ; ?>>Science and Technology</option>
          <option <?php if ($job_category == "Accounting" ) echo 'selected ' ; ?>>Accounting</option>
          <option <?php if ($job_category == "Adminstration" ) echo 'selected ' ; ?>>Adminstration</option>
          <option <?php if ($job_category == "Construction" ) echo 'selected ' ; ?>>Construction</option>
          <option <?php if ($job_category == "Healthcare" ) echo 'selected ' ; ?>>Healthcare</option>
          <option <?php if ($job_category == "Household" ) echo 'selected ' ; ?>>Household</option>

          

      </select>

      
     
    </div>
    <div class="form-group">
      <label for="payrate">Payrate</label>
      <select class="form-control" name ="payrate">
          <option <?php if ($payrate == "$20" ) echo 'selected' ; ?>>$20</option>
          <option <?php if ($payrate == "$23" ) echo 'selected' ; ?>>$23</option>
          <option <?php if ($payrate == "$26" ) echo 'selected' ; ?>>$26</option>
          <option <?php if ($payrate == "$29" ) echo 'selected' ; ?>>$29</option>
          <option <?php if ($payrate == "$32" ) echo 'selected' ; ?>>$32</option>
          <option <?php if ($payrate == "$37" ) echo 'selected' ; ?>>$37</option>
          <option <?php if ($payrate == "$40" ) echo 'selected' ; ?>>$40</option>
     </select>


      
     
    </div>
    <div class="form-group">
    <label for="Job Duration">Job Duration</label><br>
      <label for="Job Duration">start date</label>
      <input type="date" id ="picker" class="form-control" name="start_date"  value="<?php echo $start_date;?>" required></label><br>
      <label for="Job Duration">End date</label>
      <input type="date" id ="picker" class="form-control" name="end_date" value="<?php echo $end_date;?>" required></label>
    </div>
    <input type="submit" name="change_job" class="btn btn-primary btn-block">

  </form>
</div>

</body>
</html>

</body>
</head>
</html>