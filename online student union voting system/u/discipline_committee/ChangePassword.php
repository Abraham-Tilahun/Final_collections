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
	width: 970px;
	height: 550px;
	margin-left: 50px;
	margin-top: 7px;
	overflow-x: hidden;
	overflow-y: hidden;
}
#rightside
{
	background-color: #cde;
	width: 220px;
	height: 545px;
	float: left;
	margin-left: 0px;
	margin-top: 5px;
	margin-right: 10px;
}
#calander
{
	margin-top: 1px;
	padding-top: 0px;
	width: auto;
	height: 190px;
}
</style>
</head>
<body>
<div id="container">
		<div id="header">
		<?php
	include("../discipline_committee/header.php");
		?>
		</div>
		<div id="menu">
		<?php
include("../discipline_committee/discipline_committeemenu.php");
		?>
	</div>

					<div id="rightside">
					<div id="login">
					<?php
					echo "<b>";
						echo "<img src='".$_SESSION['sphoto']."' width='220' height='230'/><br/>";
						echo " discipline_committee:".$_SESSION['username'];
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
						<fieldset style="border: none;margin: 30px;background-color: #dfdfdf;width: 650px;">
										<h1>Change Password</h1>
			   <form method="POST" enctype="multipart/form-data">
			    <table style="border: none;">
			    <tr><td>Enter your UserName</td>
			    <td><input type="username"  name="username" class="textbox" value="<?php echo $_SESSION['username'];?>" readonly></td></tr>
			    <tr><td>Enter your existing password:</td><td><input type="password"  name="password" class="textbox"required></td></tr>
			    <tr><td>Enter your new password:</td><td><input type="password"  name="newpassword" class="textbox"required></td></tr>
			    <tr><td>Re-enter your new password:</td><td><input type="password"  name="confirmnewpassword" class="textbox"required></td></tr>
			    <tr><td colspan="2"><input type="submit" value="Update Password" name="change" class="myButton"></td></tr>
			    </table>
			    
			    </form>
			    <?php
				$changeid=$_SESSION['userid'];
		    if(isset($_POST['change']))
		    {
				//$username = $_POST['username'];
		       // $password = md5($_POST['password']);
		       // $newpassword = md5($_POST['newpassword']);
			      //$confirmnewpassword = md5($_POST['confirmnewpassword']);
			   $username = $_POST['username'];
		        $password = $_POST['password'];
		        $newpassword = $_POST['newpassword'];
				
		        $confirmnewpassword = $_POST['confirmnewpassword'];
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
					include("../discipline_committee/footer.php");
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
