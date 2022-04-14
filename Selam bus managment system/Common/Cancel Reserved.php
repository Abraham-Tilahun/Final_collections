<?php
session_start();
include("../Common/connection.php");
if(isset($_POST['Cancel'])) {
	mysql_query("delete from reservation where RESERVATION_ID = ".$_POST['RESERVATION_ID']);

	mysql_query("delete from seat where SEAT_ID = ".$_POST['SEAT_NO']);
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

		body h2 {
			width: 100%;
			text-align: center;
			font-style: italic;
			font-weight: bold
		}
	</style>
</head>
<body>
<?php
$result2 = mysql_query("select *from reservation");
if(mysql_num_rows($result2) == 0) {
	echo "No data is available !!";
} else {
?>
<div align="center">
<label style="color: white">Reservation List </label>
<table>
	<tr>
		<th>No</th>
		<th>Reserved BY</th>
		<th>From</th>
		<th>To</th>
		<th>Departure</th>
		<th>Arrival</th>
		<th>Seat No</th>
		<th>Plate No</th>
		<th>Resered Date</th>
		<th>Cancel</th>
	</tr>
<?php
	$no = 1;
	while ($row3 = mysql_fetch_array($result2,MYSQL_ASSOC)) {
		$result4 = mysql_query("select *from journy where journy_id = ".$row3['JOURNY_ID']);
		$row4 = mysql_fetch_array($result4,MYSQL_ASSOC);

		$result5 = mysql_query("select *from seat where SEAT_ID = ".$row3['SEAT_NO']);
		$row5 = mysql_fetch_array($result5, MYSQL_ASSOC);

		$result6 = mysql_query("select *from user where user_id = ".$row3['RESERVE_BY']);
		$row6 = mysql_fetch_array($result6,MYSQL_ASSOC);

		$result7 = mysql_query("select *from bus where BUS_ID = ".$row5['BUS_ID']);
		$row7 = mysql_fetch_array($result7, MYSQL_ASSOC);

		echo "<form action='?' method='post'><input type='text' name='RESERVATION_ID' value='".$row3['RESERVATION_ID']."' hidden=''><input type='text' name='SEAT_NO' value='".$row5['SEAT_ID']."' hidden=''><tr><td>".$no."</td><td>".$row6['first_name'].' '.$row6['last_name']."</td><td>".$row4['FROM']."</td><td>".$row4['TO']."</td><td>".$row4['DEPARTURE_TIME']."</td><td>".$row4['ARRIVAL_TIME']."</td><td>".$row5['SEAT_NO']."</td><td>".$row7['PLATE_NUMBER']."</td><td>".$row3['RESERVATION_DATE']."</td><td><input type='submit' name='Cancel' value='Cancel'></td></tr></form>";
		$no++;
	}
?>	
</table>
</div>
<?php	
}
?>
</body>
</html>