<?php
		include("dbconnet.php");
		$code=$_POST["courtCode"];
		$location=$_POST["Location"];
		$courtname=$_POST["courtName"];
		$courtcode=mt_rand(1,10000);
		mysql_select_db('PRISON');
		echo "conect successfully\n"; 
		$sql = "INSERT INTO  court(courtCode,courtName,location) 
		       VALUES ('$courtcode','$courtname', '$location')";
		$retval = mysql_query( $sql, $conn );
		if(!$retval) 
		{  
			die('Could not enter data: ' . mysql_error());   
		}
		
		mysql_close($conn); 
		header('location: courtForm.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		'; 
?>

