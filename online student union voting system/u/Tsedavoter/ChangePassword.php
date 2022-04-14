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
#content
{
	background-color: white;
	width: 60%;
	height: 600px;
	margin-left: 18%;
	margin-top: 0%;
	overflow-x: hidden;
	overflow-y: hidden;
}
</style>
</script>
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
include("../Tsedavoter/votermenu.php");
		?>
	</div>

				<div id="leftside">
					<div id="applyside">
						<?php
							include("../Tsedavoter/votersidemenu.php");
					   ?>	
					</div>    
				</div>
									<div id="rightside">
					<div style="background-color: #2d6fd2;color: #fff;">
					<?php
					echo "<b>";
						echo "<img src='".$_SESSION['sphoto']."' width='220' height='230'/><br/>";
						echo "Voter:".$_SESSION['username'];
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
						<fieldset style="border: none;margin: 30px;background-color:#cde">
										<h1>Change Password</h1>
			   <form method="POST" enctype="multipart/form-data">
			    <table>
			    <tr><td><b>Enter your UserName</b></td>
			    <td><input type="username"  name="username" class="textbox" value="<?php echo $_SESSION['username'];?>" readonly></td></tr>
			    <tr><td><b>Enter your existing password:</b></td><td><input type="password"  name="password" class="textbox"required></td></tr>
			    <tr><td><b>Enter your new password:</b></td><td><input type="password"  name="newpassword" class="textbox"required></td></tr>
			    <tr><td><b>Re-enter your new password:</b></td><td><input type="password"  name="confirmnewpassword" class="textbox"required></td></tr>
			    <tr><td colspan="2"><input type="submit" value="Update Password" name="change" class="myButton"></td></tr>
			    </table>
			    
			    </form>
			    <?php
				$changeid=$_SESSION['userid'];
		    if(isset($_POST['change']))
		    {
				$username = $_POST['username'];
				//$password = md5($_POST['password']);
		        //$newpassword = md5($_POST['newpassword']);
		        //$confirmnewpassword = md5($_POST['confirmnewpassword']);
		        $password =$_POST['password'];
		        $newpassword =$_POST['newpassword'];
		        $confirmnewpassword =$_POST['confirmnewpassword'];
		        $result = mysql_query("SELECT * FROM user WHERE username='$username' and userid='$changeid'");
		        $row=mysql_fetch_assoc($result);
		        $pass=$row['password'];
				
		        if($pass==$password)
		        {
			    if($newpassword==$confirmnewpassword)
			    {
		        $sql=mysql_query("UPDATE user SET password='$newpassword' where username='$username'and userid='$changeid'");
		        if($sql)
		        {
		        echo "<font color='green'>Congratulations You have successfully changed your password</font>";
		        }
		        }
		       else
		        {
		       echo "<font color='red'>Password does not match</font>";
               }	
				}
				else
				print"<font color='red'>Your Old Password is not Correct</font>";

         }
      ?>
				
		
						</fieldset>
    
				    </div>
				<div id="footer">
					<?php
					include("../Tsedavoter/footer.php");
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
	<a name="bottom"></a>
	</div>
</body>
</html>
