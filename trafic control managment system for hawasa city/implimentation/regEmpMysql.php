<?php
require_once('include/db.php');
session_start();
$filename = "logFile/logfile.txt";
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
if (isset($_POST["emp_id"])) {
    $emp_id = mysqli_real_escape_string($db, $_POST["emp_id"]);
    $eduStatus = mysqli_real_escape_string($db, $_POST["eduStatus"]);
    $fname = mysqli_real_escape_string($db, $_POST["fname"]);
    $lname = mysqli_real_escape_string($db, $_POST["lname"]);
    $sex = mysqli_real_escape_string($db, $_POST["sex"]);
    $role = mysqli_real_escape_string($db, $_POST["role"]);
    $bday = $_POST["bday"];
    $woreda = $_POST["woreda"];
    $kebele = $_POST["kebele"];
    $hnum = $_POST["hnum"];
    $pnum = $_POST["pnum"];
    /*The system insert the date when the traffic police is hired*/
    $hdate = date("Y-m-d");
    $profile = "piclogo.jpg";
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
        $_FILES['profile']['name'] = "pic" . $emp_id . "." . $extension[1];
        $profile = $_FILES['profile']['name'];
        $targetPath = "EmpImage/" . $profile;
        move_uploaded_file($sourcePath, $targetPath);
    }
    if (isset($_POST['insert'])) {
        /*Sql query to to insert data to the Employee user table list*/
        $sql = "INSERT INTO employee (id, emp_id, fname, lname, sex,bday,hdate,edu_status,role,
                                       woreda, kebele, hnum, pnum, photo) VALUES
                                       (NULL, '$emp_id', '$fname', '$lname', '$sex','$bday','$hdate',
                                        '$eduStatus','$role', '$woreda', '$kebele', '$hnum', '$pnum','$profile');";
        $pincode = generatePIN();
        $userPassword = mysqli_real_escape_string($db, SHA1($lname));
        $sql_user = "INSERT INTO emp_user_list (id, emp_id,user_password, status, role,pincode)
                                           VALUES (NULL, '$emp_id', '$userPassword', 'deactive', '$role','$pincode');";
        //echo $sql;
        if (mysqli_query($db, $sql_user) && mysqli_query($db, $sql)) {
            echo "Successfully Registered  and your security code is=>" . $pincode;
            $file = fopen($filename, "a");
            if ($file == false) {
                //exit();
            } else {
                fwrite($file, $_SESSION["login_user"] . " Register Employee on  " . $fname . "" . $lname . date("d/m/Y") . " at " . date("h:i:sa") . "\n");
                fclose($file);
            }

        } else {
            echo "Error :" . '<br/>' . mysqli_error($db);
        }

    } elseif (isset($_POST['update'])) {
        $sql = "UPDATE employee SET fname='$fname',lname='$lname',sex='$sex',bday='$bday',edu_status='$eduStatus',
                role='$role',woreda='$woreda',kebele='$kebele',hnum='$hnum',pnum='$pnum',photo='$profile' WHERE emp_id='$emp_id';";
        if (mysqli_query($db, $sql)) {
            echo "you have Successfully update Employee Details !";
            $file = fopen($filename, "a");
            if ($file == false) {
                //exit();
            } else {
                fwrite($file, $_SESSION["login_user"] . " Update Employee " . $fname . "" . $lname . " Record on " . date("d/m/Y") . " at " . date("h:i:sa") . "\n");
                fclose($file);
            }
        } else {
            echo "Error :" . '<br/>' . mysqli_error($db);
        }
    }

}
//echo "Today is " . date("Y-m-d") . "<br>";
?>

