<?php
session_start();
include("../Common/connection.php");
$result7 = mysql_query("select user_id from account where username='".$_SESSION['username']."'");
$row7 = mysql_fetch_array($result7,MYSQL_ASSOC);
$user_id = $row7['user_id'];

$result8 = mysql_query("select *from user where user_id=".$user_id);
$row8 = mysql_fetch_array($result8, MYSQL_ASSOC);

$NumOfNotifications = 0;
if($row8['last_seen'] != null) {
	$result9 = mysql_query("select *from reservation");
	while($row9 = mysql_fetch_array($result9, MYSQL_ASSOC)) {
		$str1 = strtotime($row9['SUBMITTED_DATE']);
    	$str2 = strtotime($row8['last_seen']);
    	if($str1 > $str2) {
    		$NumOfNotifications ++;
    	}
	}
}

if(isset($_POST['Reserve'])) {
	$result = mysql_query("select user_id from account where username='".$_SESSION['username']."'");
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
	$user_id = $row['user_id'];

	$sql = "update reservation set status='Reserved', ASSIGNBY_ID=".$user_id." where RESERVATION_ID=".$_POST['RESERVATION_ID'];
	mysql_query($sql);

	$sql = "insert into notifcation values('', ".$_POST['RESERVATION_ID'].", 'confirm', '".date("Y-m-d H:i:sa")."')";
	mysql_query($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table {
			border: 1px black solid;
			border-collapse: collapse;
			color: black;
			background: white;
		}
		th { 	
			background: rgba(230, 230, 230, 1);
			color: rgb(0, 0, 0);
			font-weight: bold;
			font-style: italic;
		}
		th, td {
			border-bottom: 1px black solid;
			border-left: 1px black solid;
			padding: 8px 4px;
			text-align: center;
		}
		div {
			color: white;
			margin-top: 30px;
		}
	</style>
</head>
<body>
<?php
if($NumOfNotifications != 0)
    echo '<audio src="../Common/BBMVoiceNotification.mp3" hidden="" id="audio_player" controls preload="true" autoplay="true"></audio>';

$result2 = mysql_query("select *from reservation where status='Not Reserved' order by RESERVATION_ID DESC");
if(mysql_num_rows($result2) == 0) {
	echo "No data is available !!";
} else {
?>
<div align="center">
<label style="color: white">Reservation List </label>
<table>
	<tr>
		<th>No</th>
		<th>Reserved By</th>
		<th>From</th>
		<th>To</th>
		<th>Departure</th>
		<th>Arrival</th>
		<th>Seat No</th>
		<th>Plate No</th>
		<th>Resered Date</th>
		<th>Status</th>
	</tr>
<?php
	$no = 1;
	while ($row3 = mysql_fetch_array($result2,MYSQL_ASSOC)) {
		$result4 = mysql_query("select *from journy where journy_id = ".$row3['JOURNY_ID']);
		$row4 = mysql_fetch_array($result4,MYSQL_ASSOC);

		$result5 = mysql_query("select *from seat where SEAT_ID = ".$row3['SEAT_NO']);
		$row5 = mysql_fetch_array($result5, MYSQL_ASSOC);

		$result7 = mysql_query("select *from bus where BUS_ID = ".$row5['BUS_ID']);
		$row7 = mysql_fetch_array($result7, MYSQL_ASSOC);

		$result6 = mysql_query("select *from user where user_id = ".$row3['RESERVE_BY']);
		$row6 = mysql_fetch_array($result6,MYSQL_ASSOC);

		echo "<form action='?' method='post'><input type='text' name='RESERVATION_ID' value='".$row3['RESERVATION_ID']."' hidden=''>";

		if($no <= $NumOfNotifications)
			echo "<tr style='background: rgba(250, 150, 150, 0.5);'>";
		else
			echo "<tr>";
		
		echo "<td>".$no."</td><td>".$row6['first_name'].' '.$row6['last_name']."</td><td>".$row4['FROM']."</td><td>".$row4['TO']."</td><td>".$row4['DEPARTURE_TIME']."</td><td>".$row4['ARRIVAL_TIME']."</td><td>".$row5['SEAT_NO']."</td><td>".$row7['PLATE_NUMBER']."</td><td>".$row3['RESERVATION_DATE']."</td><td><input type='submit' name='Reserve' value='Confirm'></td></tr></form>";
		$no++;
	}
?>	
</table>
</div>
<?php	
}

mysql_query("update user set last_seen='".date("Y-m-d H:i:sa")."' where user_id=".$user_id);
?>
</body>
</html>