<?php
		include("dbconnet.php");
		$yop=$_POST["yop"];
		$dor=$_POST["dor"];
		$ot=$_POST["cc"];
		$pid=$_POST["pid"];
		$rid=mt_rand(1,10000);
		mysql_select_db('PRISON');
		echo $pid;
		echo "conect successfully\n"; 				
		$sql3 = "INSERT INTO  conditional_release_case_request(requestId,prisonerId,year_of_punishment,crime_committed,date_of_request) VALUES 
		($rid,'$pid','$yop','$ot','$dor')";
				$retvalp = mysql_query( $sql3, $conn );
				if(!$retvalp) 
				{  
					die('Could not enter data into : con' . mysql_error());   
				}	
			
		
		mysql_close($conn); 
		header('location: addCondRe.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		'; 
?>

