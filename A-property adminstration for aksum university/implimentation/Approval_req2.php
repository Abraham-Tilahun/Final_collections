<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	
	$select_status=mysql_query("select * from   request_property_dep where User_id='$status'");
	while($row=mysql_fetch_object($select_status))
	{
		$st=$row->status;
	
	if($st=='0')
	{
		$status2=1;
	}
	else
	{
		$status2=0;
	}
	$update=mysql_query("update   request_property_dep set status='$status2' where User_id='$status' ");
	if($update)
	{
		header("Location:");
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