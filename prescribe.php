<?

$id = $_REQUEST['id'];
$doctor = $_REQUEST['doctor'];
if (isset($_POST['prescribe'])) {
    include 'dbconfig.php';
    $disease = $_REQUEST['Disease'];
    $Allergy = $_REQUEST['Allergy'];
    $Prescription = $_REQUEST['Prescription'];
    $sql = "SELECT * FROM `appointmenttb` WHERE ID = '$id'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo -1;
    }
    while ($num = mysqli_fetch_assoc($result)) {
        $pid = $num['pid'];
        $id = $num['ID'];
        $fname = $num['fname'];
        $lname = $num['lname'];
        $doctor = $num['doctor'];
        $appdate = $num['appdate'];
        $apptime = $num['apptime'];

        $sql = "INSERT INTO `myhmsdb`.`prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES ('$doctor', '$pid', '$id', '$fname', '$lname', '$appdate', '$apptime', '$disease', '$Allergy', '$Prescription');";
        $result = mysqli_query($conn, $sql);
        if (!$result) //checking for succesfuull insertion
        {
            echo "data not inserted";
        } else {
            $sql ="UPDATE `myhmsdb`.`appointmenttb` SET `userStatus` = '2',
            `doctorStatus` = '2' WHERE `appointmenttb`.`ID` = '$id';";
            $result = mysqli_query($conn, $sql);
            if (!$result) //checking for succesfuull insertion
            {
                echo "data not inserted";
            } 
            else {
                header("location: doctorsample.php");
            }

        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prescribe</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            border: 2px solid black;
            position: absolute;
            top: 4%;
            left: 30%;
            border-radius: 12px;
        }

        .prescribe_box1 {
            text-align: center;
            margin: 8px 20px;
            padding: 31px 165px;
            /* border: 1px solid black; */
        }

        .prescription_form {
            display: grid;
            grid-template-rows: 3;
            grid-template-columns: 2;
            /* border: 1px solid red; */
            /* background-color: aquamarine; */
            padding: 10px 10px;
        }

        .item1 {
            /* border: 2px solid; */
            /* background-color: #ccc; */
            padding: 50px 10px;
            text-align: center;

        }

        .item1 label {
            font-size: 20px;
        }

        .item2 {
            /* border: 2px solid; */
            /* background-color: aqua; */
            grid-column: 2;
            padding: 0px 10px;
        }

        .item2 textarea {
            display: block;
            width: 90%;
            height: 60%;
            padding: 8px;
            border: 1px solid black;
            border-radius: 5px;
            font-family: 'Lucida Sans Unicode';
            font-size: 16px;
            resize: none;
            margin-top: 14px;
        }

        .submit_prescription {
            display: grid;
            grid-template-columns: 3;
            grid-template-rows: 1;
            /* border: 2px solid black; */
            width: 60%;
            align-items: center;
            padding: 4px 15px;
            margin: 12px 119px;
        }

        .back {
            grid-column: 1;
        }

        .submit {
            grid-column: 2;

        }

        .reset {
            grid-column: 3;
        }

        .prescription_buttons {
            display: block;
            background-color: blue;
            padding: 8px 3px;
            color: white;
            text-align: center;
            width: 50%;
            text-decoration: none;
            border-radius: 5px;
        }

        .prescription_buttons:hover {
            border: 1px solid black;
        }

        .prs_sub_btn {
            border: none;
            background-color: rgb(22, 214, 22);
        }

        .prs_res_btn {
            border: none;
            background-color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="prescribe_box1">
            <h1><u>Prescription page</u></h1>
        </div>
        <div class="prescription_form">
            <div class="item1">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?= $id ?>&doctor=<?= $doctor ?>" method="post"
                    name="prescribe">
                    <label for="Disease">Disease</label>
            </div>
            <div class="item2">
                <textarea name="Disease" id="Disease"></textarea>
            </div>
            <div class="item1">
                <label for="Allergy">Allergy</label>
            </div>
            <div class="item2">
                <textarea name="Allergy" id="Allergy"></textarea>
            </div>
            <div class="item1">
                <label for="Prescription">Prescription</label>
            </div>
            <div class="item2">
                <textarea name="Prescription" id="Prescription"></textarea>
            </div>
        </div>
        <div class="submit_prescription">
            <div class="back"><a href="doctorsample.php" class="prescription_buttons">back</a></div>
            <div class="submit"><button type="submit" class="prescription_buttons prs_sub_btn"
                    name="prescribe">Prescribe</button></div>
            <div class="reset"><button type="reset" class="prescription_buttons prs_res_btn">Reset</button></div>
            </form>
        </div>
    </div>
</body>

</html>