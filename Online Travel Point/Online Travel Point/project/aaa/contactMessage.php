<?php
		include("dbconnet.php");
		$name=$_POST["Name"];
		$email=$_POST["email"];
		$msg=$_POST["Message"];
		mysql_select_db('PRISON');
		echo "conect successfully\n"; 
		$sql = "INSERT INTO  Message(Name,Email, Message) 
		       VALUES ('$name','$email', '$msg')";
		$retval = mysql_query( $sql, $conn );
		if(!$retval) 
		{  
			die('Could not enter data: message' . mysql_error());   
		}
		mysql_close($conn); 
		header('location: contactas.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		'; 
?>

