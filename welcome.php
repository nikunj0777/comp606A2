<?php
session_start();
include_once "autoload.php";

$user_type = $_SESSION['user_type'];
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];


echo '<h1>Welcome to Trademe! '.$username.'</h1>';

if(isset($user_type) && $user_type == 'customer')
{
  
        
    echo '<h2 class="">Request you to create your job first.</h2>
    <a href="insert_job.php">Create job</a>
    <a href="customer_job_detail.php">My job list</a>';
        
}
else
{

    echo '<h1 class="job_title">Are you findind job ?</h2><a href="trademan_job.php"> view of my bid job!</a>';

}
?>


