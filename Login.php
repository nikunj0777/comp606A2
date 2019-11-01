<?php
//database connection execute
include_once('connect.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css">
<title>Login FORM</title>
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
					
					<li><a href="Registration.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
				</ul>
			</div>
		</nav> 

<div class="login-page">
  <div class="form">
  <h1 class="login">LOGIN</h1>
   <form action="form_action_files/login.php" class="login-form" method="post">
    
      <input type="text" name="username" placeholder ="username"/>
      <input type ="password"  name ="password" placeholder ="password"/>
      <button name ="register" type ="register">Login</button>
     
      <p class="message">Not registered? <a href="Registration.php">Create an account</a></p>
    
    </form>
 
  </div>
</div>

</body>
</head>
</html>
