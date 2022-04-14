<?php
session_start();?>
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
				
				<h2 align="center">Vission</h2>
 The Vision of  University of Gondar is to become among the leading higher education centers of 
academic excellence in teaching-learning, research, publications and community services in africa and
contribute to the development of Ethiopia.
                               <h5>Values</h5>
University of Gondar is guided by the following core values/principles.
<ul>
<li>Academic Freedom: The University upholds academic freedom as its core value whereby all its communities 
exercise the right to free expression of ideas and scholarship. </li>
<li>Excellence: The University upholds excellence as the ruling standard in teaching, research, community service 
and scholarship, and commits itself to the attainment of the highest standards in academic performance. </li>
<li>Integrity and Honesty: The University promotes honesty, integrity, ethical conduct, justice, fairness, and 
nurtures a culture of teamwork, collegiality and mutual support among members of the University community.</li> 
<li>Celebrating diversity: The University promotes and honors commonalities and differences in culture, ideas, religion, 
language, ethnic identity; upholds the principle of gender equality and acknowledges the vital role of every member 
of the community</li> 
<li>Reliance on Evidence and Authority of Reason: Pronouncement and undertakings of the University shall be founded on reason 
and evidence.</li>
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