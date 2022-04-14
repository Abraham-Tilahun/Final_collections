<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
include("../Database/connection.php");
?>
<html>
<link  href="../css/allcss.css" rel="stylesheet" type="text/css"/>
<head>
<title>Online Stuidenet Union Voting System</title>
<style>
#calander
{
	margin-top: 0px;
	padding-top: 0px;
	width: auto;
	height: 190px;
}
	#login
{
	margin-top: 0px;
	background-color: #718076;
	height: 250px;
	width: auto;
}
#content
{
	background-color: white;
	height: 600px;
	margin-left: 18%;
	margin-top: 7px;
    overflow-x: scroll;
	overflow-y: scroll;
	width:80%;
}
#rightside
{
	width: 18%;
	height: 600px;
	float: left;
	margin-left: 0px;
	margin-top: 5px;
	margin-right: 10px;
}
		.myButton {
	border:1px solid #b2b8ad;
	cursor:pointer;
	color:#fff;
	font-family:Times New Roman;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #0d100a;
	float: none;
	width: 130px;
	height: 50px;
	margin-left: -50px;
	background-color: #96a0a0;
     cursor: pointer;
	padding: 2px;
    font-size: 18px;
	 border-radius: 150px;;
	  
}
.myButton:hover {
	
	background-color:#9ba892;
}
.myButton:active {
	position:relative;
	top:1px;
	background-color: #2d8cd2;
}
</style>
</head>
<body>
<div id="container">
		<div id="header">
		<?php
		include("../header.php");
		?>
		</div>
		<div id="menu">
		<?php
include("../Registrar/registrarmenu.php");
		?>
	</div>

					<div id="rightside">
					<div id="login">
					<?php
					echo "<b>";
						echo "<img src='".$_SESSION['sphoto']."' width='220' height='230'/><br/>";
						echo "Registrar:".$_SESSION['username'];
						echo "</b>";
						?>
					</div> 
					<div id="calander">
					<b style="color: #12d7ed;">Calander</b>
						<?php
						include("../calander.php");
						?>
					</div>    
				</div>
				<div id="content">
<form method="post" enctype="multipart/form-data">
<fieldset style="border: none;">
<div style="border: 1px solid #fff;height: 140px;background-color: #dfdfdf;font-size: 25px;width: 400pk;">
<legend style="color: #006699;margin-left: 150px;font-size: 30px;">Student Data Submit Page</legend>
	 <label style="color: #006699;">Select Student Data:</label> 
	  <input type="file" name="file" class="l" required="true" />
	 	<input type="submit" name="submit" value="Send" class="myButton"/>
	 	</div>
	 <?php
$con=mysqli_connect("localhost","root","","uogosuvs");
if(isset($_POST["submit"]))
{
	if($_FILES['file']['name'])
	{
		$filename=explode(".",$_FILES['file']['name']);
		if($filename[1]=='csv')
		{
			$handle=fopen($_FILES['file']['tmp_name'],"r");
			while($data=fgetcsv($handle))
			{
					$sid=mysqli_real_escape_string($con,$data[0]);
					$fname=mysqli_real_escape_string($con,$data[1]);
					$lname=mysqli_real_escape_string($con,$data[2]);
					$gender=mysqli_real_escape_string($con,$data[3]);
					$age=mysqli_real_escape_string($con,$data[4]);
					$collage=mysqli_real_escape_string($con,$data[5]);
					$dept=mysqli_real_escape_string($con,$data[6]);
					$year=mysqli_real_escape_string($con,$data[7]);
					$cgpa=mysqli_real_escape_string($con,$data[8]);
					$program=mysqli_real_escape_string($con,$data[9]);
					$campus=mysqli_real_escape_string($con,$data[10]);
				$sql="insert into student values('$sid','$fname','$lname','$gender','$age','$collage','$dept','$year','$cgpa','$program','$campus')";
				mysqli_query($con,$sql);
			}
          	?>
          <table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
		<caption class="title">Submited Students Detail Data</caption>
		<thead style="height: 20px;">
			<tr>
				<th>ID_Number</th>
				<th>First_Name</th>
				<th>Last_Name</th>
				<th>Sex</th>
				<th>Age</th>
				<th>Faculity</th>
				<th>Department</th>
				<th>Year</th>
				<th>CGPA</th>
				<th>Program</th>
				<th>campus</th>
			</tr>
		</thead>
		<?php
$result=mysql_query("select * from student");  
		while($row=mysql_fetch_array($result))
				{
			echo '<tr>
					<td>'.$row['sid'].'</td>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
					<td>'.$row['gender'].'</td>
					<td>'.$row['age'].'</td>
					<td>'.$row['collage'].'</td>
					<td>'.$row['department'].'</td>
					<td>'.$row['year'].'</td>
					<td>'.$row['cgpa'].'</td>
					<td>'.$row['program'].'</td>
                     <td>'.$row['campus'].'</td>
				</tr>';
		}?>
	</table>
	<?php
}
else
		print "<font color=red>file is not csv type</font>";
}
}
?>
	 </fieldset>
</form>
		    </div>
		<div id="footer">
			<?php
			include("../Registrar/footer.php");
			?>
			 <a name="bottom"></a>
	</div>
	<?php
	}
	else
	{
	?>	
	<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../home.php');
 </script>
 <?php
	}
   ?>
	</div>
</body>
</html>