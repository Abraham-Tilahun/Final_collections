<?php
				  if (!isset($_GET['id']))
	{
	
	echo '<form action="edititeminfo.php" method="post">';
	
	//echo "<img width=200 height=180 alt='Unable to View' src='" . $row1["image"] . "'>";
	echo '<br>';
	echo '<input type="hidden" name="Id" value="'. $_GET['id'] .'">';
			$con = mysql_connect("localhost","root","");
			if (!$con)
  			{
  			die('Could not connect: ' . mysql_error());
  			}

			mysql_select_db("dbu, $con);
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM new_item WHERE ItemId = $id");
			while($row = mysql_fetch_array($result))
  			{
			echo '<input type="hidden" name="Id" value="'. $row['ItemId'] .'">'; 
  			echo'Item Name: '.'<input type="text" name="in" value="'. $row['ItemName'] .'">'; 
			   echo '<br>';
			  echo'Price per unit: '.'<input type="text" name="pri" value="'. $row['price'] .'">';
			  echo '<br>';
			  echo'model: '.'<input type="text" name="mol" value="'. $row['model'] .'">'; 
			   echo '<br>';
			  echo'Quantity: '.'<input type="text" name="qty" value="'. $row['Qauntity'] .'">';
			   echo '<br>';
			  echo '<input name="" type="submit" value="Save" />';
			  echo 'suss..........." />';
  			}
	echo '</form>';
			}
			?>
			
			
