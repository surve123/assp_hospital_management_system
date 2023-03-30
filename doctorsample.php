<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
    header("location:docter_logged.php");
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
    <title>Document</title>
</head>

<body>

    <?php
    require("navbar.php")
        ?>


    <div class="bodybackground">
        <div>
            <br><br>
            <center><b> Hello , Doctor
                    <?echo "".$_SESSION['$doctorusername'].""; ?>
                </b></center><br>
            <hr><br>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="form1"><button type="submit" class="linkbutton" name="form1"><b>view
                        appointment</b></button></form><br>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="form2"><button type="submit" class="linkbutton" name="form2"><b>view
                        Prescriptions</b></button></form><br>
        </div>
        <div>
            <?
            if (isset($_POST['form2'])) {
                require_once 'doctor_function.php';
                $doctorusername=$_SESSION['$doctorusername'];
                $obj = new doctor;
                $obj->view_doctor_prescription($doctorusername);
            }
            if (isset($_POST['form1'])) {
                require_once 'doctor_function.php';
                $doctorusername=$_SESSION['$doctorusername'];
                $obj = new doctor;
                $obj->view_doctor_appointment($doctorusername);
            }
            
            
            ?>
        </div>
    </div>

</body>

</html>