		<html>
		<head>
		<title>view bus</title>
		<link rel="stylesheet" type="text/css" href="web.css">
		<style>

		table{
		border-collapse: collapse;
		width: 50%;
		color:black;
		font-family: monospace;
		font-size: 22px;
		text-align: left;
		margin-top: 15%;
		margin-left: 20%;
		}
		th{
		background-color: #649000;
		color: white;
		}
		tr:nth-child(even){background-color:#f2f2f2;}
		.btn{
		width: 130px;
		height: 40px;
		margin: 30px;
		margin-left: 40%;
		background-color: #649000;
		color: white;
		line-height: 40px;
		text-align: center;
		font-size: 16px;
		margin-right: 2px;
		text-transform: uppercase;
		}
		.btn a{
		color: black;

		}
		.btn a:hover{
		background-color: #000;
		color: #649003;

		}
		</style>
		</head> 
		<body>
		<header>
		<div class="nav">

       <a href="index.php">home</a>

		<h1 style="text-align:center"><b>Ethio online bus Ticketing</b></h1>

		</div>
		</header>

		<?php
		require'connection.php';
		$from=$_POST['from'];
		$to=$_POST['to'];
		mysqli_select_db($con,'bus_ticket');
		$sql="SELECT * FROM  `oneway` WHERE  `From(origin)` LIKE  '$from' AND  `To(destination)` LIKE  '$to'";
		$result=mysqli_query($con,$sql);
		echo "<table border='1'>";
		echo "<tr>";
		echo "<th>From(origin)</th><th>To(Destination)</th><th>Bus_ID</th><th>Number of Seat</th><th>Bus name</th><th>Birr(Amount)</th><th>Kilo Meter</th><th>Date</th><th>Avaliable seat</th>";
		echo "</tr>";
		while($row = mysqli_fetch_assoc($result))
		{

		echo "<tr><td>".$row["From(origin)"]."</td><td>".$row["To(Destination)"]."</td><td>".$row["Bus_ID"]."</td><td>".$row['Number of seat']."</td><td>".$row["Bus name"]."</td><td>".$row["Birr(Amount)"]."</td><td>".$row["Kilo-Meter"]."</td><td>".$row["Date"]."</td><td>".$row["Avaliable Seat"]."</td></tr>";
		}
		echo "</table>";
		mysqli_close($con);
		?>  
		<div class="btn">
		<a href="registerone.html">BUY</a>
		</div>
		</body>
		<div class="footer">
		<footer>
		&copy;Ethio online bus ticket 
		</footer>
		</div>
		</html>