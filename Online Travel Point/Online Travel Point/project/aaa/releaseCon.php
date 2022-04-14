<?php
include("dbconnet.php");
$firstName=$_POST["fName"];
$lastName=$_POST["lName"];
$prisonerid=$_POST["prisonerId"];
$yearPunish=$_POST["yearOfPunishment"];
$crime=$_POST["crimeCommited"];
$sex=$_POST["sex"];
echo "$_POST[prid]";
echo "conect successfully\n"; 
$sql = "INSERT INTO ConditionalRelease(fname,lname,from_pname,prisonerId,yearOfPunishment,crimeCommited,sex)
 VALUES ('$firstName', '$lastName','$prisonerid','$yearPunish','$crime','$sex')";
mysql_select_db('PRISON');

$retval = mysql_query( $sql, $conn );
if(!$retval ) {  
die('Could not enter data: ' . mysql_error());   }
echo "Data entered successfully\n";
mysql_close($conn);
header('location: conditionalReleaseCase.php');
		echo'<script type="text/javascript">
		document.alert("Successfully entered");
		</script>
		'; 

?>