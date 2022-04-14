<?php
	session_start();
	if (!isset($_SESSION['userName'])) 
	{
		header('Location: login.php');
		exit; 
	                   }
?>
   <html>
      <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>CHANGE PASSWORD POLICE</title>
		<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
       </head>
      <body>
	<div id="main">
<!--========================================= start header=================================================================================== -->
                <div id="header">
                       <div id="logo">
					    <img src="images/header.png" style="width: 100%; height: 100%;"></img>
				        </div>
                </div>
<!--======================================Header end =========================================================================================================================-->
			<div id="menu">
				  <ul>
					<li><a href="police.php"title="" style="margin-left:155px;">Home</a></li> 
					<li><a href="Aboutas.php" title=""> About us </a></li>
					<li><a href="contactus.php" title=""> contact us </a>
					<li><a href="logout.php" title=""> Logout </a></li>
				  </ul>
		    </div><br/>
<!-- =================================================start page=============================================================================================== -->
		       <div id="page">
<!--================================================ start leftbar========================================================================================== -->
	               <div id="leftbar" class="sidebar">
			              <h2>Registration</h2>
			       <div class="back">

				<ul>
					<li><a href="changePasswordPolice.php">Change Password</a></li>
					<li><a href="visitorregistration.php"> Register Visitor</a></li>
					<li><a href="Schedul.php">Add Schedule</a></li>
					<li><a href="updateSchedule.php"> Update Schedule</a></li>
					<li><a href=""> Generet Report</a></li>	
				</ul>
			        </div>
				
	             </div>
	<!-- end leftbar -->
<!--====================================================== start content====================================================================================== -->
	
                  <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	 
		          <div class="post">

                 <?php
				   if (isset($_SESSION['error'])){
				   echo '<h3 style="text-align:center;color:red">'.$_SESSION['error'].'</h3></br>';
				   unset($_SESSION['error']);
					}
				   else if (isset($_SESSION['sucess'])){
				   echo '<h3 style="text-align:center;color:green">'.$_SESSION['sucess'].'</h3></br>';
				   unset($_SESSION['sucess']);
					}
				  ?>
                  <form  type="multipart/form-data" name="myForm" action="changePasswordphp.php" method="post">
						<h2><b>Fill Change Password Form and Change your Password</h2><br><br><br>
						<table style="color: black;">
			   
						<tr>
					   <td height="20px">Old Password: (required)</td>
					   <td><input type="password" name="oldpass" style="width:100px" pattern="[A-Za-z]+||[0-9]+||[A-Za-z]+[0-9]+||[0-9]+[A-Za-z]+"
					   oninvalid="setCustomValidity('Old password is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required">
					   </td>
					  </tr>	
					  <tr>
					   <td height="20px">New Password: (optional)</td>
					   <td><input type="password" name="newpass" style="width:100px" pattern="[A-Za-z]+||[0-9]+||[A-Za-z]+[0-9]+||[0-9]+[A-Za-z]+"/>
					   </td>
					  </tr>	
					  <tr>
					   <td height="20px">re-Write password:</td>
					   <td><input type="password" name="reenter" style="width:100px" pattern="[A-Za-z]+||[0-9]+||[A-Za-z]+[0-9]+||[0-9]+[A-Za-z]+"/>
					   </td>
					  </tr>	
					  <tr>
					   <td height="20px">New User Name (optional):</td>
					   <td><input type="password" name="username" style="width:100px" pattern="[A-Za-z]+||[0-9]+||[A-Za-z]+[0-9]+||[0-9]+[A-Za-z]+"/>
					   </td>
					  </tr>	
					  <tr><td>&nbsp;</td></tr>
					  <tr>
					  <td>&nbsp;</td>
					  <td>&nbsp;</td>
					  <td height="20px"><input type="submit" value="Change" name="search"></a></td>
					  <td align="right"><input type="reset" value="Reset"></td><br>
					  </tr>
					   </table>
	         
                </form>
		      			
		      </div>
	          </div>
<!--====================================================== end content====================================================================================== -->
	<!-- ===================================================start rightbar ====================================================================================-->
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
 