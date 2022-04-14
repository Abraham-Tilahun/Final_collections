<?php
if (!isset($_SESSION)) 
{
  session_start();
  
}
?>
<?php require_once('../Connections/OES.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


mysql_select_db($database_OES, $OES);
$query_Recordsetd = "SELECT * FROM department";
$Recordsetd = mysql_query($query_Recordsetd, $OES) or die(mysql_error());
$row_Recordsetd = mysql_fetch_assoc($Recordsetd);
$totalRows_Recordsetd = mysql_num_rows($Recordsetd);

mysql_select_db($database_OES, $OES);
$query_Recordset1 = "SELECT * FROM exam_category";
$Recordset1 = mysql_query($query_Recordset1, $OES) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_OES, $OES);
$query_Recordset2 = "SELECT * FROM course";
$Recordset2 = mysql_query($query_Recordset2, $OES) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>AUOES-Exam Committee Question Management</title>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: small;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style3 {font-size: small}
-->
</style>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
			<h1>Welcome <?php // echo $_SESSION['Name'];?></h1>
			
	        <div id="TabbedPanels1" class="TabbedPanels">
	          <ul class="TabbedPanelsTabGroup">
	            
	            <li class="TabbedPanelsTab style2 style3" tabindex="0">Display Questions</li>
              </ul>
	          <div class="TabbedPanelsContentGroup">
	            
	            <div class="TabbedPanelsContent">
                 <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("oes", $con);
// Specify the query to execute
$sql = "SELECT distinct question_page.question_id,question_page.exam_id, question_page.course_name,question_page.semester, question_page.question, question_page.Option1, question_page.Option2, question_page.Option3, question_page.Option4, question_page.Answer, course.course_name, exam_category.exam_name
FROM question_page, exam_category, course
WHERE question_page.exam_id=exam_category.exam_id AND question_page.course_name=course.course_name";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
//$row = mysql_fetch_array($result)
while($row = mysql_fetch_array($result))
{
$Id=$row['question_id'];
$Quiz=$row['exam_id'];
$Sem=$row['semester'];
$Subject=$row['course_name'];
$Question=$row['question'];
$OptionA=$row['Option1'];
$OptionB=$row['Option2'];
$OptionC=$row['Option3'];
$OptionD=$row['Option4'];
$Answer=$row['Answer'];

?>
	              <table width="100%" height="184" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><strong>Question No:<?php echo $Id;?></strong></td>
                      <td><strong>Exam_Name:<?php echo $Quiz;?></strong></td>
                    </tr>
                    <tr>
                      <td><strong>Semester:<?php echo $Sem;?></strong></td>
                      <td><strong>Course Name:<?php echo $Subject;?></strong></td>
                    </tr>
                    <tr>
                      <td colspan="2"><strong>Question:<?php echo $Question;?></strong></td>
                    </tr>
                    <tr>
                      <td>(A)<?php echo $OptionA;?></td>
                      <td>(B)<?php echo $OptionB;?></td>
                    </tr>
                    <tr>
                      <td>(C)<?php echo $OptionC;?></td>
                      <td>(D)<?php echo $OptionD;?></td>
                    </tr>
                    <tr>
                      <td colspan="2"><strong>Right Answer:<?php echo $Answer;?></strong></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      </tr>
                          
                    <tr>
                      <td colspan="2"><hr/></td>
                    </tr>
                         
                  </table>
                        
                           <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
// Close the connection
mysql_close($con);
?>
	            </div>
              </div>
          </div>
          <p>&nbsp;</p>
	<table><tr>
                            <td height="29"><strong>Comment:</strong></td>
                            <td><span id="sprytextarea1">
                              <label>
                              <textarea name="check" id="check" cols="45" rows="3"></textarea>
                              </label>
                            <span class="textareaRequiredMsg">Please write your comment.</span></span></td>
                          </tr>
                            <tr><td><label>
                                        <input type="submit" name="button" id="button" value="Submit" onclick="malto:" />
                            </label></td></tr>
                        </table> 
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	<div id="footer">Copyright &copy; 2014 AU Online Examination System. </br> All rights reserved.&nbsp;</div>		
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
//-->
</script>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
//mysql_free_result($Recordsetd);
?>