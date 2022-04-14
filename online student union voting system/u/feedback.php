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
	#login
{
	margin-top: 0px;
	background-color: #718076;
	height: 220px;
	width: auto;
}
#content
{
	background-color: white;
	width: 59%;
	height: 600px;
	margin-left: 19%;
	margin-top: 0%;
	overflow-x: hidden;
	overflow-y: hidden;
}

	.textbox
	{
		height: 40px;
		width: 400px;
		border-top: none;
		border-left: none;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
		
	}
	.textarea
	{
		height: 100px;
		width: 500px;
		
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
		include("headerhome.php");
	   ?>	
		</div>
		<div id="menu">
		<?php
		include("menu.php");
		?>
	</div>

				<div id="leftside">
						<?php
						include("homesidemenu.php");
					   ?>	   
				</div>
				<div id="rightside">
					<div id="login">
					<img src="IMG/vote.jpg" alt="" height="220" width="220"/>
					</div> 
					<div id="calander">
					<b style="color: #12d7ed;">Calander</b>
						<?php
						include("calander.php");
						?>
					</div>    
				</div>
				<div id="content">
			<a name="bottom"></a>
				<?php
		if(isset($_POST['send']))
				{
					$email=$_POST['email'];
					$comment=$_POST['comment'];
					$date=$_POST['date'];
					$sql=mysql_query("insert into feedback(email,comment,date) values('$email','$comment','$date')");
					if(!$sql)
					{
						die("Data not inserted:".mysql_error());
					}
					else
					{
						echo "<script type='text/javascript'>alert('Feedback has been sent successfully !')</script>";
						//echo "Feedback has been sent successfully";
					}
				}
				?>
		<fieldset style="height: 300px;border: none;margin: 50px;"><legend style="color:#006699;font-size: 27px;">Just Put Here Your Comments</legend>
<form name="feedback" method="post" action="#">
<table>
<tr>
<td>
Email Address:
</td>
<td >
<input type="email" style="background-image:none;" name="email" required="true" class="textbox" placeholder="Enter Email Address">
</td>
</tr>
<tr>
<td>
Comments :
</td>
<td>
<textarea name="comment" maxlength="1000" cols="25" rows="6" class="textarea" placeholder="Put Here Your Coment" style="width: 400px;" required="1"></textarea>
</td>
</tr>
<tr><td>Date:</td><td><input type="datetime" name="date" value="<?php echo  date("Y-m-d h:i:s");?>" readonly="1"  class="textbox"></td></tr>
<tr>
<td colspan="2" style="text-align:right">
<input type="submit" value="Send" id="btn" name="send"> <input type="reset" value="Cancel" id="btn">
</td>
</tr>

</table>
</form>
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