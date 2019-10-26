<?php
//session execution
session_start();
//session destroy
if(session_destroy()){
    header("Location:login.php");
}
?>
