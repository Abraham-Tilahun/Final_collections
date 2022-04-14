<html>
   <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>	UPDATE SCHEDULE FORM </title>
		<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
   <body>
		<div id="main">
<!-- ====================================================================================start header============================================================================== -->
            <div id="header">
				<div id="logo">
				 <img src="images/header.png" style="width: 100%; height: 100%;"></img>
				</div>
				<!--Header end -->
			</div>
<!--==================================================================================== end header============================================================= -->
			<div id="menu">
				<ul>
					<li><a href="police.php"title="" style="margin-left:155px;">Home</a></li> 
					<li><a href="Aboutas.php" title="">About us</a></li>
					<li><a href="contactus.php" title="">contact us</a>
					<li><a href="logout.php" title="">Logout</a></li>
				</ul>
		    </div><br/>
<!--======================================================================================== start page ===========================================================-->
		 <div id="page">
	<!--================================================================= start leftbar====================================================================== -->
        <div id="leftbar" class="sidebar">
			 <h2>REGISTRATION</h2>
			  <div class="back">
			      <ul>
					<li><a href="changePasswordPolice.php">Change Password</a></li>
					<li><a href="visitorregistration.php"> Register Visitor</a></li>
					<li><a href="Schedul.php">add Schedule</a></li>
					<li><a href="updateSchedule.php"> Update Schedule</a></li>
					<li><a href=""> Generet Report</a></li>
				</ul>
		    </div>
	   </div>
<!--====================================================================================== end leftbar=========================================================== -->
<!--====================================================================================== start content============================================================== -->
	
	    <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
		<div class="post">

           
     <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	    <form name="frm" action="views.php" method="post" onSubmit="return register()"> <BR>
				  <h3> UPDATE SCHEDULE FORM </h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
				    <ul type="none">
					<tr><BR>
					<td height="33">DATE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
						<SELECT name="Date">
							<OPTION value="Monday">Monday
							<OPTION value="Tuesday">Tuesday
							<OPTION value="Wednesday"> Wednesday
							<OPTION value="Thursday">Thursday
							<OPTION value="Friday">Friday
							<OPTION value="Saturday">Saturday
							<OPTION value="Sunday">Sunday
					</select>
					</td>
                 </tr><br><br><br>
				<tr>
					<td height="33">Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  <SELECT name="time">
						    <OPTION value="3am-6am">3am-6am
					        <OPTION value="9am-11am">9am-11am
				          </select>
				   </td>
                </tr><br><br><br>
						
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="submit" style ></a></td>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align="center"><input type="reset" value="reset"></td><br>
				</ul>
		  </form>			
		</div>			
		</div>
	 </div>
	<!-- end content -->
	<!-- start rightbar -->

<div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
					<li><a href="viewPrisonerPolice.php">View Prisoner Information</a></li>
					<li><a href="viewSchedule.php">View Schedule</a></li>
				   </ul>
	</div>
				
	<!-- end====================================================================================== rightbar====================================================== -->
	 <div style="clear: both;">&nbsp;</div>
   </div>
<!--============================================================================================ end page================================================================ -->
  <div id="footer">
   <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=========================================================================================End of notice =========================================================--> 
     </p>
    </div>
   </div>
  </body>
<!--============================================================================================ end page================================================================ -->
 