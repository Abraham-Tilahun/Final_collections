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
<title>AUOES Student Profile</title>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
	<?php
		include "Header.php";
		?>
    <?php
//		include "left_head.php";
		?>
	<div id="content">
		<div id="left">
			<h1>Welcome <?php echo $_SESSION['Name'];?></h1>
			<?php
$Id=$_GET['InstId'];
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("oes", $con);
// Specify the query to execute
$sql = "select * from instructor where instructor.Inst_ID='".$Id."'";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['Inst_ID'];
$Department=$row['dept_name'];
$Name=$row['Inst_Name'];

$Email=$row['email'];

$UserName =$row['username'];
$Password=$row['password'];
$Status=$row['Status'];
}
?>
          <form method="post" action="UpdateProfile.php?Id=<?php echo $Id;?>">
                      <table width="100%" border="0">
                        <tr>
                          <td height="32"><span class="style8"><strong>Instructor Id</strong></span></td>
                          <td><?php echo $Id;?></td>
                        </tr>
                        <tr>
                          <td height="36"><span class="style8"><strong> Instructor Name  :</strong></span></td>
                          <td><?php echo $Name;?></td>
                        </tr>
                           
                          
                        
                           <tr>
                          <td height="36"><span class="style8"><strong>   Email  :</strong></span></td>
                          <td><?php echo $Email;?></td>
                        </tr>
                          <tr>
                          <td height="36"><span class="style8"><strong>   Status  :</strong></span></td>
                          <td><?php echo $Status;?></td>
                        </tr>
                          
                       
                        
                        <tr>
                          <td height="28"><strong>Change username:</strong></td>
                          <td><span id="sprytextfield4">
                            <label>
                            <input type="text" name="txtUser" id="txtUser"  />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td height="28"><strong>Change Password:</strong></td>
                          <td><span id="sprytextfield5">
                            <label>
                            <input type="password" name="txtPass" id="txtPass"  />
                            </label>
                          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                        </tr>
                        <tr>
                          <td height="28"></td>
                          <td><label>
                            <input type="submit" name="button" id="button" value="Update Profile" />
                          </label></td>
                        </tr>
                      </table>
          </form>
                  <?php
// Close the connection
mysql_close($con);
?></td>
              </tr>
            </table>
	<p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer">Copyright &copy; 2014 AU Online Examination System.<br/> All rights reserved.&nbsp;</div>	
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>