<?php
$conn=mysql_connect("localhost","root","");
$db1=mysql_select_db("pharmacy",$conn);
$id = $_REQUEST['id'];
   mysql_query("DELETE FROM drug WHERE bachnumber='$id' ");
   header('Location: expired.php');

mysql_close($conn);
?>
