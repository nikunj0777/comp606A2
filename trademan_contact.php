<?php 

session_start();
include_once "autoload.php";
include_once "db/connection.php";


$trademan_id = $_GET['trademan_id'];

if($trademan_id != 0)
{
    echo '<div class="container text-center">';
    echo '<h4 class="text-dark">Trademan Details</h6>';
    
    $trademan = User::view_trademan_contact($mysqli, $trademan_id);

    //a button for confirming with this bid
    echo '<a href="confirm.php?trademan_id='.$trademan_id.'">Confirm Bid</a>';


}else{
    echo '<div class="container text-center">';
    echo '<h4 class="text-dark">No Bid. Try again.</h6>';
    echo '<h4 class="text-dark"><a href="customer_detail.php">Go back</a> </h6>';
    echo '</div>';
} 
