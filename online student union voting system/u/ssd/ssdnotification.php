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
<body >
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
				<div  class=""  id="content">
				
<fieldset style="border:none;margin: 70px;background-color: #d9e8e6;padding: 50px;width: 50%;">
<legend align="center" style="color: #336699;"><b><h2>Send Message to Different Users</h2></b></legend>
 <table>
<form action="" method="post" enctype="multipart/form-data">
<tr>
<td>Subject:</td><td><input type="text" name="subject"  required class="textbox"/></td>
</tr>
<tr>
<td>message:</td><td><textarea name="message" placeholder="put here Any message......." class="textbox" required pattern="[A-Za-z',.]"></textarea></td>
</tr>
<tr>
<td>to:</td><td>
					<select name="to" required="true" class="textbox" readonly>
					<?php
				$role=array("Registrar");
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
    echo" Message is send sucessfully";
	else
	echo" Message not sent".mysql_error($con);
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