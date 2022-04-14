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
	overflow-x: scroll;
	overflow-y: scroll;
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
		include("../Admin/Adminmenu.php");
				?>
			</div>

						<div id="leftside">
							<div id="applyside">
								<?php
									include("../Admin/Adminsidemenu.php");
							   ?>	
							</div>    
						</div>
				<div id="content">
				<a name="bottom"></a>
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
$result=mysqli_query($conn,"select * from requesttable WHERE requesttype='Candidate' LIMIT $start_from, $per_page");  
if(mysqli_num_rows($result)>0)
{
	?>
	<table class="data-table" style="margin-left: 1%;margin-right: 1%;margin-top: 1%;">
		<caption class="title">Cadidates Detail Information</caption>
		<thead style="height: 20px;">
			<tr>
			    <th>N<u>O</u></th>
				<th>ID_Number</th>
				<th>First_Name</th>
				<th>Last_Name</th>
				<th>Sex</th>
				<th>Age</th>
				<th>faculity</th>
				<th>Department</th>
				<th>Year</th>
				<th>CGPA</th>
			</tr>
		</thead>
		<?php
		$nuber=1;
		while($row=mysqli_fetch_array($result))
				{
					
					echo '<tr>
					<td>'.$nuber.'</td>
					<td>'.$row['student_ID'].'</td>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
					<td>'.$row['sex'].'</td>
					<td>'.$row['age'].'</td>
					<td>'.$row['faculity'].'</td>
					<td>'.$row['deparment'].'</td>
					<td>'.$row['year'].'</td>
					<td>'.$row['cgpa'].'</td>
					
				</tr>';
				$nuber++;
		}
		
		?>
	</table>
	<?php
	}
	else
	print "<font color=red><b>No New Student Data is found</b></font>";
	?>
		<?php
	$query = "select * from requesttable  WHERE requesttype='Candidate'";
  $result = mysqli_query($conn,$query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<center> <h3><a href='../Admin/viewcandidate.php?page=1'>".'Privouse Page'."</a> ";
for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='../Admin/viewcandidate.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<a href='../Admin/viewcandidate.php?page=$total_pages'>".'Next Page'."</a></h3></center> ";
				?>
		    </div>
		    
		<div id="footer">
			<?php
			include("../Admin/footer.php");
			?>
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
