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
<fieldset style="border:none;margin: 70px;background-color: #d9e8e6;padding: 50px;width: 400px;">
<legend align="center" style="color: #336699;"><b><h2>Update Election Date</h2></b></legend>
			<?php
			
			$sql="select * from election";
							$recorfound=mysql_query($sql);
							if(mysql_affected_rows($con))
							 {
							$row=mysql_fetch_assoc($recorfound);
											
echo"<form action='' method='post' enctype='multipart/form-data'>";
echo"<table>";
echo"<tr><td>Start Date</td><td><input type='datetime' name='sdate' value='".$row["StartDate"]."'required class='textbox'/></td></tr>";
echo"<tr><td>End Date</td><td><input type='datetime' name='edate' value='".$row["Closedate"]."'  required='true'class='textbox'/></td></tr>";
echo"<tr><td colspan='2'><input type='submit' value='Update' name='Update' id='btn'/>&nbsp;<input type='reset'
			 value='Reset'id='btn'/></td></tr></table></form>";
										
										}
										else
										echo "Election Date Is Not setted!!";	
					 if(isset($_POST["Update"]))
									{
						$sdate=$_POST['sdate'];
						$edate=$_POST['edate'];
						$updated=mysql_query("update election set StartDate='$sdate',Closedate='$edate'");
										if(mysql_affected_rows($con))
										echo " Election Date Is updated successfully!";
										 else
										echo "Unable to update!";
													
									}
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