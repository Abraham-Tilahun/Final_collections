<?php
session_start();
$langu=$_GET['lan'];
if($langu=='english'){
    unset($_SESSION['language']);
$_SESSION['language']='English';
header("Location:../login.php");
}
else if($langu=='amharic'){
    unset($_SESSION['language']);
$_SESSION['language']='Amharic';
header("Location:../login.php");
}

?>
