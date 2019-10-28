<?php
include_once "../autoload.php";




$username = $_POST['username'];
$password =  md5($_POST['password']);  
// var_dump($username);


$user = new User;
$user->login($username, $password);


$type = $_SESSION['user_type'];
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

header("Location: ../welcome.php?");
