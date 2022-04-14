


  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

  <!--sa validate from--
            
         <?php
			   $con = mysql_connect("localhost","root","");
								if (!$con)
								  {
								  die('Could not connect: ' . mysql_error());
								  }
								
								mysql_select_db("storem", $con);
								
			
								$result3 = mysql_query("SELECT * FROM new_item");
								echo "<table border='1'>
								<tr>
					<th>Item Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Model</th>
					<th>Action</th></tr>";
								while($row3 = mysql_fetch_array($result3))
								  {
								 echo '<tr>';
									echo '<td>'.$row3['ItemName'].'</td>';
									
									echo '<td>'.$row3['Itemid'].'</td>';
									
									echo '<td>'.$row3['price'].'</td>';
									echo '<td>'.$row3['Qauntity'].'</td>';
									echo '<td>'.$row3['model'].'</td>';
									echo '<td>';
									echo'<a rel="facebox" href=edititem.php?id=' . $row3["Itemid"] . '>' . 'update' . '</a>';
									echo ' | ';
									echo'<a rel="facebox" href=deleteroom.php?id=' . $row3["Itemid"] . '>' . 'Delete' . '</a>';
									echo '</td>';
								 echo '</tr>';
							
								  }
			            echo "</table>";
			  ?>
          
