<?php
session_start();
include("../Common/connection.php");

if(isset($_POST['bus_id'])) {

	$result = mysql_query("select *from reservation");
	if(mysql_num_rows($result) != 0) {
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

			$result2 = mysql_query("select *from seat where SEAT_ID = ".$row['SEAT_NO']);
			if(mysql_num_rows($result2) != 0) {
				$row2 = mysql_fetch_array($result2, MYSQL_ASSOC);
				if($row2['BUS_ID'] == $_POST['bus_id']) {
					mysql_query("delete from reservation where RESERVATION_ID=".$row['RESERVATION_ID']);
				}
			}
		}
	}
	mysql_query("delete from seat where BUS_ID=".$_POST['bus_id']);

	$sql = "update bus set journy_id=null where BUS_ID=".$_POST['bus_id'];
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
$result2 = mysql_query("select *from journy");
if(mysql_num_rows($result2) == 0) {
	echo "No data is available !!";
} else {

?>
<div align="center"><br>
<table>
	<tr>
		<th>No</th>
		<th>From</th>
		<th>To</th>
		<th>Departure Time</th>
		<th>Arrival Time</th>
		<th>Bus</th>
		<th>No Of Assigned Bus</th>
	</tr>
<?php
	$no = 1;
	while ($row3 = mysql_fetch_array($result2, MYSQL_ASSOC)) {

		echo "<form id='fm".$no."' action='?' method='post'><input type='text' name='journy_id' value='".$row3['JOURNY_ID']."' hidden=''><tr><td>".$no."</td><td>".$row3['FROM']."</td><td>".$row3['TO']."</td><td>".$row3['DEPARTURE_TIME']."</td><td>".$row3['ARRIVAL_TIME']."</td><td>";

		echo "<select name='bus_id' onchange='check_submit(".$no.")'>";
		echo "<option value=''> --- </option>";

		$result4 = mysql_query("select *from bus where journy_id = ".$row3['JOURNY_ID']);

		while($row5 = mysql_fetch_array($result4, MYSQL_ASSOC)) {
			echo "<option value='".$row5['BUS_ID']."'>".$row5['BUS_ID']."</option>";
		}

		echo "</select></td><td>".mysql_num_rows($result4)."</td></tr></form>";

		$no++;
	}
?>	

</table>
</div>
<?php	
}
?>
<script type="text/javascript">
	function check_submit(id) {
		var r = confirm("All The Reservation On This Bus Will Be Deleted!!       PRECEED ???");
		if(r == true)
			document.getElementById('fm'+id).submit();
	}
</script>
</body>
</html>