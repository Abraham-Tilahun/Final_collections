
<?php
//session_start();
if(!isset($__SESSION['Submit']))
{
$i=$_POST['id'];
//$item=$_POST['id'];
$n=$_POST['n'];
$e=$_POST['e'];
$p=$_POST['p'];
$m=$_POST['txt'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dbu", $con);



mysql_query("insert into  message values('','$i','$n','$e','$p','$m')"); 

$mess="Successfully send...";
//header("location: viewreq.php");

mysql_close($con);

include('sendmsg_2.php');
}

?> 




