<?php
	$dbhost = 'localhost';
	$dbuser = 'prison';
	$dbpass = 'prison';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(!$conn)
	{  
		die('Could not connect: ' . mysql_error());
	 } 
?>