<?php
			if (isset($_GET['id']))
			{
	
	
			include("includes/db.php");
		
			$id=$_GET['id'];
			mysql_query("DELETE FROM orders WHERE movie_id='$id'");
			
			header("location: order.php");
			exit();
			}
			?>
			
			
