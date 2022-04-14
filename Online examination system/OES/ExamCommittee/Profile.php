<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>AU OES-ExamCommittee Profile Page</title>
</head>

<body>
<div id="container">
	<?php
		include "Header.php";
		?>
	<div id="content">
		<div id="left">
			<h1>Hi!  <?php echo $_SESSION['Name'];?> Welcome!</h1>
			
	<p>&nbsp;</p>
	<?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("oes", $con);
// Specify the query to execute
$sql = "select * from exam_committee where EC_ID ='".$ID."'  ";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
$row = mysql_fetch_array($result)
?>
                <table width="80%" height="183" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><strong> ID:</strong></td>
                    <td><?php echo $row['EC_ID'];?></td>
                  </tr>
                  <tr>
                    <td><strong> Name:</strong></td>
                    <td><?php echo $row['EC_Name'];?></td>
                  </tr> 
                  <tr>
                    <td><strong>Department:</strong></td>
                    <td><?php echo $row['dept_name'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Email :</strong></td>
                    <td><?php echo $row['email'];?></td>
                  </tr>
                  <tr>
                    <td><strong>username :</strong></td>
                    <td><?php echo $row['username'];?></td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td><a href="EditProfile.php?ECID=<?php echo $row['EC_ID']; ?>">Edit Profile</a></td>
                  </tr>
                </table>
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer">Copyright &copy; 2014 AU Online Examination System. </br> All rights reserved.&nbsp;</div>	
</div>
</body>
</html>