<?php
include_once "../db/autoload.php";
$username = $_POST['username'];
$password = md5($_POST['password']);  

$user_type = $_SESSION['user_type'];
$id = $_SESSION['id'];
$user_name = $_SESSION['username'];
$loginUser = User::login($mysqli, $username,$password);

if(is_null($loginUser)) {
    header("Location: ../Login.php?error");
} else {
    echo "<h2>Login successfully</h2>";
    header("Location: ../welcome.php?");
}
