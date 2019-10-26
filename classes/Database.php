<?php


// session_start();
// $db = mysqli_connect("localhost","root","","safe_trade");
// mysqli_select_db($db, "safe_trade");



class Database
{
  public $db;

  public function  __construct()
  {
    $username = "root";
    $password = "";
    $servername = "localhost";
    $db_name = "trademe";

    try 
    {

      $this->db = new PDO("mysql:host=$servername; dbname=$db_name", $username, $password);
    
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    catch(PDOException $e)
    {
      echo "Connection failed: " . $e->getMessage();
    }
  }


}