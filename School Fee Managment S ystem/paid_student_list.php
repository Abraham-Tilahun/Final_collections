<?php
	include("connection.php");
	mysqli_select_db($con,'schoolFee');
	$sql_selection="SELECT * from taking_fee";
	$result=mysqli_query($con,$sql_selection);
	if($result){
			if(mysqli_num_rows($result)>0){
		echo"<table border='1' width='10%'>";
		echo"<tr>
		<th>first_name</th>
		<th>middle_name</th>
		<th>last_name</th>
		<th>age</th>
		<th>sex</th>
		<th>grade</th>
		<th>section</th>
		<th>tele</th>
		<th>date</th>
		<th>remark</th>
		</tr>";
		while($row =mysqli_fetch_assoc($result))
		{
			if($_POST["grade"]==$row["grade"] ){
	 echo "<tr><td>".$row["first_name"]."</td><td>".$row["middle_name"]."</td><td>".$row["last_name"]."</td><td>".$row["age"]."</td><td>".$row["sex"]."</td><td>".$row["grade"]."</td><td>".$row["section"]."</td><td>".$row["tele"]."</td><td>".$row["date"]."</td><td>".$row["remark"]."</td></tr>";
		}}
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