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
	width: 970px;
	height: 600px;
	margin-left: 230px;
	margin-top: 7px;
	overflow-x: hidden;
	overflow-y: hidden;
}
.textbox
	{
		height: 30px;
		width: 220px;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
		border: none;
		
	}
	.textarea
	{
		height: 100px;
		width: 500px;
		border: none;
		
	}
	#btn
	{
		background-color: #2692d9;
		height: 50px;
		width: 170px;
		color: white;
		cursor: pointer;
		border: none;
		font-family: Times New Roman;
		font-size: 20px;
		margin-top: 20px;
	}
	#btn:hover
	{
		background-color: #808c97;
		height: 50px;
		width: 170px;
		color: white;
		cursor: pointer;
		border: none;
		font-family: Times New Roman;
		font-size: 20px;
		margin-top: 20px;
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
				
<fieldset style="border:none;margin: 70px;background-color: #cde;padding: 50px;width: 400px;">
<legend align="center" style="color: #336699;"><b><h2>Add Notice</h2></b></legend>
				<?php
				$per_page=2;

if (isset($_GET["page"])) {

$page = $_GET["page"];

}

else {

$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;	
	$date=date('Y-m-d hh:mm');
	$sql1=mysql_query("SELECT * from notice  ORDER BY dates  LIMIT $start_from, $per_page") or die(mysql_error());
	$ro=mysql_num_rows($sql1);
	if($ro!='0')
	{
	$sql=mysql_query("SELECT * from notice  ORDER BY dates  LIMIT $start_from, $per_page") or die(mysql_error());
	while($row=mysql_fetch_array($sql))
	{
	$id=$row['id'];
            echo"<p align='right'><b>Date:</b>"."<u>".$row['Dates']."</u>"."</p>";
            echo"<center>"."<u>".$row['Title']."</u>"."</center>"."</p>";       	
			
			echo "<font  size='3' color='#00000b'>".$row['myfile'];
           echo"<font size='4' color='#00000b'><br><u><i>Posted By:".$row['sender']."</i></u>"."</p>";
         	echo "<hr>"	;

	}
	}
	else
	{
		echo "There is No Posted Notice!!!";
		
	}
	$query = "select * from notice  where id='$id'";
  $result = mysql_query($query);

// Count the total records
$total_records = mysql_num_rows($result);

//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<center> <h3><a href='../ssd/editnotice.php?page=1'>".'Privouse Page'."</a> ";
for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='../ssd/editnotice.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<a href='../ssd/editnotice?page=$total_pages'>".'Next Page'."</a></h3></center> ";
?>

 </fieldset>
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