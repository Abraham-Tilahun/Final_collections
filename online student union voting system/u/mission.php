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
				<div style="margin-left: 100px;">
				<h2 align="center">Mission</h2>
To educate competent graduates and researchers in Engineering and Technology by advancing relevant,
innovative and creative teaching, research and Technology Transfer to foster social and economic 
development of the country.
                         <h4>Goal</h4>
<ul>
<li>offer relevant, diverse, learner-centered, and research-led programs of study;</li>
<li>prepare graduates with the requisite knowledge, skills and attitudes embodied in the graduate 
profile of academic programs;</li>
<li>strengthen assessment methods that validly, reliably and fairly evaluate measurable learning outcomes;</li>
<li>promote technology-based, innovative and inter-disciplinary learning environment;</li>
<li>undertake demand-driven research on local, national and international issues and problems;</li>
<li>produce and disseminate research outcomes, teaching materials and other publications;</li>
<li>ensure the provision of need-based services to the community at large</li>
</ul>               

</div>
		    </div>
		<div id="footer">
			<?php
			include("footer.php");
			?>
	</div>
	</div>

</body>
</html>