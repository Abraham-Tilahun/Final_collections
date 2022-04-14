<?php
		include("dbconnet.php");
		$pid=$_POST["pid"];
		$cr=$_POST["cr"];
		mysql_select_db('PRISON');

		$sql="SELECT * FROM  courtdecision where prisonerId='$pid'";
				mysql_select_db('PRISON');
				$retval2 = mysql_query($sql);
				if(!$retval2)
				{
					die('can not'.mysql_error());
				}
				$search=mysql_fetch_array($retval2);
				$yop=$search['yearOfPunishment'];
				$dor=$search['date_of_release'];
		        $yop=(($yop*12)-$cr)/12;
			
		$sql = "UPDATE courtdecision SET  Conditional_release = '$cr',yearOfPunishment= '$yop' 
		WHERE prisonerId='$pid'";
		$retval = mysql_query( $sql, $conn );
		if(!$retval) 
		{  
			die('Could not enter data: ' . mysql_error());   
		}
		mysql_close($conn); 
		header('location: approveRequest.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		'; 
?>

