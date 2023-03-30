<?php
class doctor
{
    public function view_doctor_prescription($doctorusername)
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
                $sql = "SELECT * FROM `prestb` WHERE doctor = '" . $doctorusername . "' ORDER BY `prestb`.`appdate` DESC ";
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

    public function view_doctor_appointment($doctorusername)
    {
        try {
            include 'dbconfig.php';
            ?>
            <table>
                <tr>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Gender</th>
                    <!-- <th>Email</th> -->
                    <th>Mobile</th>
                    <th>appointment date</th>
                    <th>Appointment time</th>
                    <th>User Status</th>
                    <th>prescribe</th>
                    <th>cancel</th>
                </tr>
                <? $sql = "SELECT * FROM `appointmenttb` WHERE doctor = '" . $doctorusername . "' ORDER BY `appointmenttb`.`appdate` DESC ";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo -1;
                }
                $val = mysqli_num_rows($result);
                if ($val == 0) {
                    echo "already existing username";

                }
                while ($num = mysqli_fetch_assoc($result)) {
                    $pid = $num['pid'];
                    $id = $num['ID'];
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
                        <!-- <td>
                            <?//= $email ?>
                        </td> -->
                        <td>
                            <?= $mobile ?>
                        </td>
                        <td>
                            <?= $appdate ?>
                        </td>
                        <td>
                            <?= $apptime ?>
                        </td>
                        <?
                        if ($userstatus == 2) { ?>
                            <td>
                                <div class="prescribed">Prescibed</div>
                            </td>
                            <td>
                                <form action="prescribe.php" method="post"><button type="submit" class="prescibe_button"
                                        disabled>Prescribed</button></form>
                            </td>
                            <td>
                                <form action="cancel.php.php" method="post"><button type="submit" class="prescibe_button"
                                        disabled>Cancel</button></form>
                            </td>
                        <?
                        }
                        if ($userstatus == 1 && $doctorstatus == 1) { ?>
                            <td>
                                <div class="Active">Active</div>
                            </td>
                            <td><a href="prescribe.php?id=<?= $id ?>&doctor=<?= $doctor ?>" class="prescribe">Prescribe</a></td>
                            <td><a href="cancel.php?id=<?= $id ?>&doctor=<?= $doctor ?>" class="cancel">Cancel</a></td>

                        <?
                        }
                        if ($doctorstatus == 0 && $userstatus == 1) { ?>
                            <td>
                                <div class="Active">Active</div>
                            </td>
                            <td>
                                <form action="prescribe.php" method="post"><button type="submit" class="prescibe_button"
                                        disabled>Prescribe</button></form>
                            </td>
                            <td>
                                <form action="cancel.php.php" method="post"><button type="submit" class="prescibe_button"
                                        disabled>cancelled</button></form>
                            </td>
                        <? }
                        if ($doctorstatus == 1 && $userstatus == 0) { ?>
                            <td>
                            <div class="cancelled">cancelled</div>
                            </td>
                            <td>
                                <form action="prescribe.php" method="post"><button type="submit" class="prescibe_button"
                                        disabled>Prescribe</button></form>
                            </td>
                            
                            <td><a href="cancel.php?id=<?= $id ?>&doctor=<?= $doctor ?>" class="cancel">Cancel</a></td>
                            
                        <? }
                        ?>
                        <?

                        if ($userstatus == 0 && $doctorstatus == 0) { ?>
                            <td>
                                <div class="cancelled">cancelled</div>
                            </td>
                            <td>
                                <form action="prescribe.php" method="post"><button type="submit" class="prescibe_button"
                                        disabled>Prescribe</button></form>
                            </td>
                            <td>
                                <form action="cancel.php.php" method="post"><button type="submit" class="prescibe_button"
                                        disabled>Cancel</button></form>
                            </td>
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
}



?>