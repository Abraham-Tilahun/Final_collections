  
  <!DOCTYPE html>
   <html>
   <head><title>Registerd users for Bus</title></head>
   <body>
   <center>
   <div>
   <a href="index.php"><h3>Home</h3></a>
   <a href="add.html"><h3>Back to Add</h3></a>
   <a href="deleteUsers.html"><h3> Delete users</h3></a>
   </div>
   <div>
   <?php
  require'connection.php';
			mysqli_select_db($con,'bus_ticket');
			$select="select * from userregister";
			$result = mysqli_query($con,$select);
			echo"<table border='1' width='50%'>";
			echo"<tr>
			<th>FIRSTNAME</th>
			<th>MIDDLENAME</th>
			<th>LASTNAME</th>
			<th>EMAIL </th>
			<th>PHONE </th>
			<th>BUS_ID </th>
			<th>DATE </th>
			</tr>";
			while($row =mysqli_fetch_assoc($result))
			{
			echo "<tr><td>".$row["FIRSTNAME"]."</td><td>".$row["MIDDLENAME"]."</td><td>".$row["LASTNAME"]."</td><td>".$row["EMAIL"]."</td><td>".$row["PHONE"]."</td><td>".$row["Bus_ID"]."</td><td>".$row["Date"]."</td></tr>";
			}
			echo "</table>";
			?>  
			</div>
			<center>
  
   </body>
   <html>
  
 