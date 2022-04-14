<?php
include"../connection/connection.php";          
		  $sql = "SELECT * FROM  schedule_backup ";
            if (isset($_POST['search'])) {
             $search_term = mysql_real_escape_string($_POST['search_box']);
             $sql .= "WHERE BORD_NUMBER = '{$search_term}' ";
            }
            $query = mysql_query($sql) or die(mysql_error());
            ?>
            <form name="search_form" method="POST" action="filter.php">
			<div align="right">
	 Search: <input type="text" name="search_box" value=" "/>
            <input type="submit" name="search" value="Search ...">
	<input type="button" name="" value="Print Report" onclick="Clickheretoprint()">
</div>
<div align="center" style="background: white; border: 1px solid black;" id="print_content">
<br><br>
<label style="color: black; font-size: 24px;">Operator Schedule </label>
            </form>
            <table width="70%" cellpadding="5" cellspace="5">
            <tr>
                <td><strong>Driver Name</strong></td>
                <td><strong>Assictance Name</strong></td>
                <td><strong>Bord Number</strong></td>
                <td><strong>Oprator ID</strong></td>
				<td><strong>From</strong></td>
                <td><strong>To</strong></td>
				<td><strong>Date</strong></td>
                <td><strong>Level</strong></td>
				<td><strong>Distance</strong></td>
                <td><strong>Status</strong></td>
            </tr>
            <?php while ($row = mysql_fetch_array($query)) {?>
            <tr>
                <td><?php echo $row['DEIVER_NAME'];?></td>
                <td><?php echo $row['ASISTANCE_NAME'];?></td>
                <td><?php echo $row['BORD_NUMBER'];?></td>
                <td><?php echo $row['REQ_ID'];?></td>
				<td><?php echo $row['INITIAL_PLACE'];?></td>
                <td><?php echo $row['DESTINATION_PLACE'];?></td>
                <td><?php echo $row['PREPARED_DATE'];?></td>
				<td><?php echo $row['LEVEL'];?></td>
                <td><?php echo $row['DISTANCE'];?></td>
                <td><?php echo $row['STATUS'];?></td>
            </tr>
            <?php 
			} 
			?>
            </table>
			<div align="center" style="font-size: 20px;">
	<div>Generate By: _____________</div>
	<div>Signed By: _____________</div>
</div>
			<script language="javascript">
	function Clickheretoprint()
		{ 
		    var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
		      disp_setting+="scrollbars=yes,width=600, height=350, left=320, top=250"; 
		    var content_vlue = document.getElementById("print_content").innerHTML; 
		  
		    var docprint=window.open("","",disp_setting); 
		    docprint.document.open(); 
		    docprint.document.write('<html><head><title>Schedule Report</title>'); 
		    docprint.document.write('</head><body onLoad="self.print()" style="width: 600px; font-size:12px; font-family:arial;">');          
		    docprint.document.write(content_vlue);          
		    docprint.document.write('</body></html>'); 
		    docprint.document.close(); 
		    docprint.focus(); 
		}
</script>