<?php
include_once "../db/autoload.php";
session_start();

$user_id = $_SESSION['id'];
$location = $_POST['location'];
$job_type = $_POST['job_type'];
$job_category = $_POST['job_category'];
$payrate = $_POST['payrate'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];



if(isset($_SESSION['id']))   
{ 
    $job = Job::create_job($mysqli, $user_id, $location, $job_type, $job_category, $payrate, $start_date,$end_date);
    header("Location: ../customer_detail.php");
}else{
    echo "Not correct";
}

    

