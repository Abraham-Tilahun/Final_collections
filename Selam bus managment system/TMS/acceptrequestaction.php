<?php
include('connection/connection.php');
if(isset($_GET['ACCEPTED']))
{
$status1=$_GET['ACCEPTED'];
$select=mysql_query("select * from Request where ACCEPTED='$status1'");
while($row=mysql_fetch_object($select))
{
$status_var=$row->status;
if($status_var=='Not')
{
$status_state=accept;
}
else
{
$status_state=reject;
}
$update=mysql_query("update Request set ACCEPTED='$status_state' where REQUAST_ID='$status1' ");
if($update)
{
header("Location:deactivateactiveuser.php");
}
else
{
echo mysql_error();
}
}
?>
<?php
}
?>