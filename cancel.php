<?php
try {
    include 'dbconfig.php';
    $id = $_REQUEST['id'];
    $doctor = $_REQUEST['doctor'];
    if ($doctor == true) {
        // echo "success";
        $sql = "UPDATE `myhmsdb`.`appointmenttb` SET `doctorStatus` = '0' WHERE `appointmenttb`.`ID` = '$id';";
        $result = mysqli_query($conn, $sql);
        if (!$result) //checking for succesfuull insertion
        {
            echo "appointment not cancelled";
        } else {
            header("location: Docter_dash.php");
        }



    } else {
        // echo "another success";
        $sql ="UPDATE `myhmsdb`.`appointmenttb` SET `userStatus` = '0' WHERE `appointmenttb`.`ID` = '$id';";
            $result = mysqli_query($conn, $sql);
            if (!$result) //checking for succesfuull insertion
            {
                echo "data not inserted";
            } 
            else {
                header("location: patient_dash.php");
            }

    }

    return true;
} catch (Exception $e) {

}




?>