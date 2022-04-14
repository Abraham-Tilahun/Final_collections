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
		/*resize: none;*/
		
	}
	.textarea
	{
		height: 100px;
		width: 500px;
		border: none;
		
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
<fieldset style="border:none;margin: 70px;background-color: #d9e8e6;padding: 50px;width: 400px;">
<legend align="center" style="color: #336699;"><b><h2>Send Message for SSD</h2></b></legend>
 <table>
<form action="" method="post" enctype="multipart/form-data">
<tr>
<td>Subject:</td><td><input type="text" name="subject"  required class="textbox"/></td>
</tr>
<tr>
<td>message:</td><td><textarea name="message"  required="true"placeholder="put here Any message......." class="textbox" pattern="[A-Za-z',.]"></textarea></td>
</tr>
<tr>
  <td>to:</td><td>
				<select name="to" required="true" class="textbox" readonly>
					<?php
				$role=array("SSD");
				foreach($role as $i)
				echo "<option value=$i>$i</option>";
				?>	
				</select>
 </td>
</tr>
<tr>
<td colspan="2"><input type="reset"  value="Cancel" class="myButton">
<input type="submit" name="notice" value="Send" class="myButton"">
</td>
</tr>

</form>
</table>
<?php
if(isset($_POST['notice']))
{
$subject=$_POST["subject"];
$message=$_POST["message"];
$to=$_POST["to"];
$con=mysqli_connect("localhost","root","","uogosuvs");
if($con)
{
  $sql=mysqli_query($con,"insert into notification values('identity(1,1)','$subject','$message','$to','unread')");
   if($sql)
    //echo" Message is send sucessfully";
echo "<script type='text/javascript'>alert(' Message is send sucessfully')</script>";
	else
echo "<script type='text/javascript'>alert(' Message is send sucessfully')</script>".mysql_error($con);
}
else
echo"Connection Failed:".mysql_error($con);
}
?>
 </fieldset>
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