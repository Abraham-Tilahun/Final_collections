<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Edit Student</title>
<style type="text/css">
<!--
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
-->
</style>

<style type="text/css">
<!--
.style11 {color: #000000}
-->
</style>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
	<?php
		include "Header.php";
		?>
	<div id="content">
		<div id="left">
			<table width="100%" height="209" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="33" bgcolor="#E3E5DB"><span class="style10 style11">Edit Student Information</span></td>
              </tr>
              <tr>
                <td><?php
$Id=$_GET['Stud_ID'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("oes", $con);
// Specify the query to execute
$sql = "select * from student where Stud_ID='".$Id."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['Stud_ID'];
//$RollNumber=$row['RollNumber'];
$Name=$row['Stud_Name'];
$StudDept=$row['dept_name'];
$StudYear=$row['year'];
$Semester=$row['semister'];
$StudSex=$row['Stud_Sex'];
$Email=$row['email'];
$UserName =$row['username'];
$Password=$row['password'];
$Status=$row['Status'];
}
?>
                  <form method="post" action="UpdateStudent.php?Id=<?php echo $Id;?>">
                    <table width="100%" border="0">
                      <tr>
                        <td height="32"><span class="style8">Student Id</span></td>
                        <td><?php echo $Id;?></td>
                      </tr>
                                           
                      <tr>
                        <td height="31"><strong>Name:</strong></td>
                        <td><?php echo $Name;?></td>
                      </tr>
                   
                          <tr>
                        <td height="31"><strong>Department:</strong></td>
                        <td><?php echo $StudDept;?></td>
                      </tr>
                        <tr>
                        <td height="31"><strong>Year:</strong></td>
                        <td><?php echo $StudYear;?></td>
                      </tr>
                      <tr>
                        <td height="31"><strong>Semester:</strong></td>
                        <td><?php echo $Semester;?></td>
                      </tr>
                      <tr>
                        <td height="31"><strong>Sex:</strong></td>
                        <td><?php echo $StudSex;?></td>
                      </tr>
                      <tr>
                        <td height="33"><strong>Email:</strong></td>
                        <td><?php echo $Email;?></td>
                      </tr>
                        
                        
                      <tr>
                        <td height="33"><strong>Status:</strong></td>
                        <td><?php echo $Status;?></td>
                      </tr>
                        <tr>
                        <td height="34"><strong>Change Semester :</strong></td>
                        <td><label>
                          <select name="cmbSem" id="cmbSem">
                            <option>1</option>
                            <option>2</option>
                          </select>
                        </label></td>
                      </tr>
                      <tr>
                        <td height="34"><strong>Change Status:</strong></td>
                        <td><label>
                          <select name="cmbStatus" id="cmbStatus">
                            <option>Active</option>
                            <option>InActive</option>
                          </select>
                        </label></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Update Record" /></td>
                      </tr>
</table>
                  </form>
                    <?php
// Close the connection
mysql_close($con);
?></td>
              </tr>
		  </table>
			<h1>&nbsp;</h1>
			
	        <p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer">Copyright &copy 2014 Online Quiz.  All rights reserved.</div>	
</div>


</body>
</html>