<?php
session_start();
include("../Common/connection.php");

if(isset($_POST['bus_id'])) {
	$sql = "update bus set journy_id=".$_POST['journy_id']." where BUS_ID=".$_POST['bus_id'];
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

		echo "<form action='?' method='post'><input type='text' name='journy_id' value='".$row3['JOURNY_ID']."' hidden=''><tr><td>".$no."</td><td>".$row3['FROM']."</td><td>".$row3['TO']."</td><td>".$row3['DEPARTURE_TIME']."</td><td>".$row3['ARRIVAL_TIME']."</td><td>";

		echo "<select name='bus_id' onchange='this.form.submit();'>";
		echo "<option value=''> - </option>";

		$result5 = mysql_query("select *from bus");
		while($row5 = mysql_fetch_array($result5, MYSQL_ASSOC)) {
			if($row5['journy_id'] == null)
				echo "<option value='".$row5['BUS_ID']."'>".$row5['BUS_ID']."</option>";
		}

		$result4 = mysql_query("select *from bus where journy_id = ".$row3['JOURNY_ID']);
		$row4 = mysql_fetch_array($result4, MYSQL_ASSOC);

		echo "</select></td><td>".mysql_num_rows($result4)."</td></tr></form>";

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