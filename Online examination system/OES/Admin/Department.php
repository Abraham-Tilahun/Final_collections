<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>

<?php require_once('../Connections/OES.php'); ?>
<?php
mysql_select_db($database_OES, $OES);
$query_Recordsetd = "SELECT * From faculty";
$Recordsetd = mysql_query($query_Recordsetd, $OES) or die(mysql_error());
$row_Recordsetd = mysql_fetch_assoc($Recordsetd);
$totalRows_Recordsetd = mysql_num_rows($Recordsetd);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Department Management</title>
<style type="text/css">
<!--
.style1 {font-size: small}
.style12 {font-size: small; font-weight: bold; }
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
	font-weight: bold;
	color: #000000;
}
.style4 {	font-size: small;
	font-weight: bold;
	color: #FFFFFF;
}
.style5 {color: #FFFFFF}
.style6 {color: #000000}
.style9 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style15 {font-size: 10pt}
-->
</style>
</head>

<body>
<div id="container">
	<?php
		include "Header.php";
		?>
	<div id="content">
            <div id="logout" align="left"><h2>Would you want to <a href="Logout.php">Logout</a></h2></div>
		<div id="left">
                    <h1>Welcome To <u>Department</u> Management</h1>
			
	        <div id="TabbedPanels1" class="TabbedPanels">
              <ul class="TabbedPanelsTabGroup">
                <li class="TabbedPanelsTab style1" tabindex="0"><span class="style1">Create New Department</span></li>
                <li class="TabbedPanelsTab style15" tabindex="0">Display Department</li>
              </ul>
	          <div class="TabbedPanelsContentGroup">
                <div class="TabbedPanelsContent">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><form id="form1" name="form1" method="post" action="InsertDepartment.php">
                          <table width="100%" height="186" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="35">Department ID:</td>
                              <td><span id="sprytextfield1">
                                <label>
                                <input type="text" name="txtID" id="txtID" />
                                </label>
                                <span class="textfieldRequiredMsg"><br>A value is required.</span></span></td>
                            </tr>
                              <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td height="30">Department Name:</td>
                              <td><label><span id="sprytextfield2">
                                <input type="text" name="txtName" id="txtName" />
                                <span class="textfieldRequiredMsg"><br/>A value is required.</span></span></label></td>
                            </tr>
                              <tr>
                                <td>&nbsp;</td>
                                </tr>
                  
                            <tr>
                              <td height="29">Department Faculty:</td>
                              <td><span id="sprytextfield3">
                                <label>
                                    <select name="cmbFaculty" id="cmbFaculty" >

<?php
do {  
?>
                                <option value="<?php echo $row_Recordsetd['faculty_id']?>"><?php echo $row_Recordsetd['faculty_name']?></option>
                                <?php
} while ($row_Recordsetd = mysql_fetch_assoc($Recordsetd));
  $rows = mysql_num_rows($Recordsetd);
  if($rows > 0) {
      mysql_data_seek($Recordsetd, 0);
	  $row_Recordsetd = mysql_fetch_assoc($Recordsetd);
  }
?>
                   
                                    </select>
                                </label>
                              </span></td>
                            </tr>
                            
                              <tr> <td>&nbsp;</td>
                              <td><label>
                                <input type="submit" name="button" id="button" value="Submit" />
                              </label></td>
                            </tr>
</table>
                      </form></td>
                    </tr>
</table>
                </div>
                <div class="TabbedPanelsContent">
                  <table width="100%" border="1" bordercolor="#85A157" >
                    <tr>
                      <th height="32" bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Deptno</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Department Name</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Faculty</strong></div></th>
                       
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style9 style5"><strong>Edit</strong></div></th>
                      <th bgcolor="#85A157" class="style3"><div align="left" class="style4">Delete</div></th>
                    </tr>
                    <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("oes", $con);
// Specify the query to execute
$sql = "select * from Department";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['deptno'];
$DepartmentName=$row['dept_name'];
$DeptFaculty=$row['faculty_name'];

?>
                    <tr>
                      <td bgcolor="#BADFE8" class="style3"><div align="left" class="style9 style6"><strong><?php echo $Id;?></strong></div></td>
                      <td bgcolor="#BADFE8" class="style3"><div align="left" class="style9 style6"><strong><?php echo $DepartmentName;?></strong></div></td>
                      <td bgcolor="#BADFE8" class="style3"><div align="left" class="style9 style6"><strong><?php echo $DeptFaculty;?></strong></div></td>
                      
                      <td bgcolor="#BADFE8" class="style3"><div align="left" class="style9 style6"><strong><a href="EditDepartment.php?ID=<?php echo $Id;?>">Edit</a></strong></div></td>
                      <td bgcolor="#BADFE8" class="style3"><div align="left" class="style9 style6"><strong><a href="DeleteDepartment.php?ID=<?php echo $Id;?>">Delete</a></strong></div></td>
                    </tr>
                    <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                    <tr>
                      <td colspan="7" class="style3"><div align="left" class="style12"> </div></td>
                    </tr>
                    <?php
// Close the connection
mysql_close($con);
?>
                  </table>
                </div>
                <div class="TabbedPanelsContent">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><form name="form1" method="post" action="InsertDepartment.php">
                        <table width="100%" height="94" border="0" cellpadding="0" cellspacing="0">
                        </table>
                      </form></td>
                    </tr>
                  </table>
                </div>
	          </div>
          </div>
          <p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer">Copyright &copy; 2014 AU Online Examination System. </br> All rights reserved.&nbsp;</div>		
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>