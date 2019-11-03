<?php
/*
    Code for display trademan's information
*/
session_start();
include_once "autoload.php";
include_once "db/connection.php";


$id = $_SESSION['id'];


echo '<br>';


echo '<div class="container text-center"';
echo '<p> </p>';
echo '<h2 class="text-primary">Posted Jobs</h2>';

$job = Job::trademan_view_job($mysqli, $id);


echo '<div class="container text-center">';
echo '<h2 class="text-primary">Bid jobs. Good luck. :)</h2>';

$estimate = Estimate::trademan_view_estimate($mysqli, $id);
echo '</div>';
echo '<br>';




