<?php
	if (isset($_POST['yes']))
	{
			$con = mysql_connect("localhost","root","");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("dbu", $con);
			$messages_id = $_POST['id'];
			//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			mysql_query("UPDATE request SET requeststatus='Approved' WHERE Req_ID='$messages_id'");
			$mm='success deleted';
			include("viewreq.php");
			exit();
			
			mysql_close($con);
			}
			 if (isset($_POST['no']))
	{
			
			header("location: viewreq.php");

			exit();
		
			}
			?>