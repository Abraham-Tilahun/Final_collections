<?php

// This is a sample code in case you wish to check the username from a mysql db table
include("../includes/db.php");
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from message where email='$id'";
 mysql_query( $sql);
}

?>