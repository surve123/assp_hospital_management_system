<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
 
  include 'dbconfig.php';
  $email = trim($_REQUEST["email"]);
  $password = $_REQUEST["password"];

  $sql = "SELECT * FROM patreg WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    echo -10;
  }
  $val = mysqli_num_rows($result);
  
  if ($val == 1) {
    session_start();
    $_SESSION['loggedIn'] = true;
    $_SESSION['$username'] = $email;
    header("location: patientsample.php");
  }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login page</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="patient_login_body">
  <div class="container">
    <h1>Patient Login</h1>
    <form action="loginpage.php" method="post">
      <div class="box">
        <input type="email" name="email" id="email" placeholder="Email" required>
      </div>
      <div class="box">
        <input type="password" name="password" id="password" placeholder="Password" required>
      </div>
      <button class="btn" type="submit">Login</button>
    </form>
  </div>
</body>

</html>