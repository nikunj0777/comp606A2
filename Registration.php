<?php
//database connection execute
include_once('connect.php');
?>

<html>
<head>

  <link rel="stylesheet" type="text/css" href="Style.css">
  
<title>Registration</title>
<body>
<div class="login-page">
  <div class="form">
     <h1 class="register"> REGISTRATION </h1>

     <form class="login-form" method="post">
    
       <input type="text" name="username" placeholder="username" required/>
       
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

