<?php
require_once 'include/db.php';
session_start();
$id=$_GET['id'];
$type=$_GET['type'];
$filename="logFile/logfile.txt";
$tpFileName="TpLogFile/logfile.txt";
if(strtolower($type)==strtolower("admin"))
{
    $sql="DELETE FROM notification where name='$id';";
    if(mysqli_query($db,$sql)){
        header("Location: adminhome.php");
        $file=fopen($filename,"a");
        if($file==false)
        {
            //exit();
        }
        else{
            fwrite($file,$_SESSION["login_user"]." Delete notification on ".date("d/m/Y")." at ". date("h:i:sa")."\n");
            fclose($file);
        }
    }
}else if(strtolower($type)==strtolower("tp")){
    $sql="DELETE FROM tpnotification where name='$id';";
    if(mysqli_query($db,$sql)){
        header("Location: tpa.php");
        $file=fopen($tpFileName,"a");
        if($file==false)
        {
            //exit();
        }
        else{
            fwrite($file,$_SESSION["login_user"]."  Delete notification ".date("d/m/Y")." at ". date("h:i:sa")."\n");
            fclose($file);
        }
    }
}else{
    echo mysqli_error($db);
}
mysqli_close($db);
?>