<?php
require_once 'include/db.php';
session_start();
$filename="logFile/logfile.txt";
$id=$_GET['id'];
$sql="DELETE FROM vehicle where plateNumber='$id';";
if(mysqli_query($db,$sql)){
    header("Location: emphome.php");
    $file=fopen($filename,"a");
    if($file==false)
    {
        //exit();
    }
    else{
        fwrite($file,$_SESSION["login_user"]." Delete Vehicle Record on ".date("d/m/Y")." at ". date("h:i:sa")."\n");
        fclose($file);
    }
}
mysqli_close($db);
?>