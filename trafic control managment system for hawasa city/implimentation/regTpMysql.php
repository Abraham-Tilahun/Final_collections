<?php
require_once('include/db.php');
session_start();
$tpFileName="TpLogFile/logfile.txt";
function generatePIN($digits = 4)
{
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
if (isset($_POST["traffic_id"])) {
    $traffic_id = mysqli_real_escape_string($db, $_POST["traffic_id"]);
    $rank = $_POST["rank"];
    $fname = mysqli_real_escape_string($db, $_POST["fname"]);
    $mname = mysqli_real_escape_string($db, $_POST["mname"]);
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
    $profile = "tplogo.jpg";
    $sourcePath = "";
    $targetPath = "";
    /*Sql query to insert data to the Employee table */
    if (is_uploaded_file($_FILES['profile']['tmp_name'])) {
        $allowed = array('gif', 'png', 'jpg','jpeg');
        $filename = $_FILES['profile']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array(strtolower($ext), $allowed)) {
            die("please choose correct image");
        }
        $sourcePath = $_FILES['profile']['tmp_name'];
        $extension = explode("/", $_FILES["profile"]["type"]);
        $_FILES['profile']['name'] = "pic" . $traffic_id . "." . $extension[1];
        $profile = $_FILES['profile']['name'];
        $targetPath = "TpImage/" . $profile;
        move_uploaded_file($sourcePath, $targetPath);
    }
    if(isset($_POST['insert'])){
        $sql = "INSERT INTO traffic_police (id, tp_id, rank, fname, mname, lname, sex,hdate,role,
                                       bday, woreda, kebele, hno, phone, photo) VALUES
                                       (NULL, '$traffic_id', '$rank', '$fname', '$mname', '$lname', '$sex','$hdate',
                                        '$role','$bday', '$woreda', '$kebele', '$hnum', '$pnum', '$profile');";

        /*Sql query to to insert data to the traffic police user table list*/
        $pincode=generatePIN();
        $userPassword=mysqli_real_escape_string($db,SHA1($lname));
        $sql_user = "INSERT INTO tpuser_list (id, tp_id,user_password, status, role,pincode)
                                           VALUES (NULL, '$traffic_id', '$userPassword', 'deactive', '$role','$pincode');";
        if(mysqli_query($db,$sql_user) && mysqli_query($db,$sql)){
            echo "Successfully Registered ! your pincode=>".$pincode;
            $file=fopen($tpFileName,"a");
            if($file==false)
            {
                //exit();
            }
            else{
                fwrite($file,$_SESSION["login_user"]." Register Traffic Police ".$rank .$fname." on ".date("d/m/Y")." at ". date("h:i:sa")."\n");
                fclose($file);
            }
        }else{
            echo "Error : Insert".'<br>'.mysqli_error($db);
        }
    }elseif(isset($_POST['update'])){
        $sqlUpdate="UPDATE traffic_police SET rank='$rank',fname='$fname',lname='$lname',sex='$sex',role='$role',
                    bday='$bday',woreda='$woreda', kebele='$kebele',hno='$hnum',phone='$pnum',photo='$profile' WHERE tp_id='$traffic_id';";
        if(mysqli_query($db,$sqlUpdate) ){
            echo "you have Successfully Update The user data";
            $file=fopen($tpFileName,"a");
            if($file==false)
            {
                //exit();
            }
            else{
                fwrite($file,$_SESSION["login_user"]." Update Traffic Police ".$rank .$fname." Record on ".date("d/m/Y")." at ". date("h:i:sa")."\n");
                fclose($file);
            }
        }else{
            echo "Error : Update".'<br>'.mysqli_error($db);
        }
    }

}
//echo "Today is " . date("Y-m-d") . "<br>";
?>

