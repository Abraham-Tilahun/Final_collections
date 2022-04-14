<?php
session_start();
include("../Common/connection.php");
if(isset($_POST['Cancel'])) {
	mysql_query("delete from notice where NOTICE_ID = ".$_POST['NOTICE_ID']);
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
$result2 = mysql_query("select *from notice");
if(mysql_num_rows($result2) == 0) {
	echo "No data is available !!";
} else {
?>
<div align="center">
<label style="color: white">Reservation List </label>
<table>
	<tr>
		<th>No</th>
		<th>Post By</th>
		<th>Post Body</th>
		<th>Cancel</th>
	</tr>
<?php
	$no = 1;
	while ($row3 = mysql_fetch_array($result2,MYSQL_ASSOC)) {

		$result6 = mysql_query("select *from user where user_id = ".$row3['POST_BY']);
		$row6 = mysql_fetch_array($result6,MYSQL_ASSOC);

		echo "<form action='?' method='post'><input type='text' name='NOTICE_ID' value='".$row3['NOTICE_ID']."' hidden=''><tr><td>".$no."</td><td>".$row6['first_name'].' '.$row6['last_name']."</td><td>".$row3['NOTICE_TEXT']."</td><td><input type='submit' name='Cancel' value='Cancel'></td></tr></form>";
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