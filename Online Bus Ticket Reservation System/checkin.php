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
		}
		th{
		background-color: black;
		color: white;
		}
		tr:nth-child(even){background-color:#f2f2f2;}
		</style>
		</head>
		<body>
			<h2><a href="index.php">Home</a></h2>
			<h2><a href="userRegister.html">Register for Bus</a></h2>
			<h2><a href="checkin.html">Back to check</a>
			<h2><a href="cancel.html">cancelTicket</a>
		<div>
		<h2 style="text-align:center"><b>Ethio online  bus ticket</b></h2>
		</div>  
		<?php
		require'connection.php';
		$id=$_POST['bus_id'];
		mysqli_select_db($con,'bus_ticket');
		$select="select * from oneway where Bus_ID='$id'";
		$resul=mysqli_query($con,$select);
			//if(mysqli_num_rows($resul)>0)
				if(!$resul){
					echo "not working".mysqli_error($con);
				}
			if($resul){
		echo"<table border='1' width='50%'>";
		echo"<tr>
		<th>From(origin)</th>
		<th>To(Destination)</th>
		<th>Bus ID</th>
		<th>Number of seat</th>
		<th>Bus name</th>
		<th>Birr(Amount)</th>
		<th>Kilo-Meter</th>
		<th>Avaliable Seat</th>
		
		</tr>";
		while($row =mysqli_fetch_assoc($resul))
		{
		echo "<tr><td>".$row['From(origin)']."</td><td>".$row['To(Destination)']."</td><td>".$row['Bus_ID']."</td><td>".$row['Number of seat']."</td><td>".$row['Bus name']."</td><td>".
		$row['Birr(Amount)']."</td><td>".$row['Kilo-Meter']."</td><td>".$row['Avaliable Seat']."</td></tr>";

		}
		echo "</table>";
			}
				
		else{
			echo " no data to check";
		}
		
		?>  

		</body>
		<div class="footer">
		<footer>
		&copy;Ethio online bus ticket 
		</footer>
		</div>
		</html>
