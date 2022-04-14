<?php
session_start();
include("includes/db.php");


$product=$_POST['product'];
$_SESSION['product']=$product;
$fname=$_POST['finame'];
$_SESSION['finame']=$fname;
$lname=$_POST['llname'];
$_SESSION['lname']=$lname;
$email=$_POST['email'];

$mobile=$_POST['cnum'];

$transnum=$_POST['transnum'];

$kebele=$_POST['kebele'];

$time=$_POST['time'];

$ddddddd=$_POST['date'];

$status='Pending';

$total=$_POST['ototal'];

$dmethod=$_POST['sdsd'];

$home=$_POST['home'];

$street=$_POST['street'];
$house=$_POST['house'];
$ketema=$_POST['ketema'];
$pmethod=$_POST['pmethod'];
$ddate=$_POST['ddate'];



 echo "<script>window.location='payment.php?id=$transnum';</script>";
 




?>