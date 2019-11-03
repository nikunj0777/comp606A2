<?php 
/*
   This page is for displaying customer confirmation of an estimate.
*/
session_start();
include_once "autoload.php";
include_once "db/connection.php";

echo '<br>';
echo '<div class="container text-center">';
echo '<h2 class="text-success">Confirmation Done</h2>';

$job_id = $_SESSION['job_id'];


//if the estimate got confrimed 
if(isset($_GET['trademan_id']))
{
    $trademan_id = $_GET['trademan_id'];
    $bid = Estimate::customer_confrim($mysqli, $job_id, $trademan_id);
    
}

$bid = Estimate::customer_view_estimate($mysqli, $job_id);
