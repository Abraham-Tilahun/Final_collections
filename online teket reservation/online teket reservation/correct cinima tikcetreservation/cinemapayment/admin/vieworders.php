<link rel="stylesheet" href="../febe/style.css" type="text/css" media="screen" charset="utf-8">
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
Deliver Date: <?php
include("../includes/db.php");
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM reservation WHERE confirmation='$id'");
		while($row = mysql_fetch_array($result))
			{
				echo $row['delivery_date'];
			}
	?> 
<table cellpadding="2" cellspacing="2" >
	<thead>
		<tr>
			<th  style="border-left: 1px solid #C1DAD7"> Name </th>
			<th> Quantity </th>
			<th> Price </th>
		</tr>
	</thead>
	<tbody>
	<?php
		
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM orders WHERE confirmation='$id'");
		while($row = mysql_fetch_array($result))
			{
				echo '<tr class="record">';
				echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['product'].'</td>';
				echo '<td>'.$row['qty'].'  </td>';
				echo '<td>'.$row['price'].'</td>';
				echo '</tr>';
			}
	?> 
	<?php
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM reservation WHERE confirmation='$id'");
		while($row = mysql_fetch_array($result))
			{
				echo '<tr class="record">';
				echo '<td style="border-left: 1px solid #C1DAD7;" colspan=2>Total Payable</td>';
				echo '<td>'.$row['payable'].'</td>';
				echo '</tr>';
			}
	?> 
	</tbody>
</table>