<?php
if (isset($_SESSION))
{
  session_start();
  
}
?>
<?php require_once('../Connections/OES.php'); ?>
<?php
mysql_select_db($database_OES, $OES);
$query_Recordsetd = "SELECT * From department";
$Recordsetd = mysql_query($query_Recordsetd, $OES) or die(mysql_error());
$row_Recordsetd = mysql_fetch_assoc($Recordsetd);
$totalRows_Recordsetd = mysql_num_rows($Recordsetd);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>AUOES Exam Committee Management</title>
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
                <td height="33" bgcolor="#E3E5DB"><span class="style10 style11">Edit Instructor Information</span></td>
              </tr>
              <tr>
                <td><?php
$Id=$_GET['Id'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("oes", $con);
// Specify the query to execute
$sql = "select * from instructor where Inst_ID='".$Id."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['Inst_ID'];
$Name=$row['Inst_Name'];
$Email=$row['email'];
$UserName=$row['username'];
$Password=$row['password'];
$Department=$row['dept_name'];
$Status=$row['Status'];


}
?>
                    <form method="post" action="UpdateInstructor.php">
                      <table width="100%" border="0">
                        <tr>
                          <td height="32"><span class="style8">Exam committee Id</span></td>
                          <td><span id="sprytextfield1">
                            <label>
                            <input name="instID" type="text" id="instID" value="<?php echo $Id;?>" />
                            </label>
                            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                          <tr>
                          <td height="32"><span class="style8">Exam committee Name</span></td>
                          <td><span id="sprytextfield2">
                            <label>
                            <input name="instName" type="text" id="instName"  />
                            </label>
                            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td height="36"><span class="style8">Username:</span></td>
                          <td><span id="sprytextfield3">
                            <label>
                            <input name="instUserName" type="text" id="instUserName"  />
                            </label>
                            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td height="36"><span class="style8">Password:</span></td>
                          <td><span id="sprytextfield4">
                            <label>
                            <input name="txtPass" type="password" id="txtPass"  />
                            </label>
                            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                          <tr><td><strong>Status:  </strong></td>
                              <td><label>
                              <select name="cmbStatus" id="cmbStatus">
                                  <option>Active</option>
                                  <option>Inactive</option>
                                    </select>
                                  </label></td></tr>
                        <tr>
                          <td></td>
                          <td><input type="submit" name="submit" value="Update Record" /></td>
                        </tr>
</table>
                    </form>
                    <?php
// Close the connection
mysql_close($con);
?>
                    <form method="post" action="UpdateInstructor.php">
                      <table width="100%" border="0">
                      </table>
                    </form></td>
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
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
//-->
</script>
</body>
</html>