<?php
session_start();
include_once "../db/autoload.php";

$job_id = $_GET['job_id'];
if(isset($_POST['change_job']))
{	

    
$location = $_POST['location'];
$job_type = $_POST['job_type'];
$job_category = $_POST['job_category'];
$payrate = $_POST['payrate'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
	
	
	
    $job = Job::customer_edit_job($mysqli, $job_id, $location, $job_type, $job_category, $payrate, $start_date,$end_date);
    
    $type = $_SESSION['user_type'];
    $user_id = $_SESSION['id'];
    $username = $_SESSION['username'];



    header("Location: ../customer_detail.php");



	
}
