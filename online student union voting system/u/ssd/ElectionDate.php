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
		.textbox
	{
		height: 30px;
		width: 220px;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
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
<fieldset style="border:none;margin: 70px;background-color: #d9e8e6;padding: 50px;width: 400px;">
<legend align="center" style="color: #336699;"><h1>Set Election Date</h1></legend>
 <table class="data-table">
<form action="" method="post" enctype="multipart/form-data">
<tr>
<td>Election Open Date:</td></tr><tr><td><input type="datetime-local" name="opendate" required class="textbox"/></td>
</tr>
<tr>
<td>Election Close Date:</td></tr><tr><td><input type="datetime-local" name="closedate" required class="textbox"/></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="time" value="Set" id="btn">
<input type="reset"  value="Cancel" id="btn"></td>
</tr>
</form>
</table>
<?php
if(isset($_POST['time']))
{
$opendate=$_POST["opendate"];
$Closedate=$_POST["closedate"];
if($con)
{
  $sql=mysql_query("insert into election values('1','$opendate','$Closedate')");
   if($sql)
    echo "Election Date is setted sucessfully";
	else
	echo "Election Date is not setted sucessfully".mysql_error($con);
}
else
echo"Connection Failed:".mysql_error($con);
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