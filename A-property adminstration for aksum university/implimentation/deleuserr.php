<?php

$a = $_POST['uname'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("storem",$con);



$sql="DELETE from accou WHERE EmpId ='$a'" ;

$res=mysql_query($sql) or die("query error ".mysql_error());

if(!$res){
echo "not find";
}
else{
$message= "<b>Deleted user successfully<b>";}

include('srch_deleteuser_2.php');

?>