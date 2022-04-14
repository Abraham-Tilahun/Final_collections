       <html>
         <head>
		 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		 <title> NEW PRISONER REGISTERATION FORM</title>
		<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
     </head>
   <body>
<div id="main">
<!-- =================================================================start header========================================================================= -->
     <div id="header">
      <div id="logo">
	   <img src="images/header.png" style="width: 89%; height: 100%;"></img>
   </div>
   </div>
<!--========================================================================Header end =================================================================-->
	<div id="menu">
		<ul>
		  <li><a href="Home.html"title="" style="margin-left:155px;">Home</a></li> 
		  <li><a href="Aboutas.php" title="">About us</a></li>
		  <li><a href="contactus.html" title="">contact us</a>
		  <!--<li><a href="signUp.php" title="">Sign Up</a></li>-->
		  <!--<li><a href="login.php" title="">Log In</a></li>--->
		 <li><a href="logout.php" title="">Logout</a></li>
		</ul>
	 </div>
<!--=======================================================================start page ====================================================================-->
	<div id="page">
<!--================================================================ start leftbar ======================================================================-->
	 <div id="leftbar" class="sidebar">
			<h2>REGISTRATION</h2>
			 <div class="back">
                  <ul>
 				    <li><a href="prisonregistor.php">Register prisoner</a></li>
					<li><a href="newPrisonerRegistration.php">new prisoner registration</a></li>
					<li><a href="visitorregistration.php">Registor Visitor</a></li>
					<li><a href="tran.php">Transfer request</a></li>
					<li><a href="conditionalReleaseCaseRequest.php">conditional release case request</a></li>
				</ul>
		 </div>
	 <div class="bottom">
  </div>
<!--===============================================================<div class="bottom"></div>=============================================================-->
<!--===============================================================<div class="bottom"></div>============================================================-->
	<h2>View</h2>
	  <div class="back">
			<ul>
			  <li><a href="viewSchedule.html">View Schduling time</a></li>
			  <li> <a href="viewPrisonerInfo.php"> View prisoner information</a></li>
			  <li><a href="view Transfer.php" title="">View Transfer Request</a></li>
			  <li><a href="viewCondRelease.php" title="">ViewConditionalReleaseCase</a></li>
			</ul>
			</div>
	 <div class="bottom"></div>
	</div>
<!--================================================================================================================================= end leftbar -->
<!-- =======================================================================================================================start content -->
	
	    <div id="content">
		<div class="post">
         <form name="frm" action="registerprisinor.php" method="post" onSubmit="return register()"><br> 
          <caption><h2>Conditional Release case Request Form </h2></CAPTION>
	     <table>
        <tr>
            <p><td height="40"> FIRST NAME :</td>
            <td><input type="text" name="firstName" size="20"></td>	
		</tr>
	   
			<tr>
            <p><td height="33"> LAST NAME :</td>
            <td><input type="text" name="lastName" size="20"></td>	
		</tr>
	  
		<tr>
            <p><td height="48">for conditional release:</td>
            <td><input type="text" name="prisoner ID" size="20"></td>
				
		</tr>
		
		<tr>
            <p> <td height="41">PrisonerId:</td>
            <td><input type="text" name="prisonerId" size="20"></td>
				 
		</tr>
		
		<tr>
			<p><td height="36"> year Of Punishment:</td>
			<td><input type="text" name="year Of Punishment" size="20"></td>
		 </tr>
		
		 <tr>
				<p><td height="49"> crime committed: </td>
				<td><input type="text" name="crime committed" size="20"></td>
		  </tr>
		 <tr>	<br><br>
			<td height="76">Sex:</td> 
			<br><br>     
			<td><SELECT name="sex">Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
			<OPTION value="male">Male
			<OPTION value="fmale">Female
			</select><br><br><br>
		 <tr>
	 
		 <tr>
			<td><a href="manalogin.html"><input type="submit" value="submit" ></a></td>
			<td><input type="button" value="reset"></td><br /><BR>
		</tr>
	</table>
</form>
		</div>
	 </div>
	 <h2>View</h2>
				<div class="back">
				<ul>
					<li><a href="viewSchedule.php">View Schduling time</a></li>
					 <li> <a href="viewPrisonerInfo.php"> View prisoner information</a></li>
				  </ul>
				</div><div class="bottom"></div>
				
<!-- =============================================================================end content =================================================================-->
<!--============================================================================ start rightbar=================================================================-->
	<div id="rightbar" class="sidebar">
				<h2>Operation</h2>
				 <div class="back">
				<ul>
					<!--<li><a href="search1.html">Update PrisonerInformation</a></li>-->
					<li><a href="search1.php">search prisoners</a></li>
					<li><a href="updateInfo.php" title="">Update Info</a></li>
					<li><a href="changePassword.php" title="">Change Password</a></li>
					</ul>
	          </div>
<div class="bottom"></div>	
          <h2>SERVICE</h2>
                 <div class="back">
				<ul>
					<li><a href="#">JobOpportunity</a></li>
					<!--<li><a href="#">Update</a></li>-->
					
				</ul>
				</div>	
			
				
<!--=========================================================== end rightbar =======================================================================-->
	<div style="clear: both;">&nbsp;</div>
     </div>
<!--============================================================ end page============================================================================= -->
   <div id="footer">
    <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=========================================================End of notice ===============================================================================-->
    </p>
  </div>
 </div>
</body>
