<?php

/*
    Displaying customer's posted jobs
*/

session_start();
include_once "autoload.php";
include_once "db/connection.php";


//Save the session 
$user_type = $_SESSION['user_type'];
$user_id = $_SESSION['id'];
$username = $_SESSION['username'];



//If customer logged in, he/she could view what jobs he/she created
if(isset($user_type) && $user_type == 'customer')
{
?>
    <a href="insert_job.php">Create new job</a> 
    <div class="container text-center">
    <h1 class="font-weight-bold text-primary">Job view of <?php echo $username;?></h1><br>
    <br>
    <br>
    <!-- display the jobs -->
    <?php
    $job = Job::customer_view_job($mysqli, $user_id);
    
}
else
{echo 'something wrong';}



