<?php
		include("dbconnet.php");
		$prid=$_POST["pid"];
		$Conviction=$_POST["doc"];
		$dType=$_POST["dt"];
		$year=$_POST["yop"];
		$dRelease=$_POST["dor"];
		mysql_select_db('PRISON');
		echo "conect successfully\n"; 
		$sql = "UPDATE courtdecision SET  dateOfConviction = '$Conviction',DecisionType = '$dType',yearOfPunishment ='$year',dateOfRelease = '$dRelease' WHERE prisonerId='$prid'";
		$retval = mysql_query( $sql, $conn );
		if(!$retval) 
		{  
			die('Could not enter data: ' . mysql_error());   
		}
		mysql_close($conn); 
		header('location: newPrisonerRegistration.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");</script>'; 
?>
