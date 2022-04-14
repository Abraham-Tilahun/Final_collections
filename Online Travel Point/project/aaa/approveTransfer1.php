<?php
		include("dbconnet.php");
		$pid=$_POST["pid"];
		mysql_select_db('PRISON');

		$sql="SELECT * FROM  prisoner where prisonerId='$pid'";
				mysql_select_db('PRISON');
				$retval2 = mysql_query($sql);
				if(!$retval2)
				{
					die('can not'.mysql_error());
				}
				$search=mysql_fetch_array($retval2);
				$doe=$search['dateOfEntrance'];
				$ot=$search['offenceType'];
				$pn=$search['prisonName'];
				$pid1=$search['personId']; 
			 
	    $sql = "INSERT INTO   transfered_prisoner(prisonerId,dateOfEntrance,offenceType ,personId,prisonName) 
		       VALUES ('$pid','$doe','$ot', '$pid1','$pn')";
		$retval = mysql_query( $sql, $conn );
		if(!$retval) 
		{  
			die('Could not enter data: ' . mysql_error());   
		}
		
		$sql2 ="update  prisoner set status=1 WHERE prisonerId = '$pid' ";
				$retval2 = mysql_query( $sql2, $conn );
				if(!$retval2) 
				{  
					die('Could not enter data: ' . mysql_error());   
				}
		mysql_close($conn); 
		header('location: approveTransfer.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		'; 
?>

