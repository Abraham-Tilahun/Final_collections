   <?php
   include("connection.php");
   mysqli_select_db($con,'bus_ticket');
   $sql="SELECT * from comment";
   $result=mysqli_query($con,$sql);
		if($result){
			if(mysqli_num_rows($result)>0){
		echo"<table border='1' width='50%'>";
		echo"<tr>
		<th>name</th>
		<th>email</th>
		<th>message</th>
		</tr>";
		while($row =mysqli_fetch_assoc($result))
		{
	 echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["message"]."</td></tr>";

		}
		echo "</table>";
			}
			else{
				echo "no coment";
				
		}
		}
		else
		{
		echo "can not fetch";
   }
   
   
   
   ?>