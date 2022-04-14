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

#content
{
	background-color: white;
	height: 600px;
	margin-left: 18%;
	margin-top: 7px;
overflow-x: hidden;
overflow-y: hidden;
width:80%;
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
include("../ssd/ssdmenu.php");
		?>
	</div>

				<div id="leftside">
					<div id="applyside">
						<?php
							include("../ssd/ssdsidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="content">
		<?php
				$per_page=12;

if (isset($_GET["page"])) {

$page = $_GET["page"];

}

else {

$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;
$result=mysql_query("select * from student  LIMIT $start_from, $per_page");  
if(mysql_num_rows($result)>0)
{
	?>
<table class="data-table" style="margin-left: 1%;margin-right: 1%;margin-top: 1%;">
		<caption class="title">Students Detail Data</caption>
		<thead style="height: 20px;">
			<tr>
				<th>ID_Number</th>
				<th>First_Name</th>
				<th>Last_Name</th>
				<th>Sex</th>
				<th>Age</th>
				<th>Fuculity</th>
				<th>Department</th>
				<th>Year</th>
				<th>CGPA</th>
				<th>Program</th>
				<th>Campus</th>
			</tr>
		</thead>
		<?php
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
	print "<font color=red><b>No New Student Data is found</b></font>";
	?>
						<?php
$query = "select * from student ";
  $result = mysql_query($query);

// Count the total records
$total_records = mysql_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<center> <h3><a href='../ssd/viewstudentdata.php?page=1'>".'Privouse Page'."</a> ";
for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='../ssd/viewstudentdata.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<a href='../ssd/viewstudentdata.php?page=$total_pages'>".'Next Page'."</a></h3></center> ";
?>
		    </div>
		    
		<div id="footer">
			<?php
			include("../ssd/footer.php");
			?>
			<a name="bottom"></a>
	</div>
<?php
	}
	else
	{
	?>	<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../home.php');
 </script>
   <?php
	}
   ?>
	</div>
</body>
</html>
