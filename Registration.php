<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="Style.css">
  
<title>Registration</title>
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
				
				</ul>
			</div>
    </nav> 
    
<div class="login-page">
  <div class="form">
     <h1 class="register"> REGISTRATION </h1>

     <form action="form_action_files/registration.php" class="login-form" method="post">
       <input type="text" name="first_name" placeholder="First Name" required/>
       <input type="text" name="last_name" placeholder="Last Name" required/>
       <input type="text" name="username" placeholder="Username" required/>
       <input type="text" name="mob_number" class="form-control" placeholder="Mobile number">
       <label><input type="radio" name="user_type" class="radio-inline" value="customer" required> Customer</label>
			 <label><input type="radio" name="user_type" class="radio-inline" value="trademan" required> Trademan</label>

       <input type="email" name="email" placeholder="E-mail" required/>
      
       <input type="password"  name="password" placeholder="password" required/>
     
       <button name="login" type="login">REGISTER</button>
      
       <p class="message">Now you can Login!!<a href="Login.php">Login Page</a></p>
    
    </form>
  </div>
</div>

</body>
</head>
</html>

