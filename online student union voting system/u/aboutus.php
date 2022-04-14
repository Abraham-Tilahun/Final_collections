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
	background-color:white;
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
				<div style="margin-left:4%;margin-right:5%;margin-top:5%;font-size:120%;">
	University of Gondar is founded in 1954, University of Gondar is a non-profit public higher education institution located in the urban setting of the large town of Gondar. This institution has also branch campuses in the following location(s): Maraki. Officially accredited and/or recognized by the Ministry of Education, Ethiopia, University of Gondar (UOG) is a large (uniRank enrollment range: 10,000-14,999 students) 
	coeducational higher education institution. University of Gondar (UOG) offers courses and programs leading to officially recognized higher education degrees in several areas of study. See the uniRank degree levels and areas of study matrix below for further details. This 65 years old higher-education institution has a selective admission policy based on entrance examinations and students' past academic record and grades. The admission rate range is 10-20% making this Ethiopian higher education organization a most selective institution.
	International students are welcome to apply for enrollment .
	
				<h2 align="center">Mission</h2>
The unversity of Gondar Dedicated to contribute to 
sustainable socio-economic development of the country 
through provision of societal needs tailored education 
based problem researches and relevant
comunity service.
              
<h2 align="center">Vission</h2>
To be the leading societal  problem solving university in the country by 2010.	
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