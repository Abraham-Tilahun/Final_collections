<?php
session_start();
	?>
<html>
<link  href="css/allcss.css" rel="stylesheet" type="text/css"/>
<link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
<script src="themes/4/js-image-slider.js" type="text/javascript"></script>
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
				<table align="left" style="border:1px solid gray;border-radius:12px;height:50%;width:50%;"><tr><td>
           <div id="sliderFrame">
        <div id="slider" >
            <img src="IMG/logo.jpg" />
            <img style="width:5%;" src="IMG/voti1.jpg" />
            <img src="IMG/slider-3.jpg" />
            <img src="IMG/slider-4.jpg" />
			<img src="IMG/slider-5.jpg" />
			<img src="IMG/slider-6.jpg" />
			<img style="width:10%;" src="IMG/votei.jpg" />
        </div>
    </div>






</td></tr></table>
    <label style="color: #006699;font-size: 25px;margin-left: 100px;">Well come to Online student Union Voting System</label>
		    </div>
		<div id="footer">
			<?php
			include("footer.php");
			?>
	</div>
	</div>

</body>
</html>