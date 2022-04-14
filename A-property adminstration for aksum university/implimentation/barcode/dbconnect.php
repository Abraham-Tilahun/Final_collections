<?php
$con= mysql_connect("localhost","root","") or die("Cannot connect. Check your Web Server.");
mysql_select_db("db1",$con) or die ("Cannot connect to the database. Please check your host Connection");
?>