<?php
//database connection execute
include_once('connect.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Style.css">
<title>Login FORM</title>
<body>


<div class="login-page">
  <div class="form">
  <h1 class="login">LOGIN</h1>
    
    <form class="login-form" method="post">
    
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
