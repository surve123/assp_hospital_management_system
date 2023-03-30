 <?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
  header("location:func2.php");
  exit();
}
include 'dbconfig.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mainstyle.css" type="text/css">
  <STYle>
    .prescribed {
  background-color: #0e109c;
  margin: -4px 0px;
  padding: 7px 9px;
  color: white;
  border-radius: 12px;
}
.reassign_button {

background-color: #0ca9e5;
  margin: -4px 0px;
  padding: 7px 10px;
  color: white;
  border-radius: 12px;
}
.containeradmin {
            display: grid;
            grid-template-columns: 15% 85%;

        }

        .menu {
            grid-column: 1;
            /* position: fixed; */
            /* border: 3px solid black; */
            height: 1000px;
        }

        .menubox {
            position: fixed;
            /* border: 2px solid blue; */
            width: 100%;
            /* padding-top: 100px; */
            border-right: 2px solid #ddd;

        }

        .showpane {
            grid-column: 2;
            height: 1000px;
            /* border: 2px solid green; */
            width: 100%;
            /* margin-left: 20px; */
            padding-left: 3px;
            border-left: 3px solid #ddd;
            
        }
        button{
            color: black;
            background-color: #ddd;
            text-align: center;
            padding: 15px 28px ;
            font-size:14px;
            font-family: ui-rounded;
            border: 1px solid black;
            width: 100;
            
        }
        .buttons{
            padding: 4px 4px;

           
        }
        .adminheader{
            
            padding: 20px 20px;
            text-align: center;
            /* position: fixed; */
            width: 100%;
            background-color: white;
        }

  </STYle>
  <title>Document</title>
</head>

<body>

  <?php
  require("navbar.php")
    ?>

  <div class="bodybackground">
    <div>
    <div class="adminheader">
        
        <b> Hello , Admin</b>
        <hr>
      </div>
      <div class="containeradmin">
        <div class="menu">
          <div class="menubox">
            <form action="admin_doctor_registration.php"><button type="submit" class="linkbutton"><b>Add Doctor</b></button>
            </form><br>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form1"><button type="submit" name="form1"
                class="linkbutton"><b>view Doctor</b></button></form><br>
            <form action="admin_patient_registration.php"><button type="submit" class="linkbutton"><b>Add
                  Patient</b></button></form><br>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form2"><button type="submit" name="form2"
                class="linkbutton"><b>view patient</b></button></form><br>
            <form action="#"><button type="submit" class="linkbutton"><b>Add appointment</b></button></form><br>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form3"><button type="submit" name="form3"
                class="linkbutton"><b>View Appointment</b></button></form><br>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form4"><button type="submit" name="form4"
                class="linkbutton"><b>View Queries</b></button></form><br>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form5"><button type="submit" name="form5"
                class="linkbutton"><b>View Prescriptions</b></button></form><br>
          </div>
        </div>
        <div class="showpane">
            <?
          if (isset($_POST['form1'])) {
            require_once 'admin_function.php';
            $obj = new admin;
            $obj->view_admin_doctor();
          }
          if (isset($_POST['form2'])) {
            require_once 'admin_function.php';
            $obj = new admin;
            $obj->view_admin_patient();
          }
          if (isset($_POST['form3'])) {
            require_once 'admin_function.php';
            $obj = new admin;
            $obj->view_admin_appointment();
          }
          if (isset($_POST['form4'])) {
            require_once 'admin_function.php';
            $obj = new admin;
            $obj->view_admin_queries();
          }
          if (isset($_POST['form5'])) {
            require_once 'admin_function.php';
            $obj = new admin;
            $obj->view_admin_prescription();
          }
          
          // if (isset($_POST['cancelappointment'])) {
          //   require_once 'admin_function.php';
          //   // echo "succes";
          //   try {
          //     $pid = $_REQUEST['pid'];
          //     $id = $_REQUEST['id_app'];
          //     echo $id;
          //     echo $pid;
          //   } catch (Exception $e) {

          //   }
          //   $obj = new admin;
          //   $obj->cancel_appointment_admin($id);
          //   if ($obj == true) {
          //     $id = 0;
          //     $obj = new admin;
          //     $obj->view_admin_appointment();
          //   }
          //}



          ?>


        </div>
    </div>
      
   

    
      
    </div>
  </div>
</body>

</html>