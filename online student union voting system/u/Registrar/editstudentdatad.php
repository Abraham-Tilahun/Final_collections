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
		<?Php
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

		

	<?php
}
else
		print "<font color=red>file is not csv type</font>";
}
}
		?>
		  <table class="data-table" style=";margin-right: 5%;;margin-top: 15px;">
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
				<th>edit</th>
			</tr>
		</thead>
		<?php
				$per_page=10;

if (isset($_GET["page"])) {

$page = $_GET["page"];

}

else {

$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;
$result=mysql_query("select * from student LIMIT $start_from, $per_page");  
		while($row=mysql_fetch_array($result))
				{
			echo '<tr>';
					echo'<td>'.$row['sid'].'</td>';
					echo'<td>'.$row['fname'].'</td>';
					echo'<td>'.$row['lname'].'</td>';
					echo'<td>'.$row['gender'].'</td>';
					echo'<td>'.$row['age'].'</td>';
					echo'<td>'.$row['collage'].'</td>';
					echo'<td>'.$row['department'].'</td>';
					echo'<td>'.$row['year'].'</td>';
					echo'<td>'.$row['cgpa'].'</td>';
					echo'<td>'.$row['program'].'</td>';
                      echo   '<td>'.$row['campus'].'</td>';
					?><?php echo '<td><a href="updatestudentdata.php?sid=';?><?php echo $row['sid'];?> <?php echo '">Edit</a></td>
				</tr>';
		}?>

		
							
		
	</table>


	 </fieldset>
</form>
	<?php
$query = "select * from student ";
  $result = mysql_query($query);

// Count the total records
$total_records = mysql_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<center> <h3><a href='../Registerar/editstudentdatad.php?page=1'>".'Privouse Page'."</a> ";
for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='../Registrar/editstudentdatad.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<a href='../Registrar/editstudentdatad.php?page=$total_pages'>".'Next Page'."</a></h3></center> ";
				?>
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