<?php
session_start();
include_once "../autoload.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$_SESSION['username'] = $username;

$mobile = $_POST['mob_number'];
$email = $_POST['email'];
$user_type = $_POST['user_type'];
$_SESSION['user_type'] = $user_type;
$password = md5($_POST['password']);

$user = new User;
$user->register($first_name, $last_name, $username, $mobile, $email, $user_type, $password);
header("Location: ../Login.php?");
