             
 <h1 align="center">Edit User Account!</h1>
<table align='center'  style='text-align:justify;border-radius:15px;border:1px solid #000000; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);'>
<tr bgcolor="#ddeeaa">
<th style='height:30px;		font-weight:bold;'><font color='white' size='4'>Emp_ED</th>
<th style='height:30px;		font-weight:bold;'><font color='white' size='4'>Username</th>
<th style='height:30px;		font-weight:bold;'><font color='white' size='4'>Password</th>
<th style='height:30px;		font-weight:bold;'><font color='white' size='4'>Role</th>
<th style='height:30px;		font-weight:bold;'><font color='white' size='4'>Email</th>
<th style='height:30px;		font-weight:bold;'><font color='white' size='4'>Status</th>
<th style='height:30px;		font-weight:bold;'><font color='white' size='4'>Edite</th>
</tr> 
  <?php
  session_start();
 include "../connection/connection.php";
$result = mysql_query("SELECT * FROM Account");
while($row = mysql_fetch_array($result))
  {
?>
<td><?php echo $row['USER_ID'];?></td>
<td><?php echo $row['USER_NAME'];?></td>
<td><?php echo $row['PASSWORD'];?></td>
<td><?php echo $row['ROLE'];?></td>
<td><?php echo $row['EMAIL'];?></td>
<td><?php echo $row['STATUS'];?></td>
						<?php
print("
		<td style='height:30px;'><a href = 'Editeaccount.php?emp_id=".$row['USER_ID']."'>[Edit]</a></td>
		");?>

		</tr>
<?php
  }
print( "</table>");
?>