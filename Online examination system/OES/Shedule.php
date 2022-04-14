
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
    #schedule{
        float:left;
	width:550px;
	margin-left:10px;
	padding: 0px 10px 30px 0px;
	display:inline;
    }
    h1{
        color:#CC33AA;
	font-size:20px;
	margin: 20px 0px 20px 0px;
    }
</style>
<title>AUOES Schedule for guests</title>
</head>

<body>
<div id="container">
	<?php
		include "Header.php";
		?>
	<div id="content">
		
		<?php
		include "left_head.php";
		?>
		
		<div id="schedule">
                    <div id="login" align="left"><h2>Would you want to <a href="index.php">Login</a></h2></div>
                    <img style="margin:10px 2px 2px 10px;float:left;" height="40%" width="40%" src="images/schedule.jpg" alt="OES"/>
                        <h1>Welcome to Ambo University Online Examination System </h1>
			
                        <hr/><h2>This is Schedule page of AUOES</h2>
                        <h3><strong>Exam Schedule Available are: </strong></h3>
            </br> </p>
                        <div class="TabbedPanelsContent">
	              <table width="90%" border="5" bordercolor="#85A157" >
                    <tr>
                      <th height="32" bgcolor="#85A157" class="style13"><div align="left" class="style9 style5"><strong>Schedule_Id</strong></div></th>
                      <th bgcolor="#85A157" class="style13"><div align="left" class="style9 style5"><strong>Exam Type</strong></div></th>
                      <th bgcolor="#85A157" class="style13"><div align="left" class="style9 style5"><strong>Semester</strong></div></th>
                      <th height="32" bgcolor="#85A157" class="style13"><div align="left" class="style9 style5"><strong>Course</strong></div></th>
                      <th bgcolor="#85A157" class="style13"><div align="left" class="style9 style5"><strong>Date</strong></div></th>
                       <th bgcolor="#85A157" class="style13"><div align="left" class="style9 style5"><strong>Time</strong></div></th>
                      <!--<th bgcolor="#85A157" class="style13"><div align="left" class="style4">Delete</div></th>-->
                    </tr>
                    <?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("oes", $con);
// Specify the query to execute
$sql = "SELECT * FROM schedule ";
// Execute query
$result = mysql_query($sql,$con);
//$records = mysql_num_rows($result);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['schedule_id'];
$Exam=$row['exam_name'];
$Sem=$row['semister'];
$Course=$row['course_name'];
$Date=$row['exam_date'];
$Time=$row['exam_time'];


?>
                    <tr>
                      <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $Id;?></strong></div></td>
                      <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $Exam;?></strong></div></td>
                      <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $Sem;?></strong></div></td>
                      <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $Course;?></strong></div></td>
                      <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $Date;?></strong></div></td>
                        <td class="style13"><div align="left" class="style9 style6"><strong><?php echo $Time;?></strong></div></td>
                      <!--<td class="style13"><div align="left" class="style9 style6"><strong><a href="DeleteSchedule.php?schedule_id=<?php echo $Id;?>">Delete</a></strong></div></td>-->
                    </tr>
                    <?php
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
                    <tr>
                      <td colspan="7" class="style13"><div align="left" class="style12"> </div></td>
                    </tr>
                    <?php
// Close the connection
mysql_close($con);
?>
                  </table>
	            </div>
	
    <h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
    <div id="footer">Copyright &copy; 2014 AU Online Examination System. </br> All rights reserved.&nbsp;</div>	
</div>
</body>
</html>



