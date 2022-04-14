<?php
include_once'include/db.php';
session_start();
$filename="logFile/logfile.txt";
$tpFileName="TpLogFile/logfile.txt";
if(isset($_POST['oldpassword']) && isset($_POST['newpassword']) ){
    $user=$_SESSION['login_user'];
    $opassword=mysqli_real_escape_string($db,SHA1($_POST['oldpassword']));
    $newpassword=mysqli_real_escape_string($db,SHA1($_POST['newpassword']));
    if(isset($_POST['emp'])){
        $query="UPDATE emp_user_list SET user_password='$newpassword' WHERE emp_id='$user' AND user_password='$opassword';";
        if(mysqli_query($db,$query)){
            echo "you Have succefully change your Password !";
            $file=fopen($filename,"a");
            if($file==false)
            {
                //exit();
            }
            else{
                fwrite($file,$user." Change his/her password on  ".date("d/m/Y")." at ". date("h:i:sa")."\n");
                fclose($file);
            }

        }else{
            echo "something happend try again please !";
        }
    }if(isset($_POST['trp'])){
        $query="UPDATE tpuser_list SET user_password='$newpassword' WHERE tp_id='$user' AND user_password='$opassword';";
        if(mysqli_query($db,$query)){
            echo "you Have succefully change your Password !";
            $file=fopen($tpFileName,"a");
            if($file==false)
            {
                //exit();
            }
            else{
                fwrite($file,$user." Change his/her password on ".date("d/m/Y")." at ". date("h:i:sa")."\n");
                fclose($file);
            }
        }else{
            echo "something happend try again please !";
        }
    }


}

?>/