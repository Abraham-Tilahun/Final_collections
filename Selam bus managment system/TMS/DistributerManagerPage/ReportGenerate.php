<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table {
			border: 1px black solid;
			border-collapse: collapse;
			color: black;
		}
		th {
			color: green;
		}
		th, td {
			border: 2px black solid;
			padding: 8px 4px;
			text-align: center;
		}
		div {
			color: black;
			margin-top: 30px;
		}
	</style>
</head>
<body>
<?php
session_start();
include("../connection/connection.php");
$result2 = mysql_query("select *from Schedule");
if(mysql_num_rows($result2) == 0) {
	echo "No data is available !!";
} else {
?>
<div align="right">
	<input type="button" name="" value="Print Report" onclick="Clickheretoprint()">
</div>
<div align="center" style="background: white; border: 2px solid black;" id="print_content">
<br><br>
<label style="color: black; font-size: 24px;">Operator Schedule </label>
<br><br>
<table border='1'>
	<tr>
	    <th>No</th> 
		<th>Operator ID</th>
		<th>Bord Number</th>
		<th>Level</th>
		<th>From</th>
		<th>To</th>
		<th>Tariff</th>
		
		
	</tr>
<?php
	$no = 1;
	while ($row3 = mysql_fetch_array($result2,MYSQL_ASSOC)) {

		$result6 = mysql_query("select REQ_ID,BORD_NUMBER,INITIAL_PLACE,DESTINATION_PLACE,LEVEL,TARIFF from Schedule");
		$row6 = mysql_fetch_array($result6,MYSQL_ASSOC);
		echo "<tr><td>".$no."</td><td>".$row3['REQ_ID']."</td><td>"
		.$row3['BORD_NUMBER']."</td><td>".$row3['LEVEL']."</td><td>".$row3['INITIAL_PLACE'].
		"</td><td>".$row3['DESTINATION_PLACE']."</td><td>".$row3['TARIFF'];
		$no++;
	}
?>
</table>

<br><br><br><br><br>
<div align="center" style="font-size: 20px;">
	<div>Generate By:<?php echo"<u><i>$_SESSION[USER_NAME]</i></u>"?> </div>
	<div>Sign: _____________</div>
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
		      disp_setting+="scrollbars=yes,width=600, height=350, left=320, top=250"; 
		    var content_vlue = document.getElementById("print_content").innerHTML; 
		  
		    var docprint=window.open("","",disp_setting); 
		    docprint.document.open(); 
		    docprint.document.write('<html><head><title>Schedule Report</title>'); 
		    docprint.document.write('</head><body onLoad="self.print()" style="width: 600px; font-size:12px; font-family:arial;">');          
		    docprint.document.write(content_vlue);          
		    docprint.document.write('</body></html>'); 
		    docprint.document.close(); 
		    docprint.focus(); 
		}
</script>
</body>
</html>