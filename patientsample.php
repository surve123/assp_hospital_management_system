<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
  header("location:loginpage.php");
  exit();
}
include 'dbconfig.php';
$sql= "SELECT * FROM patreg WHERE email = '".$_SESSION['$username']."';";
    $result=mysqli_query($conn,$sql);
if(!$result)
{echo -1;}
while($num = mysqli_fetch_assoc($result)){
    $pid=$num['pid'];
    $fname=$num['fname'];
  $lname=$num['lname'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mainstyle.css" type="text/css">
  <title>Document</title>
</head>

<body>

  <?php
  require("navbar.php")
    ?>


  <div class="bodybackground">
    <div>
      <br><br>
      <center><b>welcome
          <? echo $fname." ".$lname; ?>
        </b></center><br>
      <hr><br>
      <form action="book_appointment.html"><button type="submit" class="linkbutton"><b>book appointment</b></button>
      </form><br>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form1"><button type="submit"
          class="linkbutton" name="form1"><b>view Appointment history</b></button></form><br>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form2"><button type="submit"
          class="linkbutton" name="form2"><b>view my
            Prescriptions</b></button></form><br>
    </div>
    <?
    if (isset($_POST['form2'])) {
      require_once 'patient_function.php';
      $patientusername=$pid;
      $obj = new patient;
      $obj->view_patient_prescription($patientusername);
    }
    if (isset($_POST['form1'])) {
      require_once 'patient_function.php';
      $patientusername=$_SESSION['$username'];
      $obj = new patient;
      $obj->view_patient_appointment($patientusername);
    }


    ?>
  </div>

</body>

</html>