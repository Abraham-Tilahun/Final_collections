<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
	$sdb=mysql_select_db("masiyas",$conn) or die(mysql_error()); 
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	
	$select_status=mysql_query("select * from user where email='$status'");
	while($row=mysql_fetch_object($select_status))
	{
		$st=$row->status;
	
	if($st=='0')
	{
		$status2=4;
	}
	else if($st=='2'){
	
	$status2=5;
	}
	else if($st=='3'){
	
	$status2=6;
	}
	else if($st=='5'){
	
	$status2=2;
	}
	
	else if($st=='6'){
	
	$status2=3;
	}
	
	else
	{
		$status2=0;
	}
	$update=mysql_query("update user set status='$status2' where email='$status' ");
	if($update)
	{
		header("Location:user.php");
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