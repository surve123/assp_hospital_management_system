<?
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
  header("location: patient_dash.php");
}
?>