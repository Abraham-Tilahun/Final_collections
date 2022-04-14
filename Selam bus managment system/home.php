<?php
session_start();
if(isset($_SESSION['role'])) {
	if($_SESSION['role'] == 'Manager') {
		die(header('location: Manager/manager.php'));	
	} else if($_SESSION['role'] == 'admin') {
		die(header('location: System Admin/System Admin.php'));
	} else if($_SESSION['role'] == 'Passenger') {
		die(header('location: Passenger/passenger.php'));
	} else if($_SESSION['role'] == 'Ticket_Officer') {
		die(header('location: Ticket Officer/Ticket Officer.php'));
	}
}
?>
<html>
<head><title>Selam Bus Ticket Reservation System</title>
<link href="Common/css/formmapt.css" rel="stylesheet" type="text/css" />
</head>
<img src="image/home.png" style="width: 100%; height:15%; float: up">
	<body id="bd" class="whole"  onLoad="yourClock()", onUnload="stopClock(); return true"> 
	<div id="bodyw">
     <div id="bodyw-inner">
	   <hr>
	   <div id='menu'>
	   <ul>
	   <li ><a href="Common/slide.php" onclick="change_menu(this)" target="iframe1">Home</a></li>
	   <li ><a href="" >About Us</a>
	   <ul>
	   <li><a href="Home/vission.php" onclick="change_menu(this)" target="iframe1"><span>Vision</span></a></li>
	   <li><a href="Home/mission.php" onclick="change_menu(this)" target="iframe1"><span>Missions</span></a></li>
	   <li><a href="Home/value.php" onclick="change_menu(this)" target="iframe1"><span>Values</span></a></li>
	   </ul>
	   </li>
	   <li ><a href="Home/contactus.php" onclick="change_menu(this)" target="iframe1">Contact Us</a></li>
	   <li ><a href="Home/businfo.php" onclick="change_menu(this)" target="iframe1">Information</a></li>
	   <li ><a href="Home/login.php" onclick="change_menu(this)" target="iframe1">Login</a></li>
	   <li><a href=" ">Reserve</a>
	   <ul>
	     <li><a href="Common/seat.php" onclick="change_menu(this)" target="iframe1"><span>View  Seat</span></a></li>
	     <li><a href="Home/Register.php" onclick="change_menu(this)" target="iframe1"><span>Register Here</span></a></li>
		 </ul>
		 </li>
	   <li ><a href="Common/Comment.php" onclick="change_menu(this)" target="iframe1">Comment</a></li>
	   <li><a href="">Help</a>
	   <ul>
	     <li><a href="Home/Help/login.php" onclick="change_menu(this)" target="iframe1"><span>Login</span></a></li>
	     <li><a href="Home/Help/Reserve.php" onclick="change_menu(this)" target="iframe1"><span>Reserve</span></a></li>
		 <li><a href="Home/Help/comment.php" onclick="change_menu(this)" target="iframe1"><span>Comment</span></a></li>
		 </ul>
		 </li>
      </ul>
	   </li>
	   </ul>
	   </div>
	   <br />
	   <br /><br />
		<!-- BEGIN: CONTENT -->
	<div id="main">   <!-- to the right 82% iframe -->
  <div id="contentt">	<!-- to change background of iframe --> 
 <div id="content">  	<!-- to change align of iframe --> 
	<iframe name="iframe1" width="816" height="400" src="Common/slide.php" scrolling="auto" frameborder="1"></iframe>         																		
       </div>
		</div>
		<!-- BEGIN: RIGHT COLUMN -->
		<div id="right"> <!-- to the right float-->
		<div class="rightt"> <!-- to the right padding,border-->
		<h3>Time:</h3>
		  <script src="Common/js/time.js" language="javascript" type="text/javascript"></script>
			<form name="the_clock">
				<table width="100%" border="0" cellpadding="2.9" cellspacing="0">
				 <tr align="left"><td><a>System Time:&nbsp;&nbsp;<input type="text" name="the_time" size="12" style="padding-bottom:5px;" align = "top"></a></td></tr>
				   <tr align="left"><td></td></tr>
	                </table>
	                </form>  	
	          <h3>Calender</h3>
	         <script src="Common/js/calander.js" language="javascript" type="text/javascript"></script> 
	      <br/><br/>
	     </div>
      </div>
     </div>
		<!-- END: RIGHT COLUMN -->	
		<!-- BEGIN: LEFT COLUMN -->
   <div id="left"><div >
   <div style = "border-radius:1px;">						
  <center><u><h2>Notices</h2></u></center>		
<div class="notice" style="overflow: hidden; margin: 0px; padding: 0px; display: block; width: 100%;">									
	<marquee direction = "up" scrollamount = "" behavior="scroll" style='height: 700px; width: 100%; position: relative; top: -300px;'>
	    <div class="notice">
	        <?php
		 	include("Common/connection.php");
			$sel = mysql_query("select *from notice order by NOTICE_ID DESC");
			while($row = mysql_fetch_array($sel)){
				$result2 = mysql_query("select *from user where user_id = ".$row['POST_BY']);
				$row2 = mysql_fetch_array($result2,MYSQL_ASSOC);

		   		echo "<div style='width: 221px; text-align: center; border: 1px solid black;'><br>
		   		Post By: ".$row2['first_name'].' '.$row2['last_name']."<p><br>";
		      	echo ''.$row['NOTICE_TEXT'];
		      	echo "</p><br></div><br>";
			}
			?>
		 </div>			
	  </marquee>
      </div>
  </div>
</div>    
	</div>
	 </div>
	  </div>
	  <br/>	
<!-- END: LEFT COLUMN -->
</div>
<script type="text/javascript">
	var current_active_menu = null;
	function change_menu(menu) {
		if(current_active_menu != null)
			current_active_menu.classList.remove('active');

		menu.classList.add('active');
		current_active_menu = menu;
	}
</script>
</body>
<footer style="color:green; text-align: center; height: 40px;"><br><br><br>
<h3 style="width: 800px; height: 20px;margin-left: 260px;">Copyright @ 2018 Selam Bus Ticket Reservation System</h3>
</footer>
</html>