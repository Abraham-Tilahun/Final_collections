<?php
$con=mysql_connect("localhost", "root","");
if(!$con)
{
die('could not be connect :' .mysql_error());
}
mysql_select_db("booking" ,$con);
$ss= "INSERT INTO comments(first_Name,last_Name, Email,comment)
VALUES('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[comment]')";
if(!mysql_query($ss))
{
die('Error:' . mysql_error());
}
echo  "One Record Add Successfully";
header("location: feedback1.php");
mysql_close($con);
?>