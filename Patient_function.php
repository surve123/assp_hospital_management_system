<?php
class patient
{
    public function view_patient_prescription($patientusername)
    {
        try {
            include 'dbconfig.php';
            ?>
            <table>
                <tr>
                    <th>Doctor name</th>
                    <th>Patient ID</th>
                    <th>Appointment ID</th>
                    <th>Patient Name</th>
                    <th>Appoitmet Date</th>
                    <th>Appoitmet Time</th>
                    <th>Disease</th>
                    <th>Allergy</th>
                    <th>Prescription</th>
                </tr>
                <?
                $sql = "SELECT * FROM `prestb` WHERE pid = '".$patientusername."' ORDER BY `prestb`.`appdate` DESC ";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo -1;
                }
                while ($num = mysqli_fetch_assoc($result)) {
                    $doctorname = $num['doctor'];
                    $patientid = $num['pid'];
                    $appid = $num['ID'];
                    $patietfname = $num['fname'];
                    $patietlname = $num['lname'];
                    $appdate = $num['appdate'];
                    $apptime = $num['apptime'];
                    $disease = $num['disease'];
                    $allergy = $num['allergy'];
                    $prescription = $num['prescription'];
                    ?>
                    <tr>
                        <td>
                            <?= $doctorname ?>
                        </td>
                        <td>
                            <?= $patientid ?>
                        </td>
                        <td>
                            <?= $appid ?>
                        </td>
                        <td>
                            <?= $patietfname ?>&nbsp;
                            <?= $patietlname ?>
                        </td>

                        <td>
                            <?= $appdate ?>
                        </td>
                        <td>
                            <?= $apptime ?>
                        </td>
                        <td>
                            <?= $disease ?>
                        </td>
                        <td>
                            <?= $allergy ?>
                        </td>
                        <td>
                            <?= $prescription ?>
                        </td>
                    </tr>
                <? } ?>
            </table>

            <?

            return true;
        } catch (Exception $e) {

        }
    }

    public function view_patient_appointment($patientusername)
    {
        try {
            include 'dbconfig.php';

            ?>
            <table>
                <tr>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <!-- <th>Last name</th> -->
                    <th>Gender</th>
                    <th>Email</th>
                    <!-- <th>Mobile</th> -->
                    <th>Doctor</th>
                    <th>Doctor fees</th>
                    <th>appointment date</th>
                    <th>Appointment time</th>
                    <th>Doctor status</th>
                    <th>Cancel Appointment</th>
                </tr>
                <?
                $sql = "SELECT * FROM `appointmenttb` WHERE email = '".$patientusername."' ORDER BY `appointmenttb`.`appdate` DESC ";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo -1;
                }
                while ($num = mysqli_fetch_assoc($result)) {
                    $pid = $num['pid'];
                    $id=$num['ID'];
                    $fname = $num['fname'];
                    $lname = $num['lname'];
                    $gender = $num['gender'];
                    $email = $num['email'];
                    $mobile = $num['contact'];
                    $doctor = $num['doctor'];
                    $docfee = $num['docFees'];
                    $appdate = $num['appdate'];
                    $apptime = $num['apptime'];
                    $userstatus = $num['userStatus'];
                    $doctorstatus = $num['doctorStatus'];
                    if ($userstatus == 1) {
                        $statususer = "Active";
                    } else {
                        $statususer = "cancelled";
                    }
                    if ($doctorstatus == 1) {
                        $statusdoctor = "Active";
                    } else {
                        $statusdoctor = "cancelled";
                    }


                    ?>
                    <tr>
                        <td>
                            <?= $pid ?>
                        </td>
                        <td>
                            <?= $fname ?>&nbsp;
                            <?= $lname ?>
                        </td>

                        <td>
                            <?= $gender ?>
                        </td>
                        <td>
                            <?= $email ?>
                        </td>
                        <!-- <td>
                            <?//= $mobile ?>
                        </td> -->
                        <td>
                            <?= $doctor ?>
                        </td>
                        <td>
                            <?= $docfee ?>
                        </td>
                        <td>
                            <?= $appdate ?>
                        </td>
                        <td>
                            <?= $apptime ?>
                        </td>

                        <?
                        if ($doctorstatus == 2) { ?>
                            <td>
                                <div class="prescribed">Prescibed</div>
                            </td>
                            <td><form action="cancel.html" method="post"><button type="submit" class="prescibe_button" disabled>Cancel</button></form></td>
                        <?
                        }
                        if ($doctorstatus == 1 && $userstatus == 1) { ?>
                            <td>
                                <div class="Active">Active</div>
                            </td>
                            <td><a href="cancel.php?id=<?= $id ?>" class="cancel">Cancel</a></td>
                        <?
                        } 
                        if ($userstatus == 0 && $doctorstatus == 0) {?>
                            <td>
                            <div class="cancelled">cancelled</div>
                        </td>
                        <td><form action="cancel.html" method="post"><button type="submit" class="prescibe_button" disabled>Cancelled</button></form></td>
                       <? }
                        if ($doctorstatus == 0 && $userstatus == 1) { ?>
                            <td>
                                <div class="cancelled">cancelled</div>
                            </td>
                            <td><a href="cancel.php?id=<?= $id ?>" class="cancel">Cancel</a></td>
                        <?
                        }
                        if ($doctorstatus == 1 && $userstatus == 0) { ?>
                            <td>
                            <div class="Active">Active</div>
                            </td>
                            <td><form action="cancel.html" method="post"><button type="submit" class="prescibe_button" disabled>Cancelled</button></form></td>
                        <?
                        }
                        ?>
                    </tr>
                <? } ?>
            </table>

            <?
            return true;
        } catch (Exception $e) {

        }
    }
    public function book()
    {
        try {?>
            <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=66, initial-scale=1.0">
        <title>Document</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: sans-serif;
            }
    
            /* body {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            } */
    
            .container {
    
                max-width: 600px;
                padding: 50px;
                margin: 0 180px;
                box-shadow: 0 15px 20px #abb2b9;
            }
    
            h2 {
                font-size: 26px;
                font-weight: 600;
                text-align: center;
                color: #2f4f4f;
                padding-bottom: 8px;
                border-bottom: 1px solid silver;
            }
    
            .input-box {
                display: flex;
                /* flex-wrap: wrap; */
                width: 50%;
                padding-bottom: 15px;
            }
    
            .m {
                padding-top: 15px;
            }
    
            .input-box input {
                height: 30px;
                width: 164px;
                padding: 0 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                outline: none;
            }
            .input-box select {
                height: 30px;
                width: 164px;
                padding: 0 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                outline: none;
            }
    
            .input-box input:is(:focus, :valid) {
                box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
            }
    
            .button-container button {
                width: 100%;
                margin-top: 10px;
                padding: 10px;
                display: block;
                font-size: 20px;
                color: #fff;
                border: none;
                border-radius: 3px;
                background-image: linear-gradient(to right, #aa076b, #61045f);
            }
    
            .button-container button:hover {
                background-image: linear-gradient(to right, #61045f, #aa076b);
            }
    
            /* .content{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px 0;
    } */
            .grid {
                display: grid;
            }
    
            .item1 {
                grid-column: 1;
                width: 196px;
            }
    
            .item2 {
                grid-column: 2;
                padding-left: 50px;
                
            }
            .content{
                margin: 0px 0px;
                padding: 0px 47px;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <form action="<?//=view_patient_appointment()?>" method="post">
                <h2>Book Appoinment</h2>
                <div class="content">
                    <div class="input-box m grid">
                        <div class="item1">
                            <label for="Speciallization">Speciallization</label>
                        </div>
                        <div class="item2">
                            <select name="department" id="department">
                                <option value="Cardiologist">Heart specialist</option>
                                <option value="General">General</option>
                                <option value="Dentist">Dentist</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-box grid">
                        <div class="item1">
                            <label for="doctor">Doctor </label>
                        </div>
                        <div class="item2">
                            <select name="Doctors" id="Doctors">
                                <option value="">abc</option>
                                <option value="">def</option>
                                <option value="">ghi</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-box grid ">
                        <div class="item1">
                            <label for="Consultancy_Fees">Consultancy_Fees</label>
                        </div>
                        <div class="item2">
                            <input type="text" name="" id="" disabled>
                        </div>
                    </div>
                    <div class="input-box grid">
                        <div class="item1">
                            <label for="date">Date</label>
                        </div>
                        <div class="item2">
                            <input type="date" name="date" id="date" required>
                        </div>
                    </div>
                    <div class="input-box grid">
                        <div class="item1">
                            <label for="time">Time</label>
                        </div>
                        <div class="item2">
                            <input type="time" name="" id="" required>
                        </div>
                    </div>
                    <div class="button-container">
                        <button type="submit">Book Appoinment</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
    
    </html><?
        } catch (Exception $e) {
            
        }
    }

}    

?>