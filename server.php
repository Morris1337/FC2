<?php
session_start();
include 'config.php';

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// SESSION CHECK SET OR NOT
if (!isset($_SESSION['username'])) {
  unset($_SESSION['username']);
  $_SESSION['usericonblinkdecide'] = "usericonblink";
  header('location:../index.php');
} else {

try{
    $pdo = new PDO("mysql:host=57.db.sigmanet.lv;dbname=c_funcat", "funcat", "0c73wByJVo");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

}

?>










