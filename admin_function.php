<?php
class admin
{
    public function view_admin_prescription()
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
                 $sql =  "SELECT * FROM `prestb` ORDER BY `prestb`.`appdate` DESC ";
                 $result=mysqli_query($conn,$sql);
               if(!$result)
               {echo -1;}
               while($num = mysqli_fetch_assoc($result)){
                   $doctorname=$num['doctor'];
                   $patientid=$num['pid'];
                 $appid=$num['ID'];
                 $patietfname=$num['fname'];
                 $patietlname=$num['lname'];
                 $appdate=$num['appdate'];
                 $apptime=$num['apptime'];
                 $disease=$num['disease'];
                 $allergy=$num['allergy'];
                 $prescription=$num['prescription'];
                 ?>
                   <tr>
                       <td><?=$doctorname?></td>
                       <td><?=$patientid?></td>
                       <td><?=$appid?></td>
                       <td><?=$patietfname?>&nbsp;<?=$patietlname?></td>
                       
                       <td><?=$appdate?></td>
                       <td><?=$apptime?></td>
                       <td><?=$disease?></td>
                       <td><?=$allergy?></td>
                       <td><?=$prescription?></td>
                   </tr>
                   <? }  ?>
               </table>
               
               <?

            return true;
        } catch (Exception $e) {

        }
    }

    public function view_admin_appointment()
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
                    <th>Mobile</th>
                    <th>Doctor</th>
                    <th>Doctor fees</th>
                    <th>appointment date</th>
                    <th>Appointment time</th>
                    <th>user Status</th>
                    <th>Doctor status</th>
                </tr>
                <?
                $sql =  "SELECT * FROM `appointmenttb` ORDER BY `appointmenttb`.`appdate` DESC ";
                $result=mysqli_query($conn,$sql);
              if(!$result)
              {echo -1;}
              while($num = mysqli_fetch_assoc($result)){
                  $pid=$num['pid'];
                  $fname=$num['fname'];
                $lname=$num['lname'];
                $gender=$num['gender'];
                $email=$num['email'];
                $mobile=$num['contact'];
                $doctor=$num['doctor'];
                $docfee=$num['docFees'];
                $appdate=$num['appdate'];
                $apptime=$num['apptime'];
                $userstatus=$num['userStatus'];
                $doctorstatus=$num['doctorStatus'];
              if($userstatus==1){$statususer="Active";}else {$statususer="cancelled";}
              if($doctorstatus==1){$statusdoctor="Active";}else {$statusdoctor="cancelled";}
                
              
                ?>
                  <tr>
                      <td><?=$pid?></td>
                      <td><?=$fname?>&nbsp;<?=$lname?></td>
                      
                      <td><?=$gender?></td>
                      <td><?=$email?></td>
                      <td><?=$mobile?></td>
                      <td><?=$doctor?></td>
                      <td><?=$docfee?></td>
                      <td><?=$appdate?></td>
                      <td><?=$apptime?></td>
                      <?
                        if ($userstatus == 1) { ?>
                            <td>
                                <div class="Active">Active</div>
                            </td>
                        <?
                        } else { ?>
                            <td>
                                <div class="cancelled">cancelled</div>
                            </td>
                        <?
                        }

                        if ($doctorstatus == 1) { ?>
                            <td>
                                <div class="Active">Active</div>
                            </td>
                        <?
                        } else { ?>
                            <td>
                                <div class="cancelled">cancelled</div>
                            </td>
                        <?
                        }
                        ?>
                  </tr>
                  <? }  ?>
              </table>
              
              <?
          
            return true;
        } catch (Exception $e) {

        }
    }
    public function view_admin_patient()
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
                    <th>Mobile</th>
                    <th>Password</th>
                </tr>
                <?
                 $sql =  "SELECT * FROM `patreg` ORDER BY `patreg`.`pid` DESC";
                 $result=mysqli_query($conn,$sql);
               if(!$result)
               {echo -1;}
               while($num = mysqli_fetch_assoc($result)){
                   $pid=$num['pid'];
                   $fname=$num['fname'];
                 $lname=$num['lname'];
                 $gender=$num['gender'];
                 $email=$num['email'];
                 $mobile=$num['contact'];
                 $password=$num['password'];
               
               
                 ?>
                   <tr>
                       <td><?=$pid?></td>
                       <td><?=$fname?>&nbsp;<?=$lname?></td>
                       
                       <td><?=$gender?></td>
                       <td><?=$email?></td>
                       <td><?=$mobile?></td>
                       <td><?=$password?></td>
                   </tr>
                   <? }  ?>
               </table>
               
               <?
            return true;
        } catch (Exception $e) {

        }
    }
    public function view_admin_queries()
    {
        try {
            include 'dbconfig.php';
            ?>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Message</th>
                </tr>
                <?
                $sql =  "SELECT * FROM `contact`";
                $result=mysqli_query($conn,$sql);
              if(!$result)
              {echo -1;}
              while($num = mysqli_fetch_assoc($result)){
                  $name=$num['name'];
                  $email=$num['email'];
                $contact=$num['contact'];
                $message=$num['message'];
                ?>
                  <tr>
                      <td><?=$name?></td>
                      <td><?=$email?></td>
                      <td><?=$contact?></td>
                      <td><?=$message?></td>
                  </tr>
                  <? }  ?>
              </table>
              
              <?
          
            return true;
        } catch (Exception $e) {

        }
    }
    public function view_admin_doctor()
    {
        try {
            include 'dbconfig.php';
            ?>
            <table>
                <tr>
                    <th>Usernsme</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Specification</th>
                    <th>Fees</th>
                </tr>
                <?
                 $sql =  "SELECT * FROM `doctb`";
                 $result=mysqli_query($conn,$sql);
               if(!$result)
               {echo -1;}
               while($num = mysqli_fetch_assoc($result)){
                   $username=$num['username'];
                 $password=$num['password'];
                 $email=$num['email'];
                 $spec=$num['spec'];
                 $docfee=$num['docFees'];
               
               
                 ?>
                   <tr>
                       <td><?=$username?></td>
                       <td><?=$password?></td>
                       <td><?=$email?></td>
                       <td><?=$spec?></td>
                       <td><?=$docfee?></td>
                   </tr>
                   <? }  ?>
               </table>
               
               <?
          
            return true;
        } catch (Exception $e) {

        }
    }
}



?>