<?php
session_start();
  include ('config.php');

  if (!isset($_SESSION['username'])) {
  unset($_SESSION['username']);
  $_SESSION['usericonblinkdecide'] = "usericonblink";
  header('location:../index.php');
} else {
$_SESSION['usericonblinkdecide'] = "usericonblinknone";

$username = $_SESSION['username'];
 
$message = $_POST['message'];
?>
<script>
   document.getElementById("message").value = "";
   document.getElementById("myBtn").disabled = true;
</script>
<?php

try{
    $pdo = new PDO("mysql:host=57.db.sigmanet.lv;dbname=c_funcat", "funcat", "0c73wByJVo");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}


// Attempt insert query execution
try{
      // Create prepared statement
    $sql = "INSERT INTO chat (username, message) VALUES ('$username', '$message')";
    $stmt = $pdo->prepare($sql);

    // Execute the prepared statement
    $stmt->execute();
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
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