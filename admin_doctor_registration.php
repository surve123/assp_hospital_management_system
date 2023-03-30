<?php
if (isset($_POST['add_doctor'])) {
  include 'dbconfig.php';

  $username = $_REQUEST['vUserName'];
  $password = $_REQUEST['vpassword'];
  $email = $_REQUEST['vEmail'];
  $spec = $_REQUEST['vspec'];
  $docfee = $_REQUEST['vfees'];

  //checking if user alredy exist
  $sql = "SELECT * FROM doctb WHERE username = '$username'"; //checking for already registered username
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    echo -10;
  }
  $val = mysqli_num_rows($result);
  if ($val != 0) {
    echo "already existing username";
    exit();
  } //if val=0 then it means there is no username already registered and no rows are affected


  //insert query of the data through passing local variable value
  $sql = "INSERT INTO `myhmsdb`.`doctb` (`username`, `password`, `email`, `spec`, `docFees`) VALUES ('$username', '$password', '$email', '$spec', '$docfee');";
  $result = mysqli_query($conn, $sql);
  if (!$result) //checking for succesfuull insertion
  {
    echo -1;
  }



  //codes if the insertion is successfull
  else {
    header("location: adminsample.php");
  }
}


?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: black;
    }

    * {
      box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
      padding: 16px;
      background-color: white;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=radio] {
      width: 20%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
      background-color: #04AA6D;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .registerbtn:hover {
      opacity: 1;
    }

    /* Add a blue text color to links */
    a {
      color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
      background-color: #f1f1f1;
      text-align: center;
    }
  </style>
</head>

<body>

  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="add_doctor">
    <div class="container">
      <h1>
        <center>Add Doctor</center>
      </h1>
      <p>Please fill this form to add the doctor.</p>
      <hr>

      <label for="vUserName"><b>Username</b></label>
      <input type="text" placeholder=" enter username" name="vUserName" id="vUserName" required>

      <label for="vpassword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="vpassword" id="vpassword" required>

      <!--  <label for="Gender"><b>Choose Gender</b></label><br>
      <input type="text" placeholder="Enter Gender" name="vGender" id="email" required><br>-->

      <label for="vEmail"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="vEmail" id="vEmail" required>

      <label for="vspec"><b>Specification</b></label>
      <input type="text" placeholder="Enter specification of the doctor" name="vspec" id="vspec" required>

      <label for="vfees"><b>Doctor Fees</b></label>
      <input type="text" placeholder="Enter Doctor Fees" name="vfees" id="vfees" required>

      <!--<label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="vCPassword" id="psw-repeat" required> -->
      <hr>
      <!--<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>-->

      <button type="submit" class="registerbtn" name="add_doctor">Add Doctor</button>
    </div>

    <!-- <div class="container signin">
      <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>-->
  </form>


</body>

</html>