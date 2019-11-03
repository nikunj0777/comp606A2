<?php
session_start();
include_once "../autoload.php";



//getting id of the data from url
$estimate_id= $_GET['estimate_id'];


$estimate = new Estimate;
$estimate->trademan_delete_job($estimate_id);


header("Location: ../trademan_bid_joblist.php");