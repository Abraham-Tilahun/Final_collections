      <html>
        <head>
		   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		   <title> VISITOR REGISTERATION FORM</title>
		   <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
       </head>
       <body>
 <!-- =================================================== start header================================================== -->
		  <div id="main">
            <div id="header">
               <div id="logo">
				 <img src="images/header.png" style="width: 100%; height: 100%;"></img>
			   </div>
			</div>
<!---==================================================== Header end ===================================================== -->

		<div id="menu">
			<ul>
				<li><a href="police.php"title="" style="margin-left:155px;">Home</a></li> 
				<li><a href="Aboutas.php" title="">About us</a></li>
				<li><a href="contactas.php" title="">contact us</a>
				<li><a href="logout.php" title="">Logout</a></li>
			</ul>
	 </div><br/>
<!-- ================================================== start page ====================================================== -->
 <div id="page">
	<!--================================================================= start leftbar====================================================================== -->
         <div id="leftbar" class="sidebar">
			 <h2>REGISTRATION</h2>
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
<!-- ================================================= end leftbar====================================================== -->
<!-- =============================================================================================start content======================================================== -->
	<div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	  <div class="post">
         <form  type="multipart/form-data" name="myForm" action="visitor.php" method="post" onsubmit="return (Register());" 
		   <h2>VISITOR REGISTERATION FORM </h2><br><br>
		   <table style="color: black;">
					<!--Select Image:<input type="file" name="file" accept="image/*">-->
				<tr>
					<p><td height="33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FirstName:</td><td><input type="text" name="fname" size="18" pattern="[A-Za-z]{2,8}"
					oninvalid="setCustomValidity('First Name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				<tr>
				
				<tr>
					<p><td height="33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lastName:</td><td><input type="text" name="lName" size="18" pattern="[A-Za-z]{2,8}"
					oninvalid="setCustomValidity('last name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				</tr>
				<tr>
					<p><td height="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;birthDate :</td><td><input type="text" name="birthDate" size="18" pattern="[0-9]+/[0-9]+/[0-9]+"
					oninvalid="setCustomValidity('birth date is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				</tr>
				<tr>
					<p><td height="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;visitorId:</td><td><input type="text" name="visitorId" size="18" pattern="[0-9]+"
					oninvalid="setCustomValidity('visitor id  is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				</tr>
				
				<tr>
					<p><td height="35">House_Phone_No:</td><td><input type="text" name="House_Phone_No" size="18" pattern="251[1-9][0-9][0-9]{6}|011[1-9][0-9]{6}"
					oninvalid="setCustomValidity('House_Phone_No is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				</tr>
				<tr>
					<p><td height="31">Office_Phone_No :</td><td><input type="text" name="Office_Phone_No" size="18" pattern="251[1-9][0-9][0-9]{6}|011[1-9][0-9]{6}"
					oninvalid="setCustomValidity('Office_Phone_No is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				</tr>
				<tr>
					<p><td height="34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cell_Phone :</td><td><input type="text" name="cell_phone" size="18" pattern="09[1-9][0-9][0-9]{6}|011[1-9][0-9]{6}"
					oninvalid="setCustomValidity('Cell_Phone is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				</tr>
				
				<tr>				
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City:</td><td><input type="text" name="city" size="18" pattern="[A-Za-z]+[\s][A-Za-z]+|[A-Za-z]+[A-Za-z]+"
					oninvalid="setCustomValidity('city is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				</tr>
				<tr>
					<p><td height="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kebele:</td><td><input type="text" name="kebele" size="18" pattern="[A-Za-z0-9]+"
					oninvalid="setCustomValidity('kebele is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				</tr>
				
				<tr>
					<td height="34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sex:</td>
					  <td>
					<SELECT name="sex">
					<OPTION value="male">Male
					<OPTION value="female">Female
					</select> 
					 </td>
				</tr>
		        <tr>
                  <td height="49">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Region:      
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
					<td align="right"><input type="submit" value="Submit" style ></a></td>
					<td align="right"><input type="reset" value="Reset"></td>
				</tr>
			</table>
	    </form>	
	</div>
</div>
<!--============================================================================================ end content ===================================================-->
<!-- ========================================================================================start rightbar====================================================== -->

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
 