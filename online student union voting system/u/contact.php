<?php
session_start();

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
	width: 80%;
	height: 600px;
	margin-left: 19%;
	margin-top: 0%;
	overflow-x: hidden;
	overflow-y: hidden;
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
					<div id="content">
				<a name="bottom"></a>
				 <fieldset  style="height: 500px;border: none;">
                <legend align="right"><img src="IMG/contact.jpg" height="60px;" width="500px;"/> </legend>
                <?php
                include("Database/connection.php");	 
                $sql=mysqli_query($conn,"select * from user WHERE role='Adminstrator' or role='SSD' or role='Registrar' LIMIT 3");
                while($row=mysqli_fetch_assoc($sql))
                {
				$fname=$row['fname'];
				$lname=$row['lname'];
				$role=$row['role'];
				
                ?>
                <div style="background-color: #cdd9ed;float: left;padding: 10px;margin: 10px; width: 270px;font-family: Times New Roman;">
         		Full Name:<label><?php echo $fname.'&nbsp;'.$lname;?></label><br>
                Position:<label><?php echo $role;?></label><br>
                Phone Number:<label>+251948808112</label><br>
                Email:<label>uogosuvs@gmail.com</label><br><br>
                <img src="IMG/cotactus.png" style="width: 270px;"/>
                </div>

                <?php
                }
                ?> 
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