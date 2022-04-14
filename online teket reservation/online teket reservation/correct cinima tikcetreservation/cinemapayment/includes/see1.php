<?php
$conn1=mysql_connect('localhost','root',"");
mysql_select_db("banking",$conn1);
$conn2=mysql_connect('localhost','root',"",true);
mysql_select_db("masiyas",$conn2);
?>