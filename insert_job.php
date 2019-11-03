<?php
include_once "db/autoload.php";
session_start();


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
<h2>POST A JOB</h2>
  <form action="form_action_files/createjob.php" class="login-form" method="post">
    <div class="form-group">
      <label for="location">Location</label>
      <select class="form-control" name="location">
          <option></option>
          <option value="Auckland">Auckland</option>
          <option value="Hamilton">Hamilton</option>
          <option value="Wellington">Wellington</option>
          <option value="Christchurch">Christchurch</option>

      </select>
      
    </div>

    <div class="form-group">
      <label for="type">Job Type</label>
      <select class="form-control" name="job_type">
          <option></option>
          <option>part time</option>
          <option>full time</option>

      </select>

      
     
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select class="form-control" name=job_category>
          <option></option>
          <option>Science and Technology</option>
          <option>Accounting</option>
          <option>Adminstration</option>
          <option>Construction</option>
          <option>Healthcare</option>
          <option>Household</option>

          

      </select>

      
     
    </div>
    <div class="form-group">
      <label for="payrate">Payrate</label>
      <select class="form-control" name ="payrate">
          <option></option>
          <option>$20</option>
          <option>$23</option>
          <option>$26</option>
          <option>$29</option>
          <option>$32</option>
          <option>$37</option>
          <option>$40</option>
     </select>


      
     
    </div>
    <div class="form-group">
    <label for="Job Duration">Job Duration</label><br>
      <label for="Job Duration">start date</label>
      <input type="date" id ="picker" class="form-control" name="start_date"></label><br>
      <label for="Job Duration">End date</label>
      <input type="date" id ="picker" class="form-control" name="end_date"></label>
    </div>
    <input type="submit" class="btn btn-success" value="Submit">

  </form>
</div>

</body>
</html>

</body>
</head>
</html>