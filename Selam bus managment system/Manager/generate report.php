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
			margin-top: 10px;
		}
	</style>
</head>
<body>
<?php
session_start();
include("../Common/connection.php");
$result2 = mysql_query("select *from reservation");
if(mysql_num_rows($result2) == 0) {
	echo "No data is available !!";
} else {
?>
<div align="center">
	<input type="button" name="" value="Print Report" onclick="Clickheretoprint()">
</div>
<div align="center" style="background: white; border: 1px solid black;" id="print_content">
<label style="color: black; font-size: 24px;">Reservation List </label>
<br><br>
<table border='2'>
	<tr>
		<th>No</th>
		<th>Res'v By</th>
		<th>From</th>
		<th>To</th>
		<th>Departure</th>
		<th>Arrival</th>
		<th>Seat No</th>
		<th>Plate No</th>
		<th>Res'v Date</th>
		<th>App By</th>
		<th>Status</th>
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

		echo "<tr><td>".$no."</td><td>".$row6['first_name'].' '.$row6['last_name']."</td>
		<td>".$row4['FROM']."</td><td>".$row4['TO']."</td><td>".$row4['DEPARTURE_TIME']."</td><td>".$row4['ARRIVAL_TIME']."</td>
		<td>".$row5['SEAT_NO']."</td><td>".$row7['PLATE_NUMBER']."</td><td>".$row3['RESERVATION_DATE']."</td><td>";
		if($row3['ASSIGNBY_ID'] == null)
			echo "null";
		else {
			$result7 = mysql_query("select *from user where user_id = ".$row3['ASSIGNBY_ID']);
			$row7 = mysql_fetch_array($result7,MYSQL_ASSOC);
			echo $row7['first_name'].' '.$row7['last_name'];
		}
		echo "</td><td>".$row3['status']."</td></tr>";
		$no++;
	}
?>	
</table>
<br><br><br><br><br>
<div align="right" style="font-size: 20px;">
	<div>Generate By: _____________</div>
	<div>Signed By: _____________</div>
</div>
<br><br><br><br><br>
</div>
<?php	
}
?>

<script language="javascript">
	function Clickheretoprint()
		{ 
		    var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
		      disp_setting+="scrollbars=yes,width=800, height=400, left=300, top=250"; 
		    var content_vlue = document.getElementById("print_content").innerHTML; 
		  
		    var docprint=window.open("","",disp_setting); 
		    docprint.document.open(); 
		    docprint.document.write('<html><head><title>Trade License</title>'); 
		    docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:12px; font-family:arial;">');          
		    docprint.document.write(content_vlue);          
		    docprint.document.write('</body></html>'); 
		    docprint.document.close(); 
		    docprint.focus(); 
		}
</script>
</body>
</html>