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
include("../Common/connection.php");
$result = mysql_query("select *from comment");
if(mysql_num_rows($result) == 0) {
	echo "No data is available !!";
} else {
?>
<div align="center">
<label style="color: white">Comments Given </label>
<table>
	<tr>
		<th>Comment id</th>
		<th>Sender Name</th>
		<th>Sender Email</th>
		<th>Comment Body</th>
	</tr>
<?php
	$no = 1;
	while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
		echo "<tr><td>".$no."</td><td>".$row['SENDER_NAME']."</td><td>".$row['SENDER_EMAIL']."</td><td>".$row['COMMENT_BODY']."</td></tr>";
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