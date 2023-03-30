<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
 
    include 'dbconfig.php';
    $username = $_REQUEST["Username"];
    $password = $_REQUEST["password"];
  
    $sql = "SELECT * FROM admintb WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      echo -10;
    }
    $val = mysqli_num_rows($result);
    
    if ($val == 1) {
      session_start();
      $_SESSION['loggedIn'] = true;
      $_SESSION['$adminusername'] = $username;
      header("location: adminsample.php");
    }
  }
?>