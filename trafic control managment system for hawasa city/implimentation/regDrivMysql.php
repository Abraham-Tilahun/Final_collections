<?php
require_once('include/db.php');
session_start();
$filename = "logFile/logfile.txt";

/*Generate four digit security code*/
function generatePIN($digits = 4)
{
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while ($i < $digits) {
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}

if (isset($_POST["fname"])) {
    $fname = mysqli_real_escape_string($db, $_POST["fname"]);
    $lname = mysqli_real_escape_string($db, $_POST["lname"]);
    $sex = mysqli_real_escape_string($db, $_POST["sex"]);
    $region = mysqli_real_escape_string($db, $_POST["region"]);
    $bday = $_POST["bday"];
    $licenseNumber = mysqli_real_escape_string($db, $_POST["lnumber"]);
    $level = mysqli_real_escape_string($db, $_POST["level"]);
    $woreda = $_POST["woreda"];
    $kebele = $_POST["kebele"];
    $hnum = $_POST["hnum"];
    $pnum = $_POST["pnum"];
    $place = mysqli_real_escape_string($db, $_POST["place"]);
    /*The system insert the date when the traffic police is hired*/
    $hdate = date("Y-m-d");
    $profile = "drlogo.jpg";
    $record = 0;
    $sourcePath = "";
    $targetPath = "";
    /*Sql query to insert data to the Employee table */
    if (is_uploaded_file($_FILES['profile']['tmp_name'])) {
        $allowed = array('gif', 'png', 'jpg', 'jpeg');
        $filename = $_FILES['profile']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array(strtolower($ext), $allowed)) {
            die("please choose correct image");
        }
        $sourcePath = $_FILES['profile']['tmp_name'];
        $extension = explode("/", $_FILES["profile"]["type"]);
        $_FILES['profile']['name'] = "pic" . $licenseNumber . "." . $extension[1];
        $profile = $_FILES['profile']['name'];
        $targetPath = "DrImage/" . $profile;
        move_uploaded_file($sourcePath, $targetPath);
    }
    if (isset($_POST['insert'])) {
        $sql = "INSERT INTO driver (id, fname, lname, sex, region,bday, hdate, lnumber, level, woreda,
                                  kebele, hnum, pnum, record, place,photo) VALUES(NULL, '$fname','$lname',
                                   '$sex', '$region', '$bday','$hdate','$licenseNumber', '$level', '$woreda',
                                    '$kebele', '$record','$hnum','$pnum', '$place','$profile');";
        $password = SHA1($lname);
        $pincode = generatePIN();
        $sql_user = "INSERT INTO driver_user_list (id, user_name, password, status,pincode)
                      VALUES (NULL, '$licenseNumber', '$password', 'deactive','$pincode');";
        if (mysqli_query($db, $sql) && mysqli_query($db, $sql_user)) {
            echo "Driver Registered successfully ! your pin code =>" . $pincode;
            $file = fopen($filename, "a");
            if ($file == false) {
                //exit();
            } else {
                fwrite($file, $_SESSION["login_user"] . " Register Driver " . $fname . "" . $lname . date("d/m/Y") . " at " . date("h:i:sa") . "\n");
                fclose($file);
            }

        } else {
            echo "Error :" . '<br/>' . mysqli_error($db);
        }
    } elseif (isset($_POST['update'])) {
        $sqlUpdate = "UPDATE driver set fname='$fname',lname='$lname',sex='$sex',region='$region',
                    level='$level',woreda='$woreda',kebele='$kebele',hnum='$hnum',pnum='$pnum',place='$place',
                    photo='$profile' WHERE lnumber='$licenseNumber';";
        if (mysqli_query($db, $sqlUpdate)) {
            echo "you have Successfully update  Driver data";
            $file = fopen($filename, "a");
            if ($file == false) {
                //exit();
            } else {
                fwrite($file, $_SESSION["login_user"] . " Update Driver " . $fname . "" . $lname . " Record on " . date("d/m/Y") . " at " . date("h:i:sa") . "\n");
                fclose($file);
            }
        } else {
            echo "Error :" . '<br/>' . mysqli_error($db);
        }
    }


}
mysqli_close($db);
?>