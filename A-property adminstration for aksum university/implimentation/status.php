 


 <?php
   session_start();
	mysql_select_db('storem');
   mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
   
?>

<?php
     $conn=mysql_connect("localhost","root","") or die(mysql_error());
	$sdb=mysql_select_db("storem",$conn) or die(mysql_error()); 
if(isset($_GET['enabled']))
{
	$enabled=$_GET['enabled'];
	
	$select_status=mysql_query("select * from accou where User_id='$enabled'");
	while($row=mysql_fetch_object($select_status))
	{
		$st=$row->enabled;
	
	if($st=='0')
	{
		$enabled2=1;
	}
	else 
	{
		$enabled2=0;
	}
	$update=mysql_query("update accou set enabled='$enabled2' where User_id='$enabled' ");
	if($update)
	{
		require_once('editaccount.php');
		
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