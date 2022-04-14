<html>
	<head>
		<title>Home page</title>
			<style>
			body{
				background:#cdffff;
			}
			#divv{
			//width:29%;
			height:50px;
			//float:left;
			border:solid;
			background:#999966;
			border-radius:50%;
		        }
			#div1{
			width:29%;
			height:100%;
			float:left;
			//border:solid;
			background:#e6ffe6;
		        }
			.d{
			width:100%;
			height:50%;
			float:left;
			//border:solid;
			background:#e6ffff;
		        }		
			.d1{
			width:90%;
			height:50%;
			float:left;
			//border:solid;
			background:#e6ffff;
		        }
		#div2{
			width:71%;
			float:right;
			height:10%;
			background:#f5f5f0;
			//border:solid;
			}
			 a{
			font-size:20px;
			text-decoration:none;
			//border:1px;
			//border-style:solid;
			//border-radius:5px;
			//margin-left:50px;
			}
			.d a:hover{
			 background-color:#333300;
			 color:#f2f2f2;
			 font-size:25px;
			}
			#dv4{
				width:60%;
				height:90%;
				float:right;
				background:#f5f5f0;
			}
			#about{
				width:100%;
				height:25%;
				float:left;
				background:#e6f2ff;
			}
			</style>
	</head>
	<body>
		<div id="divv"><b style="color:#f0f0f0;font-size:32px;"><center>
		Welcome To School Fee Managment System</center></b>
		</div>
		<div id="div1">
		<div class="d">
			<a href="casher_login.html"><b>Casher</a> <br><br>
			<a href="teacher_login.html">Teacher</a> <br><br>
			<a href="student.html">Student</b></a> <br><br>
			</div>
			<div class="d1">
			<fieldset><legend><h3>Announcement</h3></legend>
			<p>Those students whose name listed below are paid the school fee.Therefore students whose name not listed below should pay the payment fee with in the specified time as per the schools regulation.</p><a href="paid_student_list.php"><mark>cilck here to see paid list</mark></a>
			</fieldset>
			
			</div>
		</div>
		<div id="div2">
		<h3 style="color:blue" align="center"><i>Welcome to Selam-Argiw Mariam Acadamy.<br><img src="images/selam.png" style="width:100%;height:6px"></img><i></h3>
		</div>
        <div id="dv4"><?php include("slideshow.html");?></div>	
		<div id="about">
			<center>
				<h2><footer>Thanks for being with us!</h2>
				<br>
				Bahir Dar,Ethiopia 
                    </footer>
			</center>
		</div>
	</body>
</html>