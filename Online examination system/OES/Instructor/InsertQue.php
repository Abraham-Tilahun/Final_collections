
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
        $ID=$_POST['quetionID'];       
        $cmbCourse=$_POST['cmbCourse'];
	$cmbExam=$_POST['cmbExam'];
        
	$cmbSem=$_POST['cmbSem'];
	//$cmbQtype=$_POST['cmbQtype'];
	$txtQuestion=$_POST['txtQue'];
	$txtA=$_POST['txtA'];
	$txtB=$_POST['txtB'];
	$txtC=$_POST['txtC'];
	$txtD=$_POST['txtD'];
	$txtAns=$_POST['txtAns'];
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("oes", $con);
	// Specify the query to Insert Record
	$sql = "insert into question_page	(question_id,course_name,exam_id,semister,question,Option1,Option2,Option3,Option4,Answer) 	
                                values('".$ID."','".$cmbCourse."','".$cmbExam."','".$cmbSem."','".$txtQuestion."','".$txtA."','".$txtB."','".$txtC."','".$txtD."','".$txtAns."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Question Inserted Succesfully");window.location=\'Question.php\';</script>';

?>
</body>
</html>
