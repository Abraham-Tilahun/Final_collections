		<html>
		<head>
		<link rel="stylesheet" type="text/css" href="web.css">
		<title>view bus</title>
		<style>
		table{
		border-collapse: collapse;
		width: 50%;
		color:black;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
		margin: 0px;
		background: #649000;
		}
		th{
		background-color: #649000;
		color: #000;
		}
		tr:nth-child(even){background-color:#f2f2f2;}
		</style>
		</head>
		<body>
		<header>
		<div class="nav">
		<ul>
		<li><a href="home.html">Logout</a></li>
		<li><a href="view.php">Admin</a></li>
		<li><a href="update.html">update</a></li>
		<li><a href="users.php">users</a></li>  
		<li><a href="add.html">Add bus</a></li>


		</ul>
		</div>
		<h1 style="text-align:center">Ethio online bus Ticket</h1>
		</header>
		<?php
		require'connection.php';
		mysqli_select_db($con,'bus_ticket');
		$select="select * from oneway";
		$result = mysqli_query($con,$select);
		if($result){
			
		echo"<table border='1' width='50%'>";
		echo"<tr>
		<th>FROM</th>
		<th>TO</th>
		<th>DATE</th>
		<th>ID</th>
		<th>BUS ID</th>
		<th>FARE</th>
		<th>KILOMETER</th>
		</tr>";
		while($row = mysqli_fetch_assoc($result))
		{
		echo "<tr><td>".$row["from"]."</td><td>".$row["to"]."</td><td>".$row["date"]."</td><td>".$row['id']."</td><td>".$row["bid"]."</td><td>".$row["fare"]."</td><td>".$row["meter"]."</td></tr>";
		echo "<td><a href=\"busdelete.php?id=".$row["bid"]."\">Delete</a></td>";
		} 
		echo "</table>";
		}
		?>  
		</body>
		</html>

