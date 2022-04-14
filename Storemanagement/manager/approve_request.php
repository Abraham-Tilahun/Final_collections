

<html >
<head>


<!--sa nivo slider-->
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	
<!--sa calendar-->	
	
			
			
			<?php
			if (isset($_GET['id']))
	
	
			$msg = $_GET['id'];
			
			
			echo '<form action="approved.php" method="post">';
			
			$con = mysql_connect("localhost","root","");
			if (!$con)
  			{
  			die('Could not connect: ' . mysql_error());
  			}

			mysql_select_db("storem", $con);
		echo '<input name="id" type="hidden" value="'.$msg .'" />';
			echo '<br>';
			echo '<br>';
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM request WHERE Req_ID = '$msg'");

			while($row = mysql_fetch_array($result))
  			{
			echo '<input type="hidden" name="empid" value="'. $row['EmpId'] .'">'; 
			  echo '<br>';
			  echo '<input type="hidden" name="iid" value="'. $row['ItemId'] .'">'; 
			  echo '<br>';
			  echo'<input type="hidden" name="qut" value="'. $row['quantity'] .'">'; 
			echo '<br>';
			echo 'user name:';
			echo '<input name="uname"  type="text"  />';
			echo '<br>';
		
			echo '<br>';
			echo 'password:';
			echo '<input name="pass" type="password"  />';
			echo '<br>';
		
			echo '<br>';
			echo 'Borrowed Date:';
            echo '<input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="start" id="sd" value="" maxlength="10" readonly="readonly" />';
			echo '<br>';
			echo '<br>';
			
			echo 'Are you sure you want to delete this request?';
			echo '<br>';
			echo '<br>';
			echo '<input name="ok" type="submit" value="Approved" />';
			echo '</form>';
		}	
	//header("location: approve_req.php");
	//include("checked_2.php");
			?>
	</>
</html>	