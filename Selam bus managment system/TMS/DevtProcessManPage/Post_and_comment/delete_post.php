<?php
include('../../connection/connection.php');
$id=$_GET['id'];

mysql_query("delete from post where post_id='$id'")or die(mysql_error());
header('location:index.php');



?>