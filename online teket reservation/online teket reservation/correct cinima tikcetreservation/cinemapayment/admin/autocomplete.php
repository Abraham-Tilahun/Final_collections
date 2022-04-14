<?php
	$q=$_GET['q'];
	$my_data=mysql_real_escape_string($q);
	$mysqli=mysqli_connect('localhost','root','','masiyas') or die("Database Error");
	$sql="SELECT MovieName FROM products WHERE MovieName LIKE '%$my_data%' ORDER BY MovieName";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());
	
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo $row['MovieName']."\n";
		}
	}
?>