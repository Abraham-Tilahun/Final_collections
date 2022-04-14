<?php

if(isset($_POST['update'])){

$userid=$_POST['User_id'];
$username=$_POST['username'];
$pass=$_POST['password'];
$fname=$_POST['FirstName'];
$lname=$_POST['LastName'];
$empid=$_POST['EmpId'];
$user=$_POST['type'];

$db = mysql_connect("localhost","root","") or die ("Error connecting to database.");
if(!$db)
$message="no connection established";

mysql_select_db("storem",$con);
$sql="update accou set User_id='$userid',username='$username',password='$pass',FirstName='$fname',LastName='$lname',EmpId='$empid',type='$user' where User_id='$userid'";
$res=mysql_query($sql) or die("query error".mysql_error());
 $message="you have update account successfully";
 
mysql_select_db("storem",$db);

}
//mysql_close($db);
?>