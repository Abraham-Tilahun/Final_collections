<?php require_once('../Connections/OES.php'); ?>
<?php
//Department requirement
mysql_select_db($database_OES, $OES);
$query_Recordsetd = "SELECT * From department";
$Recordsetd = mysql_query($query_Recordsetd, $OES) or die(mysql_error());
$row_Recordsetd = mysql_fetch_assoc($Recordsetd);
$totalRows_Recordsetd = mysql_num_rows($Recordsetd);
?>

<!--Instructor Requist-->
<?php
mysql_select_db($database_OES, $OES);
$query_Recordseti = "SELECT * From instructor";
$Recordseti = mysql_query($query_Recordseti, $OES) or die(mysql_error());
$row_Recordseti = mysql_fetch_assoc($Recordseti);
$totalRows_Recordseti = mysql_num_rows($Recordseti);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>QUIZ Management</title>
<style type="text/css">
<!--
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
-->
</style>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style11 {color: #000000}
-->
</style>
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
                <td height="33" bgcolor="#E3E5DB"><span class="style10 style11">Edit Subject Information</span></td>
              </tr>
              <tr>
                <td><?php
$Id=$_GET['CourseId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("oes", $con);
// Specify the query to execute
$sql = "select * from course where course_id='".$Id."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['course_id'];
$Name=$row['course_name'];
$Credit=$row['credit_hr'];
$Sem=$row['semister'];
$Dept=$row['dept_name'];
$Instrutor=$row['Inst_Name'];
}
?>
                    <form method="post" action="UpdateCourse.php">
                    <table width="100%" border="0">
                      <tr>
                        <td height="32"><span class="style8">Course Id</span></td>
                        <td><span id="sprytextfield1">
                          <label>
                          <input name="txtDeptID" type="text" id="txtDeptID" value="<?php echo $Id;?>" />
                          </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td height="36"><span class="style8">Course Name:</span></td>
                        <td><span id="sprytextfield2">
                          <label>
                          <input name="txtCourseName" type="text" id="txtCourseName" value="<?php echo $Name;?>" />
                          </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                           <tr>
                        <td height="36"><span class="style8">Credit Hour:</span></td>
                        <td><span id="sprytextfield4">
                          <label>
                          <input name="txtCredit" type="text" id="txtCredit" value="<?php echo $Credit;?>" />
                          </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                      </tr>
                      <tr>
                        <td height="36"><span class="style8">Semester:</span></td>
                        <td><span id="sprytextfield3">
                          <label></label>
                          <span class="textfieldRequiredMsg">A value is required.</span>
                          <label>
                          <select name="cmbSem" id="cmbSem">
                            <option>1</option>
                            <option>2</option>
                          
                          </select>
                          </label>
                        </span></td>
                      </tr>
                        
                         <tr>
                        <td height="35">Department:</td>
                        <td><select name="cmbDept" id="cmbDept">
                          
<?php
do {  
?>
                                <option value="<?php echo $row_Recordsetd['deptno']?>"><?php echo $row_Recordsetd['dept_name']?></option>
                                <?php
} while ($row_Recordsetd = mysql_fetch_assoc($Recordsetd));
  $rows = mysql_num_rows($Recordsetd);
  if($rows > 0) {
      mysql_data_seek($Recordsetd, 0);
	  $row_Recordsetd = mysql_fetch_assoc($Recordsetd);
  }
?>
                          
                        </select></td>
                      </tr>
                              <!--instructor-->
                               <tr>
                        <td height="35">Instructor:</td>
                        <td><select name="cmbInst" id="cmbInst">
                          
<?php
do {  
?>
                                <option value="<?php echo $row_Recordseti['Inst_ID']?>"><?php echo $row_Recordseti['Inst_Name']?></option>
                                <?php
} while ($row_Recordseti = mysql_fetch_assoc($Recordseti));
  $rows = mysql_num_rows($Recordseti);
  if($rows > 0) {
      mysql_data_seek($Recordseti, 0);
	  $row_Recordseti = mysql_fetch_assoc($Recordseti);
  }
?>
                          
                        </select></td>
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
	
	  <div id="footer">Copyright &copy; 2014 AU Online Examination System. <br/> All rights reserved.&nbsp;</div>
</div>
<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>