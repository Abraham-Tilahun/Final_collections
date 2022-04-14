<?php
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());

$id=$_GET['uid'];
mysql_query("delete from  accou where User_id='$id'") or die(mysql_error());

header('location:user.php');
?>