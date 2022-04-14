<?php 
session_start();
include("../connection/connection.php");
?>
<?php		

if(isset($_POST['Update']))
    {       
	$bordno = $_POST['bord'];
	$id=$_POST['id'];
	$workp= $_POST['intial'];
	$dest= $_POST['destination'];
	$le= $_POST['level'];
	$perepar= date("y-m-d ");
	$distanc= $_POST['distance'];
	$tari=$_POST['tarif'];
	$time=time('H:m:s');
	$status='Null';
	$exp_date=$_POST['datt'];
    $exp = strtotime($exp_date);
    $td = strtotime($perepar);
    $diff = $td-$exp; 
	$x=abs(floor($diff / (60 * 60 * 24)));
	if($x<30){
	 echo '<script type="text/javascript"> alert("Sorry Your Prepare date is Less than 30 please wait!!");window:location=\'ScheduleUpdatesearch.php\';</script>';
	}
	else{
 $sql= mysql_query("UPDATE schedule SET  BORD_NUMBER='$bordno', REQ_ID='$id' 
		 ,INITIAL_PLACE='$workp',DESTINATION_PLACE='$dest',PREPARED_DATE='$perepar',DISTANCE='$distanc',TARIFF='$tari',STATUS='$status' where REQ_ID='$id'");
			if($sql){
$ma=mysql_query("INSERT INTO schedule_backup values ('$bordno','$id','$workp','$dest','$perepar','$le','$distanc','$tari',Now(),'$status')" )or die(mysql_error());
		if($ma){
echo '<script type="text/javascript">alert("Updated/Inserted Seccesfully !! ");window:location=\'ScheduleUpdatesearch.php\';</script>';
			}			
			}	
	else{
		echo"Not Inserted";
			}
	/*
	echo"Update seccesfully";
	header("Location: UpdateSchedulenew.php");		*/	
}}
mysql_close($con);
?>
	