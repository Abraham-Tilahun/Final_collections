<?php
include("dbconnet.php");
$value=$_POST["Date"];

$abd=$_POST["time"];
echo "conect successfully\n"; 
$sql = "INSERT INTO  Schedule(date,time) VALUES ('$value','$abd');";
mysql_select_db('PRISON');

$retval = mysql_query( $sql, $conn );
if(!$retval ) {  
die('Could not enter data: ' . mysql_error());   }
echo "Data entered successfully\n";
mysql_close($conn);
header('location: Schedul.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		'; 
?>
