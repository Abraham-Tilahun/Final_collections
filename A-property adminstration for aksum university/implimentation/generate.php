<?php 
						echo'<p valign="bottom" align="right"><form><input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" onclick="window.print();"></form></p>';
	$sel=mysql_query("SELECT * FROM new_item ");
			echo '<table align="center" style="width:100px;border:1px solid #336699;border-radius:10px;" id="vtable"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">ItemName.</th>
			<th bgcolor="#336699"><font color="white" size="2">ptype</th> 
			<th bgcolor="#336699"><font color="white" size="2">ItemId</th>
			<th bgcolor="#336699"><font color="white" size="2">price</th>
			<th bgcolor="#336699"><font color="white" size="2">Qauntity</th>
			<th bgcolor="#336699"><font color="white" size="2">model</th>
			</tr>';
			$rowcolor=0;
			$intt=mysql_num_rows($sel);
			echo"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp;</font>property are registered";
			echo"<br><br>";
			while($row=mysql_fetch_array($sel)){
print ("<tr>");	
print ("<td><font size='2'>" . $row['ItemName'] . "</td>");	 
print ("<td><font size='2'>" . $row['ptype'] . "</td>");		
print ("<td><font size='2'>" . $row['ItemId'] . "</td>");	
print ("<td><font size='2'>" . $row['price'] . "</td>");	
print ("<td><font size='2'>" . $row['Qauntity'] . "</td>");	
print ("<td><font size='2'>" . $row['model'] . "</td>");	
  print ("</tr>");
  }
print( "</table>");
						
						
						
						?>