<?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="edititemexec.php" method="post">';
	echo '<br>';
	echo '<input type="hidden" name="firstname" value="'. $_GET['id'] .'">';
			$con = mysql_connect("localhost","root","");
			if (!$con)
  			{
  			die('Could not connect: ' . mysql_error());
  			}

			mysql_select_db("dbu", $con);
		
			$id=$_GET['id'];
			$result = mysql_query("SELECT * FROM new_item WHERE ItemId = $id");

			while($row = mysql_fetch_array($result))
  			{
			echo '<input type="hidden" name="Itemid" value="'. $row['ItemId'] .'">'; 
  			echo'Item Name: '.'<input type="text" name="roomtype" value="'. $row['ItemName'] .'">'; 
			   echo '<br>';
			  echo'Price: '.'<input type="text" name="roomrate" value="'. $row['price'] .'">';
			  echo '<br>';
			  echo'Quantity: '.'<input type="text" name="description" value="'. $row['Qauntity'] .'">'; 
			   echo '<br>';
			  echo'Model: '.'<input type="text" name="qty" value="'. $row['model'] .'">';
			   echo '<br>';
			  echo '<input name="" type="submit" value="Save" />';
  			}
	echo '</form>';
	
			}
			
			?>
			
			
