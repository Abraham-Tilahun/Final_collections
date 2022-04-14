<?php
require_once('include/db.php');
session_start();
$filename="logFile/logfile.txt";
if (isset($_POST['ownerName'])) {
    $ownerName = mysqli_real_escape_string($db, $_POST['ownerName']);
    $sex = mysqli_real_escape_string($db, $_POST['sex']);
    $region = mysqli_real_escape_string($db, $_POST['region']);
    $town = mysqli_real_escape_string($db, $_POST['town']);
    $woreda = mysqli_real_escape_string($db, $_POST['woreda']);
    $phoneNumber = mysqli_real_escape_string($db, $_POST['phoneNumber']);
    $plateNumber = mysqli_real_escape_string($db, $_POST['plateNumber']);
    $vehicleType = mysqli_real_escape_string($db, $_POST['vehicleType']);
    $madeIn = mysqli_real_escape_string($db, $_POST['madeIn']);
    $chassisNumber = mysqli_real_escape_string($db, $_POST['chassisNumber']);
    $motorNumber = mysqli_real_escape_string($db, $_POST['motorNumber']);
    $color = mysqli_real_escape_string($db, $_POST['color']);
    $fuelType = mysqli_real_escape_string($db, $_POST['fuelType']);
    $cylinderNumber = mysqli_real_escape_string($db, $_POST['cylinderNumber']);
    $hdate = date("Y-m-d");

    if (isset($_POST['insert'])) {
        $sql = "INSERT INTO vehicle (id, oname, sex, region, town, woreda, phone,
            plateNumber, vehicleType, madeIn, chassisNumber, motorNumber, color, fuelType,
            cylinderNumber, hdate) VALUES(NULL, '$ownerName', '$sex', '$region', '$town',
            '$woreda', '$phoneNumber', '$plateNumber', '$vehicleType', '$madeIn',
             '$chassisNumber','$motorNumber','$color', '$fuelType',' $cylinderNumber', '$hdate');";

        if (mysqli_query($db, $sql)) {
            echo "you have Successfully registered the Vehiclce";
            $file=fopen($filename,"a");
            if($file==false)
            {
                //exit();
            }
            else{
                fwrite($file,$_SESSION["login_user"]." Register Vehicle ".$plateNumber." on " .date("d/m/Y")." at ". date("h:i:sa")."\n");
                fclose($file);
            }
        } else {
            echo "Error :" . '<br/>' . mysqli_error($db);
        }
    }
    if(isset($_POST['update'])){
        $sql = "UPDATE vehicle SET oname='$ownerName', sex='$sex',region='$region',town='$town',woreda='$woreda',
              phone='$phoneNumber',vehicleType='$vehicleType', madeIn='$madeIn',chassisNumber='$chassisNumber',
              motorNumber='$motorNumber',color='$color',fuelType='$fuelType',cylinderNumber='$cylinderNumber'
              WHERE plateNumber='$plateNumber';";
        if(mysqli_query($db,$sql)) {
            echo "you have Successfully update Vehicle Details";
            $file=fopen($filename,"a");
            if($file==false)
            {
                //exit();
            }
            else{
                fwrite($file,$_SESSION["login_user"]." Update Vehicle ".$plateNumber ." Record on " .date("d/m/Y")." at ". date("h:i:sa")."\n");
                fclose($file);
            }
        }else{
            echo "Error :" . '<br/>' . mysqli_error($db);
        }
    }
}
mysqli_close($db);
?>