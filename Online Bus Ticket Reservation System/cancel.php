	<html>
	<head>
	<link rel="stylesheet" type="text/css" href="web.css">
	<title>view-bus</title>
	<style>
	table{
	border-collapse: collapse;
	width: 50%;
	color:black;
	font-family: monospace;
	font-size: 25px;
	text-align: left;
	margin: 0px;
	}
	th{
	background-color: black;
	color: white;
	}
	tr:nth-child(even){background-color:#f2f2f2;}
	</style>
	</head>
	<body>
	<header>
	<div class="nav">
	<a href="index.php"><a>
	</div>
	<h1 style="text-align:center color:#00cc99">Ethio online  bus ticketing</h1>
	</header>
	<?php
	require'connection.php';
	mysqli_select_db($con,'bus_ticket');
	$phone=$_POST['phone'];
	$select="SELECT * from userregister where phone='$phone'";
	$result = mysqli_query($con,$select);
	echo"<table border='1' width='50%'>";
	echo"<tr>
	<th>FIRSTNAME</th>
	<th>MIDDLENAME</th>
	<th>LASTNAME</th>
	<th>EMAIL</th>
	<th>PHONE</th>
	</tr>";
	while($row =mysqli_fetch_assoc($result))
	{
	echo "<tr><td>".$row["FIRSTNAME"]."</td><td>".$row["MIDDLENAME"]."</td><td>".$row["LASTNAME"]."</td><td>".$row['EMAIL']."</td><td>".$row["PHONE"]."</td></tr>";
	echo "<td><a href=\"cancelticket.php?PHONE=".$row["PHONE"]."\">cancel</a></td>";
	}
	echo "</table>";
	?>  
	</body>
	<div class="footer">
	<footer>
	&copy;Ethio online bus ticket 
	</footer>
	</div>
	</html>
	;