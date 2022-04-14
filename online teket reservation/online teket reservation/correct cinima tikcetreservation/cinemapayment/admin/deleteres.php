<?php

// This is a sample code in case you wish to check the username from a mysql db table
include("../includes/db.php");
if($_GET['id'])
{

$id=$_GET['id'];
 $sql = "delete from reservation where confirmation='$id'";
 mysql_query( $sql);
  $sqll = "delete from orders where confirmation='$id'";
   mysql_query( $sqll);
}

?>