<?php
session_start();
    mysql_select_db('storem');
    mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
if($log != "log"){
	header ("Location: View_Notification.php");
}
$User_id = $_REQUEST['key'];
$SQL = "DELETE FROM  request where User_id = '$User_id'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'View_Notification.php'</script>";
?>