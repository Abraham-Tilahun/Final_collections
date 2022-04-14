<div style="color:#000000;">
<?php 
include("includes/db.php");
?>

<?php

				  if (isset($_GET['product_id']))
			{
	
	
			
		
			$id=$_GET['product_id'];
			$result = mysql_query("SELECT * FROM products WHERE product_id = $id");

			$row3 = mysql_fetch_array($result);
			echo '<div style="font-size:30px;"><b>'.$row3['BrandName'].'</b></div><br>';
			echo '<h3><b>Description</b></h3>'.'<div style="font-size:18px;">'.$row3['product_ingredients'].'</div><br>';
				echo '<img  src="images/upload/'.$row3['product_photo'].'" width="300" height="300"  />';
  			
	
			}
			?>
<table width="191"  style="border:3px solid #FFFFFF;" cellpadding="5px" cellspacing="1px">
  <tr> 
   <td><b><div align="center">Model</div></td>
    <td><b><div align="center">BrandName</div></td>
    <td><b><div align="center">Price</div></td>
  </tr>

			<?php

				  if (isset($_GET['product_id']))
			{
	
	
			
		
			$id=$_GET['product_id'];
			$result = mysql_query("SELECT * FROM products WHERE product_id = $id");

			while($row3 = mysql_fetch_array($result))
  			{
			echo '<tr>';
				echo '<td><b><div  align="center">'.$row3['model'].'</div></td>';
				echo '<td><b><div   align="center">'.$row3['BrandName'].'</div></td>';
				echo '<td><b><div  align="center">'.$row3['product_price'].'</div></td>';
			echo '</tr>';
  			}
	
			}
			?>
			 
</table>
			</div>