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
1111					</div>    
				</div>
				<div id="content">
				<a name="bottom"></a>
				<div style="margin-left: 100px;">
				
				<h2 align="center">information for user when get ambigity</h2>
                  <h5> pre condition for voter and candidate</h5>
<ul>
<li>must be member of university of Gondar check by enter your id </li>
<li>ccandidate must be free from discipline record and have CGPA 2.7 and above </li>
<li>voter can vote one candidate for each postion</li> 
<li>must send request and register based on resitrict date and time</li> 

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