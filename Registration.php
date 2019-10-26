<html>
<head>
   <link rel="stylesheet" type="text/css" href="Style.css">
  
<title>Registration</title>
<body>
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
      
       <p class="message">Now you can access Login!!<a href="Login.php">Login Page</a></p>
    
    </form>
  </div>
</div>

</body>
</head>
</html>
