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
			mysql_query("UPDATE transfereditem SET transferstatus='Rejected' WHERE ItemId='$messages_id'");
			$mm='The request is Rejected';
			include("confirmitemrequset.php");
			exit();
			
			mysql_close($con);
			}
			 if (isset($_POST['no']))
	{
			header("location: confirmitemrequset.php");

			exit();
		
			}
			?>