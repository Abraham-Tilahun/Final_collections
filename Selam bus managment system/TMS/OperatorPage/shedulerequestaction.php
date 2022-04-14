<?php
include"../connection/connection.php";
session_start();
if (isset($_POST['Applay']))
	{
	$option =$_POST['option'];
	$ass =$_POST['asso'];
	$bord=$_POST['bord'];
	$level=$_POST['level'];
	$date=date('Y-m-d');
	$intial = $_POST['intial'];
	$destination = $_POST['destination'];
	$prmission= 'wait';
	$prepared= 'Ok';
   $sql="insert into shedule_request values('$_SESSION[USER_ID]','$option','$ass','$bord','$level','$date','$intial','$destination','$prmission','$prepared')";

$result  = mysql_query($sql,$con);
	if(!$result)
	{
	echo "not approved".mysql_error();
	}
	else
	{	
echo '<script type="text/javascript">alert("Applay Seccesfully !! ");window:location=\'Sechedurequestsearch.php\';</script>';
}
}

 ?>