<?php
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());

$fedid=$_GET['fedid'];
mysql_query("update feedback set status='read' where fedbackid='$fedid'") or die(mysql_error());

header('location:view_fedback.php');
?>