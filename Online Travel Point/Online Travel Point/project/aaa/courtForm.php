    <html>
        <head>
		  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		  <title> COURT FORM</title>
		  <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
       </head>
       <body>
	  <div id="main">
<!--================================================================== start header==================================================-->
              <div id="header">
				 <div id="logo">
				  <img src="images/header.png" style="width: 100%; height: 100%;"></img>
				</div>
			 </div>
<!-- ================================================================= end header=====================================================-->
			<div id="menu">
				         <ul>
					       <li><a href="Home.html"title="" style="margin-left:155px;">Home</a></li> 
					       <li><a href="Aboutas.php" title="">About us</a></li>
					       <li><a href="contactus.html" title="">contact us</a>
					       <li><a href="logout.php" title="">Logout</a></li>
				        </ul>
		       </div><br/>
<!-- ================================================================ start page ======================================================-->
               <div id="page">
<!-- ================================================================ start leftbar====================================================-->
	            <div id="leftbar" class="sidebar">
			         <h2>REGISTRATION</h2>
			           <div class="back">
                           <ul>
					          <li><a href="staff.php">STAFF</a></li>
				              <li><a href="Schedul.php">Schedule</a></li>
					          <li><a href="search1.php">search prisoners</a></li>
							  <li><a href="updateCourtDecision.php">update prisoners</a></li>
 				              <li><a href="decision.php">court decision</a></li>
					          <li><a href="prisonReg.php">prison registration</a></li>
					          <li><a href="newPrisonerRegistration.php"> new prisoner registration</a></li>
					          <li><a href="visitorregistration.php"> Register Visitor</a></li>
							  <li><a href="courtForm.php">court registration</a></li>
					        <li><a href="conditionalReleaseCase.php">conditional release case</a></li>
				       </ul>
			         </div>
	             </div>
<!--=============================================================== end leftbar==========================================================-->
<!-- start content -->
	      <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	 
		      <div class="post">
                   <form  type="multipart/form-data" name="myForm" action="court.php" method="post" onsubmit="return (Register());" 
					    <h2>COURT REGISTRATION FORM </h2><br><br>
		                  <table style="color: black;">
									<tr>
										<td height="24">court code:</td><td><input type="text" name="courtCode" size="18" pattern="[A-Za-z]+/[0-9]+"
										oninvalid="setCustomValidity('First Name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
									</tr>
				                   <tr>
										<td height="25">&nbsp;&nbsp;&nbsp;&nbsp; location:</td><td><input type="text" name="Location" size="18" pattern="[A-Za-z]+"
										oninvalid="setCustomValidity('Last Name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				                  </tr>
				                <tr>
					<td height="33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; court: </td>     
				   <td>
						<SELECT name="courtName">court name
							<OPTION value="woreda high court">woreda court
							<OPTION value="regional high court">regional high court
							<OPTION value="federal high court">federal high court
						</select>
				   </td>
                </tr>
				
				<tr>
			      <td height="36" align="right"><input type="submit" value="Submit" style ></td>
					<td align="right"><input type="reset" value="Reset"></td><br>
				</tr>
            </table>
	   </form>		
	    </div>
	   </div>
<!--======================================================================== end content ==========================================================================-->
<!--========================================================================= start rightbar======================================================================== -->
	      <div id="rightbar" class="sidebar">
				   <h2>View</h2>
			       <div class="back">
				        <ul>
					      <li><a href="viewSchedule.php">View Schedule</a></li>
					       <li> <a href="viewPrisonerInformation.php"> View prisoner information</a></li>
					       <li><a href="viewTransfer.php" title="">ViewTransferRequest</a></li>
					       <li><a href="viewCon.php" title="">ViewConditionalReleaseCase</a></li>
				      </ul>
			        </div>
				   <div class="bottom"></div>	
<!--======================================================= end rightbar====================================================================================-->
	                              <div style="clear: both;">&nbsp;</div>
                                   </div>
 <!--======================================================== end page========================================================================================== -->
                                 <div id="footer">
                                   <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=================================================================End of notice ==============================================================-->
</p>

</div>
</div>
</body>
