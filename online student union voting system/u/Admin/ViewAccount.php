<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
include("../Database/connection.php");
?>
<html>
<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
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
		
	.data-table tbody td img{
			width: 100px;
			height: 20px;
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
$result=mysqli_query($conn,"select * from user  LIMIT $start_from, $per_page");  
$total=mysqli_num_rows($result);
if($total>0)
{
	?>
	<table class="data-table" style="margin-left: 15px;margin-right: 15px;margin-top: 15px;">
		<caption class="title"> User Information Detail&nbsp;&nbsp;[<?php	echo "Total Records=(".$total.")"; ?>]</caption>
		<thead>
			<tr>
				<th>Userid</th>
				<th>First_Name</th>
				<th>Last_Name</th>
				<th>User_Name</th>
				<th>Role</th>
				<th>Status</th>
				<th>Profile_Picture</th>
				<th>Block</th>
			</tr>
		</thead>
	<?php
		while($row=mysqli_fetch_array($result))
				{
			echo '<tr>
					<td>'.$row['userid'].'</td>
					<td>'.$row['fname'].'</td>
					<td>'.$row['lname'].'</td>
					<td>'.$row['username'].'</td>
					<td>'.$row['role'].'</td>
					<td>'.$row['status'].'</td>
				<td><img src=' . $row['photo'] .'></td>';
					if($row['status']==1)
					{
						
					?>
<td><a href="ViewAccount.php?Block=<?php echo $row['username'];?>" onclick="return confirm(' Really you want to block (<?php echo $row['role']?>)');"style="text-decoration: none;height: 10px;background-color: #29d6bc;width: 100px;color: #fff4f4;width: 90px;"><i style="background-color:red;" class="fa fa-times"></i>Deactivate</a></td>
					<?php
				'</tr>';
				}
				else
				{
									?>
<td><a href="ViewAccount.php?Unblock=<?php echo $row['username'];?>" onclick="return confirm(' Really you want to unblock (<?php echo $row['role']?>)');" style="text-decoration: none;height: 10px;background-color: #29d6bc;width: 100px;color: #fff4f4;width: 90px;"><i style="background-color:green;" class="fa fa-check"></i>Activate</a></td>
					<?php	
				}
				}
		 if(isset($_GET['Block']))
	                {
		             $block=$_GET['Block'];
					 mysql_query("UPDATE user SET status='0' where username='$block'"); 
        
         
		}
				 if(isset($_GET['Unblock']))
	                {
		             $block=$_GET['Unblock'];
					 mysql_query("UPDATE user SET status='1' where username='$block'"); 
        
         
		}
		}
		?>
	</table>
					<?php
$query = "select * from user ";
  $result = mysqli_query($conn,$query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<center> <h3><a href='../Admin/ViewAccount.php?page=1'>".'Privouse Page'."</a> ";
for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='../Admin/ViewAccount.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<a href='../Admin/ViewAccount.php?page=$total_pages'>".'Next Page'."</a></h3></center> ";
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
