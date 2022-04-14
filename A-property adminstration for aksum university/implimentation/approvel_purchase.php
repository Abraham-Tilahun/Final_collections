<?php
mysql_select_db('storem');
$conn=mysql_connect("localhost","root","") or die(mysql_error());
	$sdb=mysql_select_db("storem",$conn) or die(mysql_error()); 
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	
	$select_status=mysql_query("select * from request_purchase where Req_ID='$status'");
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
	$update=mysql_query("update request_purchase set status='$status2' where Req_ID='$status' ");
	if($update)
	{
		header("Location:View_req_purchase.php");
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