<?php
include("dbconnet.php");
$prisonerId=$_POST["prisonerId"];
$case=$_POST["caseOfTransfer"];
$to=$_POST["to"];
$date=$_POST["date"];
$requestId=mt_rand(1,10000);
$sql = "INSERT INTO  TRANSFER_REQUEST(requestId,prisonerId,caseOfTransfer,too,date_of_transfer) VALUES 
		($requestId,'$prisonerId','$case','$to','$date')";
			mysql_select_db('prison');
			$retval = mysql_query( $sql, $conn );
			if(!$retval) 
			{  
				die('Could not enter data into :' . mysql_error());   
			} 
mysql_close($conn); 
header('location: tran.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		';

?>
