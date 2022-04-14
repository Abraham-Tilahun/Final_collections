<?php
		include("dbconnet.php");
		$pr_Id=$_POST["Pid"];
		$court=$_POST["courtOfConviction"];
		$dateOfCon=$_POST["DateOfConviction"];
		$case=$_POST["CaseType"];
		$decision=$_POST["DecisionType"];
		$yearOfp=$_POST["yearOfPunishment"];
		$dateOfR=$_POST["date_of_release"];
		
		mysql_select_db('PRISON');
		echo "connect successfully\n";   
			"select null from prisoner where prisonerId='$pr_Id'";
			$sql = "INSERT INTO  CourtDecision(DecisionType,courtOfConviction,dateOfConviction,yearOfPunishment,date_of_release,prisonerId) VALUES 
			('$decision','$court','$dateOfCon','$yearOfp','$dateOfR','$pr_Id')";
		
			$retval = mysql_query( $sql, $conn );
			if(!$retval) 
			{  
				die('Could not enter data into :' . mysql_error());   
			}			
		mysql_close($conn); 
		header('location: decision.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		'; 
?>

