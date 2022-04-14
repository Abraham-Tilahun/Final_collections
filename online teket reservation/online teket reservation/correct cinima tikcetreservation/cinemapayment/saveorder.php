<?php
include("includes/db.php");

$product=$_POST['product'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$cnum=$_POST['cnum'];
$transnum=$_POST['transnum'];
$paddress=$_POST['paddress'];
$daddress=$_POST['daddress'];
$ddddddd=$_POST['txtfrom'];
$city=$_POST['city'];
$time=date("h:i:s");
$status='Pending';
$total=$_POST['ototal'];
$dmethod=$_POST['sdsd'];
$pmethod=$_POST['pmethod'];
mysql_query("INSERT INTO reservation (product_id,firstname, lastname, city, address, email, contact, confirmation, status, payable, delivery, date,time, payment, delivery_type)
 VALUES ('$product','$fname','$lname','$city','$paddress','$email','$cnum','$transnum','$status','$total','$daddress','$ddddddd','$time','$pmethod','$dmethod')");
header("location: payment.php?id=$transnum");
echo $total;
$mail_To = $email;
$mail_Subject = "Order notification From Genesis Print stuff";
$mail_Body = "First Name: $fname\n".
"Last Name: $lname\n".
"Email: $email \n".
"City: $city \n".
"Country: $country \n".
"Contact Number: $cnum\n".
"Payable amount: $total\n ".
"Delivery Method: $dmethod\n".
"Payment Method: $pmethod\n ".
"$pmethod Account: $accountnum\n ".
"Confirmation Number: $transnum\n ";
mail($mail_To, $mail_Subject, $mail_Body);

?>