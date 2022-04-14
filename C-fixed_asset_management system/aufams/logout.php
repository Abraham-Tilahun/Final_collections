<?php
session_start();
if(isset($_GET['email'])){
    include 'include/connect_db.php';
    $em=$_GET['email'];
    mysql_query("UPDATE user_account SET LOGIN=0 WHERE EMAIL='$em'");
    echo mysql_error();
}
unset($_SESSION['fname']);
unset($_SESSION['email']);
unset($_SESSION['user_type']);
header('location: login.php');
?>

