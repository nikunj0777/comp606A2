<?php
session_start();
include_once "../db/autoload.php";


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$_SESSION['username'] = $username;

$mobile = $_POST['mob_number'];
$email = $_POST['email'];
$user_type = $_POST['user_type'];
$_SESSION['user_type'] = $user_type;
$password = md5($_POST['password']);



$register_user = User::registration($mysqli, $first_name, $last_name, $username, $contact, $email, $user_type, $password);



if (is_null($register_user)) {
    //"Registration Failed";
    header("Location: ../Registration.php?error");
  }
  elseif ($newUser=='0') {
    //  "alredy prenst"
    header("Location: ../Registration.php?in_record");
  }
  else {
    // Registration Success
    header("Location: ../Login.php?");
  }
