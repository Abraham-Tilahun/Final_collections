
      <html>
         <head>
		    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		    <title>CREATE ACCOUNT FOR STAFFADMIN</title>
		    <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
        </head>
       <body>
	  <div id="main">
<!--==================================================================start header========================================================================== -->
             <div id="header">
               <div id="logo">
		      <img src="images/header.png" style="width: 100%; height: 100%;"></img>
	       </div>
		  
<!--==========================================================================Header end =====================================================================-->
	    </div>
<!--======================================================================== end header ======================================================================-->
       <div id="menu">
		     <ul>
				<li><a href="adminstrator.php"title="" style="margin-left:155px;">Home</a></li> 
				<li><a href="Aboutas.php" title="">About us</a></li>
				<li><a href="contactus.html" title="">contact us</a>
				<li><a href="logout.php" title="">Logout</a></li>
		   </ul>
       </div><br/>
<!-- ====================================================================start page========================================================================= -->
	 <div id="page">
	<!--================================================================= start leftbar====================================================================== -->
	  <div id="leftbar" class="sidebar">
			 <h2>REGISTRATION</h2>
			  <div class="back">
			      <ul>
					<li><a href="changePasswordAdmin.php">changePassword</a></li>
					<li><a href="messageSeeadmin.php">messageSeeform</a></li> 
					<li><a href="staffadmin.php">Create user account</a></li>
				</ul>
		    </div>
	   </div>
<!--==================================================================== end leftbar========================================================================= -->
<!--===================================================================== start content =======================================================================-->
     <div id="content">
		          <div class="post">

           
                  <form  type="multipart/form-data" name="myForm" action="staff1.php" method="post" onsubmit="return (Register());" 
					    <h2><b>OFFICER REGISTERATION FORM </h2><br><br>
		               <table style color:black;>
				    <tr>
					<p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FirstName:</td><td><input type="text" name="fname" size="18" pattern="[A-Za-z]{2,8}" 
					oninvalid="setCustomValidity('First Name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				    </tr>
			       <tr>
					<p><td height="34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lastName:</td><td><input type="text" name="lname" size="18" pattern="[A-Za-z]{2,8}" 
					oninvalid="setCustomValidity('Last Name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				    </tr>
				    <tr>
					<p><td height="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; birthDate :</td><td><input type="text" name="birthDate" size="18" pattern="[0-9]+/[0-9]+/[0-9]+"
					oninvalid="setCustomValidity('First Name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				    </tr>
				
				
				<tr>				
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City:</td><td><input type="text" name="City" size="18" pattern="[A-Za-z]+"
					oninvalid="setCustomValidity('city is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				</tr>
				
				<tr>
					<p><td height="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; kebele:</td><td><input type="text" name="kebele" size="18" pattern="[A-Za-z]+[\s][A-Za-z]+||[A-Za-z]+/[0-9]+||[A-Za-z]+[A-Za-z]+||[0-9]+"
					oninvalid="setCustomValidity('kebele is required')" onChange="try{setCustomValidity('')} catch(e){}"required="required"></td>
				</tr>
				<tr>
					<p><td height="34"> house_phone_number:</td><td><input type="text" name="house_phone_number" size="18" pattern="251[1-9][0-9][0-9]{6}|011[1-9][0-9]{6}"
					oninvalid="setCustomValidity('house_phone_number is required')" onChange="try{setCustomValidity('')} catch(e){}"required="required"></td>
				</tr>
				<tr>
					<p><td height="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Office_Phone_No :</td><td><input type="text" name="Office_Phone_No" size="18" pattern="251[1-9][0-9][0-9]{6}|011[1-9][0-9]{6}"
					oninvalid="setCustomValidity('Office_Phone_No is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				</tr>
				<tr>
					<p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cell_phone:</td><td><input type="text" name="cell_phone" size="18" pattern="09[1-9][0-9][0-9]{6}|011[1-9][0-9]{6}"
					oninvalid="setCustomValidity('cell_phone is required')" onChange="try{setCustomValidity('')} catch(e){}"required="required"></td>
				</tr>
				<tr>	
					<td height="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Sex:</td>
						<td>
					<SELECT name="sex">
					<OPTION value="male">Male
					<OPTION value="female">Female
					</select></td>
				</tr>
				<tr>	
					<td height="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Role:</td>
						<td>
							<SELECT name="Role">
							<OPTION value="Admin">Administrator</option>
							<OPTION value="RegistralOf">Registrar OFFICER</option>
							<option value="policeOf">Police Officer</option>
							<option value="diciplineOf">Discipline Officer</option>
							<option value="releaseCase">Release Case Officer</option>
							<option value="CourtDecision">Court Decision</option>
					</select></td>
				</tr>
				<tr>
					<td height="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Region:      
					<td>
						<SELECT name="region">Region
							<OPTION value="Tgray">Tgray
							<OPTION value="afar">Afar
							<OPTION value="amhara">Amhara
							<OPTION value="Oromiya">Oromiya
							<OPTION value="Somalia">Somalia
							<OPTION value="benishangul gumiz">Benishangul gumz
							<OPTION value="SNNPPR">SNNPPR
							<OPTION value="Gambela">Gambela
							<OPTION value="Hareri">Hareri
						</select>
					  </td>
                      </tr>
			
				
				      <tr>
				             <td height="99" align="right"><input type="submit" value="Submit" style ></a></td>
					         <td align="right"><input type="reset" value="Reset"></td><br>
				      </tr>
	
		       </table>
	          </form>			
		      </div>
	          </div>
   <div class="bottom"></div>
				
<!--=================================================================================== end content =============================================================-->
     <div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
					<li><a href="viewPrisonerInfoAdmin.php"> View Prisoner information</a></li>
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