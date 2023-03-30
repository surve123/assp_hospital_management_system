<?php
require_once 'adminpagelayout.php';

show_page_header();

$servername="localhost";
 $username="root";
 $password="root";
 //$password="";
 $dbname='myhmsdb';
 // Create conecction
  $conn =mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){echo -2;}
$selectspec="Neurologist";
  $sql=   "SELECT * FROM doctb WHERE spec = '".$selectspec."';";
  $result=mysqli_query($conn,$sql);
 if(!$result)
 {echo -1;}
 while($num = mysqli_fetch_assoc($result)){
     $user=$num['username'];
     $password=$num['password'];
  $email=$num['email'];
  $spec=$num['spec'];
  $docfee=$num['docFees'];
 }
 echo $user;
 echo $docfee;
 $appdate = Date('d-M-Y');
 echo $appdate;
 $apptime = Date('h:i:sa');
 echo $apptime;


show_page_footer();
?>