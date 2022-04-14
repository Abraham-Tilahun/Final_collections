<?php
include("dbconnet.php");
		$prison_location=$_POST["loc"];
		$Name=$_POST["pn"];
		$nb=$_POST["nb"];
		mysql_select_db('PRISON'); 
		echo "conect successfully\n";
		$sql = "INSERT INTO  PRISON(prisonName,location,No_block) VALUES ('$Name','$prison_location',$nb)";
		$retval = mysql_query( $sql, $conn );
		if(!$retval) 
		{  
			die('Could not enter data:' . mysql_error());   
		}
		mysql_close($conn); 
		header('location: prisonRegreg.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		';
?>

