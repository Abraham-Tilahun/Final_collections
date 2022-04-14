<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('booking');
$comment_id=$_REQUEST['comment_id'];
 mysql_query("Delete From comments Where comment_id='$comment_id'")or die(mysql_error());

header("location: comentview.php");

?>
