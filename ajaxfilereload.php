<?php
session_start();
  include ('config.php');

  if (!isset($_SESSION['username'])) {
  unset($_SESSION['username']);
  $_SESSION['usericonblinkdecide'] = "usericonblink";
  header('location:../index.php');
} else {
$_SESSION['usericonblinkdecide'] = "usericonblinknone";

 
?>

<?php

try{
    $pdo = new PDO("mysql:host=57.db.sigmanet.lv;dbname=c_funcat", "funcat", "0c73wByJVo");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}


$sql = "select * from chat ORDER BY dateandtime DESC";
$result = mysqli_query($con,$sql);   
echo "<table>";         
while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){



    echo "<tr>";
      echo "<td>";
          echo $row['username'];
        echo "</td>";
        echo "<td>";
          echo $row['message'];    
      echo "</td>";
        echo "<td>";
          echo $row['dateandtime'];
        echo "</td>";
    echo "</tr>";
  }

echo "</table>";
echo $response;
}
exit;
?>