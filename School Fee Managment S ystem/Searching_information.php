<?php
	include("connection.php");
	mysqli_select_db($con,'schoolFee');
	$sql_selection="SELECT * from student_info";
	$result=mysqli_query($con,$sql_selection);
	if($result){
			if(mysqli_num_rows($result)>0){
		echo"<table border='1' width='50%'>";
		echo"<tr>
		<th>first_name</th>
		<th>middle_name</th>
		<th>last_name</th>
		<th>id</th>
		<th>age</th>
		<th>sex</th>
		<th>tele</th>
		<th>date</th>
		<th>address</th>
		</tr>";
		while($row =mysqli_fetch_assoc($result))
		{
			if($_POST["searching_id"]==$row["id"]){
	 echo "<tr><td>".$row["first_name"]."</td><td>".$row["middle_name"]."</td><td>".$row["last_name"]."</td><td>".$row["id"]."</td><td>".$row["age"]."</td><td>".$row["sex"]."</td><td>".$row["tele"]."</td><td>".$row["date"]."</td><td>".$row["address"]."</td></tr>";
			}
		}
		echo "</table>";
			}
			else{
				echo "no suchh table";
				
		}
		}
		else
		{
		echo "can not fetch";
   }


?>