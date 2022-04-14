			<html>
			<head>
			<link rel="stylesheet" type="text/css" href="web.css">
			<title> view bus</title>
			<style>    
			table{
			border-collapse: collapse;
			width: 50%;
			color:black;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
			margin: 100px;
			background: #649000;
			margin: 15px;
			}
			th{
			background-color: #649000;
			color: white;
			}
			tr:nth-child(even){background-color:#f2f2f2;}
			h2{
			font-size: 33px;
			background: #649000;
			color: azure;
			margin: -18px 7px;

			}
			</style>
			</head>
			<body>

			<header>
			<div class="nav">
			<ul>
			<li><a href="home.html">Logout</a></li>
			<li><a href="update.html">update</a></li>
			<li><a href="users.php">users</a></li>  
			<li><a href="viewbus.php">View bus avaliable</a></li>
			<li><a href="add.html">Add bus</a></li>
			</ul>
			</div>
			<h1 style="text-align:center">hope bus ticket</h1>
			</header>
			<br>
			<h2>users</h2>
			<?php
			require'connection.php';
			mysqli_select_db($con,'bus_ticket');
			$select="select * from signup";
			$result = mysqli_query($con,$select);
			echo"<table border='1' width='50%'>";
			echo"<tr>
			<th>firstname</th>
			<th>lastname</th>
			<th>username</th>
			<th>password </th>
			</tr>";
			while($row =mysqli_fetch_assoc($result))
			{
			echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
			}
			echo "</table>";
			?>  
			</body>
			</html>

