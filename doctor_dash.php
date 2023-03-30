<?
require_once 'doctor_function.php';
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
    header("location:index.php");
    exit();
}
include 'dbconfig.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="mainstyle.css" type="text/css">
    <title>ASSP Hospital</title>
</head>
<style>
    .row1 {
        margin-left: 5px;
        margin-top: 300px;
    }
    .v1{
        margin-top: -300px;
        border-left: 3px solid #dddd;
        height:800px;
    }
    .docter_dash{
        margin-top: -250px;
    }
</style>

<body>
    <!-- Image and text -->
    <!-- <nav class="navbar navbar-light bg-dark ">
        <a class="navbar-brand" href="#">
            ASSP Hospital
        </a>
    </nav> -->
    <?php
    require("navbar.php")
        ?>
    <div class="row row1">
        <div class="col-3">
                <div class="list-group " id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-Dashboard-list" data-toggle="list"
                        href="#list-Dashboard" role="tab" aria-controls="Dashboard">Dashboard</a>
                    <a class="list-group-item list-group-item-action" id="list-Appointment-list" data-toggle="list"
                        href="#list-Appointment" role="tab" aria-controls="Appointment">Appointment</a>
                    <a class="list-group-item list-group-item-action" id="list-Pricscription List-list"
                        data-toggle="list" href="#list-Pricscription List" role="tab"
                        aria-controls="messages">Pricscription List</a>

                </div>
        </div>
        <div class="v1 "></div>
        <div class="col-6">
            <div class="tab-content docter_dash" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-Dashboard" role="tabpanel"
                    aria-labelledby="list-Dashboard-list"> hello</div>
                <div class="tab-pane fade" id="list-Appointment" role="tabpanel"
                    aria-labelledby="list-Appointment-list"><?
                    $doctorusername=$_SESSION['$doctorusername'];
                    $obj = new doctor;
                    $obj->view_doctor_appointment($doctorusername);?></div>
                <div class="tab-pane fade" id="list-Pricscription List" role="tabpanel"
                    aria-labelledby="list-Pricscription List"> <?
                      
                        $doctorusername= $_SESSION['$doctorusername'];
                        $obj = new doctor;
                        $obj->view_doctor_prescription($doctorusername);
                    ?></div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>