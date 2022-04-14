
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
$result = mysql_query("select *from user");
if(mysql_num_rows($result) == 0) {
	echo "No data is available !!";
} else {
?>
<div align="center">
<br>
<table border="1" style="background: white">
	<tr>
		<th>User Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Sex</th>
		<th>DOB</th>
		<th>Age</th>
		<th>City</th>
		<th>Role</th>
		<th>Phone Number</th>
		<th>Email</th>
		<th>Update</th>
	
	</tr>
<?php
	
	while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
		echo "<tr><td>".$row['user_id']."</td><td>".$row['first_name']."</td><td>".$row['last_name']
		."</td><td>".$row['sex']."</td><td>".$row['DOB']."</td><td>".$row['age']."</td><td>".$row['city']
		."</td><td>".$row['role']."</td><td>".$row['PHONE_NO']."</td><td>".$row['EMAIL']."</td><td><a href='updateacc2.php?id=".$row['user_id']."'><img src='../image/20.png'title='Edit'></td></tr>";
		
	}
?>	
</table>
</div>
<?php	
}
?>
</body>
</html>