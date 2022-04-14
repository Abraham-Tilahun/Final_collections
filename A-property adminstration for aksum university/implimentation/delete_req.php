<?php
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("storem",$con);



$sql="DELETE from request WHERE Req_ID ='$Req_ID'" ;

$res=mysql_query($sql) or die("query error ".mysql_error());

if(!$res){
echo "not find";
}
else{
$message= "<b>Deleted user successfully<b>";}

include('View request.php');

?>