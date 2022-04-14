<?php
session_start();
$filename="logFile/logfile.txt";
$tpFileName="TpLogFile/logfile.txt";
$role=$_SESSION['role'];
if(strtolower($role)==strtolower("Employee") || strtolower($role)==strtolower("Administrator"))
{
    $file=fopen($filename,"a");
    if($file==false)
    {
        //exit();
    }
    else{
        fwrite($file,$_SESSION["login_user"]." logout from the system on  ".date("d/m/Y")." at ". date("h:i:sa")."\n");
        fclose($file);
    }
}
else{

    $file=fopen($tpFileName,"a");
    if($file==false)
    {
        //exit();
    }
    else{
        fwrite($file,$_SESSION["login_user"]." logout From the system on  ".date("d/m/Y")." at ". date("h:i:sa")."\n");
        fclose($file);
    }
}
session_destroy();
    header("Location: index.php");
?>