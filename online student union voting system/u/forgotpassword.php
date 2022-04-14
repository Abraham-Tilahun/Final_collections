<?php
session_start();
 include("Database/connection.php");

	?>
<html>
<link  href="css/allcss.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
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
		
	}
#content
{
	background-color: white;
	width: 60%;
	height: 600px;
	margin-left: 19%;
	margin-top: 0%;
	overflow-x: hidden;
	overflow-y: hidden;
}
</style>
<script>
function show_password() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    }
    else {
        x.type = "password";
    }
}
</script>
</head>
<body>
<div id="container">
		<div id="header">
		<?php
		include("headerhome.php");
	   ?>	
		</div>
		<div id="menu">
		<?php
		include("menu.php");
		?>
	</div>

				<div id="content">
				<a name="bottom"></a>
<fieldset style="border:none;margin-top:2%;">

			<div style="margin-left:2%;">
				<h1>Recover Password</h1>
<?php
  		
						
  			$un=$_SESSION['username'];
  ?>

			   <form method="POST" enctype="multipart/form-data">
			    <table>
			    <tr><td style="color: #006699;font-size: 20px;">UserName</td><td style="color: #006699;font-size: 20px;"><input type="username"  name="username" class="textbox" required="1" readonly="1" value="<?php echo"$un";?> "style="color: #006699;font-size: 20px;"/> </td></tr> 
			    <tr><td style="color: #006699;font-size: 20px;">Enter your new password:</td><td style="color: #006699;font-size: 20px;"><input type="password"  name="newpassword" class="textbox"required placeholder=" please enter user password"></td></tr>
			    <tr><td style="color: #006699;font-size: 20px;">Re-enter your new password:</td><td style="color: #006699;font-size: 20px;"><input type="password"  name="confirmnewpassword" class="textbox"required placeholder=" confirm your  password"></td></tr>
			    <tr><td colspan="2" style="color: #006699;font-size: 20px;"><input type="submit" value="Update Password" name="change" class="myButton"></td></tr>
			    </table>  
			 </form>
			
			    <?php
			   


		    if(isset($_POST['change']))
		    {
				$username = $_POST['username'];
		        //$newpassword = md5($_POST['newpassword']);
		        //$confirmnewpassword = md5($_POST['confirmnewpassword']);
				$newpassword = $_POST['newpassword'];
		        $confirmnewpassword = $_POST['confirmnewpassword'];
		        $result = mysql_query("SELECT * FROM user WHERE username='$username'");
		        $row=mysql_fetch_assoc($result);
			    if($newpassword==$confirmnewpassword)
			    {
		        $sql=mysql_query("UPDATE user SET password='$newpassword' where username='$username'");
		        if($sql)
		        {
		        echo "<font color='green'>You have successfully Recover your password</font>";
		        }
		        }
		       else
		        {
		       echo "<font color='red'>Password does not match</font>";
               }	

         }
      ?>
				</div>
		
			</fieldset>
		    </div>
		<div id="footer">
			<?php
			include("footer.php");
			?>
	</div>
	</div>
	
</body>
</html>