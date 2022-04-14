<?php
session_start();
if(isset($_SESSION['role'])) {
	if($_SESSION['role'] == 'Manager') {
		die(header('location: Manager/manager.php'));	
	} else if($_SESSION['role'] == 'Passenger') {
		die(header('location: Passenger/passenger.php'));
	} else if($_SESSION['role'] == 'Ticket_Officer') {
		die(header('location: Ticket Officer/Ticket Officer.php'));
	}
} else {
	die(header('location: ../home.php'));
}
?>
<html>
<head><title>System Admin</title>
<link href="../Common/css/formmapt.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript">
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onclick=function(){null};
	</script>
</head>
	<body id="bd" class="whole"  onLoad="yourClock()", onUnload="stopClock(); return true"> 
	<div id="bodyw"><!--ja-wrapper to align the document by 97%-->
     <div id="bodyw-inner">
       <a id="new_header" href="">
        <img src="../image/logo.jpg" style="width: 150px; height: 130px; float: left">
       	<label>SELAM BUS TICKET RESERVATION SYSTEM<br><br><br><span style="color: rgb(100, 100, 100);"> Administrator Page</span></label>
       	<img src="../image/logo.jpg" style="width: 150px; height: 130px; float: right">
       </a>       
	   <div id='menu'>
	   <ul>
	   <li ><a href="CreateAccount1.php" onclick="change_menu(this)" target="iframe1">Register User</a></li>
	   <li><a href="updateacc.php" onclick="change_menu(this)" target="iframe1">Update Account</a></li>
	   <li ><a href="../Common/change_password.php" onclick="change_menu(this)" target="iframe1">Change Password</a></li>
	   <li ><a>Post-notice/News</a>
	   <ul>
	   <li ><a href="Postnotice1.php" onclick="change_menu(this)" target="iframe1">Post-notice</a></li>
	   <li ><a href="delete post.php" onclick="change_menu(this)" target="iframe1">Delete Post</a></li>
	   </ul>
	   </li>
	   <li ><a href="../Common/View Comment.php" onclick="change_menu(this)" target="iframe1">View Comment</a></li>
	     <li ><a>manage account</a>
		 <ul>
		 <li ><a href="view_useraccount.php" onclick="change_menu(this)" target="iframe1">Activate account</a></li>
		 <li ><a href="view_useraccount2.php" onclick="change_menu(this)" target="iframe1">Inactivate account</a></li>
		 </ul>
		 </li>
	   <li ><a href="AddRoute.php" onclick="change_menu(this)" target="iframe1">add Route</a></li>  
	   <li ><a href="../Common/logout.php">Logout</a></li>
	   </ul>
	   </div>
	   <br />
	   <br /><br/>
		<!-- BEGIN: CONTENT -->
   <div id="main">   <!-- to the right 82% iframe -->
	<div id="contentt">	<!-- to change background of iframe --> 
	  <div id="content">  	<!-- to change align of iframe --> 
		<iframe name="iframe1" width="800" height="380" src="../Common/slide.php" scrolling="auto" frameborder="1"></iframe>           																		
          </div>
		</div>
		<!-- BEGIN: RIGHT COLUMN -->
		<div id="right"> <!-- to the right float-->
		<div class="rightt"> <!-- to the right padding,border-->
		<h3>Time:</h3>
		  <script src="../Common/js/time.js" language="javascript" type="text/javascript"></script>
			 <form name="the_clock">
			  <table width="100%" border="0" cellpadding="2.9" cellspacing="0">
				<tr align="left"><td><a>System Time:&nbsp;&nbsp;<input type="text" name="the_time" size="12" style="padding-bottom:5px;" align = "top"></a></td></tr>
				<tr align="left"><td></td></tr>
	            </table>
	          </form>  	
	 <h3>Calender</h3>
	   <script src="../Common/js/calander.js" language="javascript" type="text/javascript"></script> 
	   <br/><br/>
	  </div>
      </div>
     </div>
		<!-- END: RIGHT COLUMN -->	
		<!-- BEGIN: LEFT COLUMN -->
<div id="left"><div>
<div style = "border-radius:1px;">						
<center><u><h2>Notices</h2></u></center>
<div class="notice" style="overflow: hidden; margin: 0px; padding: 0px; display: block; width: 100%;">									
	<marquee direction = "up" scrollamount = "7" behavior="scroll" style='height: 700px; width: 100%; position: relative; top: -300px;'>
	    <div class="notice">
	        <?php
		 	include("../Common/connection.php");
			$sel = mysql_query("select *from notice order by NOTICE_ID DESC");
			while($row = mysql_fetch_array($sel)){
				$result2 = mysql_query("select *from user where user_id = ".$row['POST_BY']);
				$row2 = mysql_fetch_array($result2,MYSQL_ASSOC);

		   		echo "<div style='width: 221px; text-align: center; border: 7px solid black;'><br>
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
</body>
<footer style=" background-color:; color:green; text-align:center"></br></br></br></br>
<h3>Copyright @ 2018 Selam Bus Ticket Reservation System</h3>
</footer>
<script type="text/javascript">
	var current_active_menu = null;
	function change_menu(menu) {
		if(current_active_menu != null)
			current_active_menu.classList.remove('active');

		menu.classList.add('active');
		current_active_menu = menu;
	}
</script>
</html>