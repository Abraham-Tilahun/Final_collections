    <html>
      <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>STAFF REGISTERATION FORM</title>
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
					<li><a href="courtreg.php"title="" style="margin-left:155px;">Home</a></li> 
					<li><a href="Aboutas.php" title=""> About us </a></li>
					<li><a href="contactus.php" title=""> contact us </a>
					<li><a href="logout.php" title=""> Logout </a></li>
				  </ul>
		    </div><br/>
<!-- =================================================start page=============================================================================================== -->
		       <div id="page">
<!--================================================ start leftbar========================================================================================== -->
	               <div id="leftbar" class="sidebar">
			              <h2>REGISTRATION</h2>
			       <div class="back">

				        <ul>
							<li> <a href="decisicour.php">court decision</a></li>
							<li> <a href="viewPrisonerInformaticour.php"> View prisoner information</a></li>
							<li><a href="updateCourtDecisioncour.php">update prisoner's court decision </a></li>
							<li><a href="changePasswordCourt.php">change Password</a></li> 
				</ul>
			        </div>
				
	             </div>
	<!-- end leftbar -->
<!--====================================================== start content====================================================================================== -->
	
                  <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	 
		          <div class="post">

                 
                  <form  type="multipart/form-data" name="myForm" action="decision1.php" method="post" onsubmit="return (Register());" >
					    <h2><b>DECISION FORM </h2><br><br><br>
						<table style="color: black;">
						<tr>
							<p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prisoner Id:</td><td><input type="text" name="Pid" size="18" pattern="[0-9]+"	
							oninvalid="setCustomValidity('Prisoner Id is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
						</tr>
						<tr>
							<p><td>CourtOfConviction:</td><td><input type="text" name="courtOfConviction" size="18" pattern="[A-Za-z]+"	
							oninvalid="setCustomValidity('cort of conviction is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
						</tr>
						
						<tr>
							<p><td height="35">DateOfConviction:</td><td><input type="text" name="DateOfConviction" size="18" pattern="[0-	9]+/+[0-9]+/[0-9]+"
							oninvalid="setCustomValidity('date is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
						</tr>
						
						<tr>
							<p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CaseType:</td><td><input type="text" name="CaseType" size="18" pattern="[A-Za-z]+"
							oninvalid="setCustomValidity('Date is required')" onChange="try{setCustomValidity('')} catch(e){}"required="required"></td>
						</tr>

						<tr>
							<p><td height="34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DecisionType:</td>
							<td><input type="text" name="DecisionType" size="18" pattern="[A-Za-z]+"
							oninvalid="setCustomValidity('date is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
						</tr>
						<tr>
							<p><td height="27"> yearOfPunishment:</td>
							<td><input type="text" name="yearOfPunishment" size="18" pattern="[0-9]+"
							oninvalid="setCustomValidity('offence type is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
						</tr>
				
						<tr>
							<p><td height="35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dateOfRelease:</td>
							<td><input type="text" name="date_of_release" size="18" pattern="[0-9]+/+[0-9]+/[0-9]+"
							oninvalid="setCustomValidity('Date is required')" onChange="try{setCustomValidity('')} catch(e){}"required="required"></td>
						</tr>
						<tr>
			      <td height="36" align="right"><input type="submit" value="Submit" style ></td>
					<td align="right"><input type="reset" value="Reset"></td><br>
				</tr>
				   </table>
	         
                </form>
		      			
		      </div>
	          </div>
<!--====================================================== end content====================================================================================== -->
	<!-- ===================================================start rightbar ====================================================================================-->
	                    
 <!--======================================================== end page========================================================================================== -->
                       <div id="footer">
                     <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=================================================================End of notice ==============================================================-->
         </p>
    </div>
  </div>
 </body>
