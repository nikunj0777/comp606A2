<?php 
/*
    This is page for displaying all bids by only single job.
*/
session_start();
include_once "autoload.php";
include_once "db/connection.php";

$job_id = $_GET['job_id'];
$_SESSION['job_id'] = $job_id;
$job_category = $_GET['job_category'];
$job_status = $_GET['job_status'];




if($job_status == 'Yes')
{
    echo '<div class="container text-center">';
    echo '<h2 class="font-italic text-success">Your job '.$job_category.' got bid! Below are the details: </h2><br>';
    $bid = Estimate::customer_view_estimate($mysqli, $job_id);
    
}else
{
    echo '<br><br>';
    echo '<div class="container text-center">';
    echo '<h4 class="text-dark">Sorry. No Bid</h6>';
    echo '<h4 class="text-dark"><a href="customer_detail.php">Click here</a> to see jobs</h6>';
    echo '</div>';
} 


