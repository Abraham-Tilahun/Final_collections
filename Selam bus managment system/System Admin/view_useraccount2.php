<?php
include("../Common/connection.php");
if(isset($_POST['Deactivate'])) {
	mysql_query("update account set status='0' where user_id=".$_POST['user_id']);
}
?>
<html>
<head>
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
$result = mysql_query("select *from user");
?>
<div align="center">
<label style="color: white">List of Users </label>
<table border="1">
	<tr>
		<th>User Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Role</th>
		<th>Username</th>
		<th>Status</th>
	
	</tr>
<?php
	
	while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
		$result2=mysql_query("select username,status from account where user_id=".$row['user_id']);
		$row2=mysql_fetch_array($result2,MYSQL_ASSOC);
		if($row2["status"] == '1') {
			echo "<tr><form action='?' method='post'><input type='text' name='user_id' value='".$row['user_id']."' hidden=true><td>".$row['user_id']."</td><td>".$row['first_name']."</td><td>".$row['last_name']
				."</td><td>".$row['role']."</td><td>".$row2['username']."</td><td><input type='submit' value='Deactivate' Name='Deactivate'</td></form></tr>";
		}
		
	}
?>	
</table>
</div>
</body>
</html>