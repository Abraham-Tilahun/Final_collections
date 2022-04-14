<?php

// This is a sample code in case you wish to check the username from a mysql db table
include("../includes/db.php");
if($_GET['movie_id'])
{
$id=$_GET['movie_id'];
 $sql = "delete from products where movie_id='$id'";
 mysql_query( $sql);
}

?>