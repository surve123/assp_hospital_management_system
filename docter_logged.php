<?php
 include 'dbconfig.php';
 $username = trim($_REQUEST["Username"]);
 $password = $_REQUEST["password"];

 $sql = "SELECT * FROM doctb WHERE username = '$username' AND password = '$password'";
 $result = mysqli_query($conn, $sql);
 if (!$result) {
   echo -10;
 }
 $val = mysqli_num_rows($result);
 
 if ($val == 1) {
   session_start();
   $_SESSION['loggedIn'] = true;
   $_SESSION['$doctorusername'] = $username;
   header("location: Docter_dash.php");
 }
?>