    <html>
      <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>PRISON REGISTERATION FORM</title>
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
					<li><a href="registral.php"title="" style="margin-left:155px;">Home</a></li> 
					<li><a href="Aboutas.php" title="">About as</a></li>
			         <li><a href="contactas.php" title="">contact as</a></li>
			         <li><a href="login.php" title="">LogIn</a></li>
				  </ul>
		    </div><br/>
<!-- =================================================start page=============================================================================================== -->
		       <div id="page">
<!--================================================ start leftbar========================================================================================== -->
	               <div id="leftbar" class="sidebar">
			              <h2>REGISTRATION</h2>
			       <div class="back">

				        <ul>
					        <li><a href="prisonRegreg.php"> prison registration </a></li>
					         <li><a href="newPrisonerRegistration.php"> new prisoner registration </a></li>
							<li><a href="search1.php"> search prisoners </a></li>
							<li><a href="tran.php"> Add Transfer request</a></li> 
							<li><a href="addCondRe.php">Add conditional release case request</a></li>
							<li><a href="changePasswordRegistral.php">changePassword</a></li>
				        </ul>
			        </div>
				
	             </div>
	<!-- end leftbar -->
<!--====================================================== start content====================================================================================== -->
						<div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
							  <div class="post">

							 
							  <form  type="multipart/form-data" name="myForm" action="prisonRegistration.php" method="post" onsubmit="return (Register());" >
									<h2><b>PRISON REGISTERATION FORM </h2><br><br><br>
									<table style="color: black;">
					   
						 <tr>
							  <td height="41">&nbsp; Number of floor:</td><td><input type="text" name="Number_of_floor" size="18" pattern="[0-9]+"
							  oninvalid="setCustomValidity('block name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
							</tr>
							<tr>
								<td height="33"> Number of room :</td><td><input type="text" name="Number_of_room" size="18" pattern="[0-9]+"
								oninvalid="setCustomValidity('room Number is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td><br />
							</tr>
							<tr>
							   <td height="35">&nbsp;&nbsp;prison location :</td><td><input type="text" name="prisonLocation" size="18" pattern="[A-Za-z]+[\s][A-Za-z]+|[A-Za-z]+[A-Za-z]+"
							   oninvalid="setCustomValidity(' prison location is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
							</tr>
							<tr>
								<td height="23">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prison center:      
							 <td>
									<SELECT name="prison_center"> prison center
										<OPTION value="Bahir Dar prison 1">Bahir Dar prison No1
										<OPTION value="Debre Markos prison">Debre Markos prison 
										<OPTION value="Gonder prison">Gonder prison
										<OPTION value="Debre Tabor prison">Debre Tabor prison
										<OPTION value="Woldiya prison">Woldiya prison
										<OPTION value="Dessie prison ">Dessie prison
										<OPTION value="Bahir Dar prison 1 ">Bahir Dar prison No2
									</select>
							</td>
							</tr>
							  <tr>
								<td height="23">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block Name:      
							   <td>
									<SELECT name="block_Name">Block
										<OPTION value="A">A
										<OPTION value="B">B 
										<OPTION value="C">C
										<OPTION value="D">D
										
										
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
<!--====================================================== end content====================================================================================== -->
	<!-- ===================================================start rightbar ====================================================================================-->
	                    <div id="rightbar" class="sidebar">
				
				             <h2>View</h2>
			                       <div class="back">
				                     <ul>
					                   <li> <a href="viewPrisonerInformationreg.php"> View prisoner information </a></li>
					                   <li><a href="viewTransReg.php">View Transfer Request</a></li>
					                   <li><a href="viewConreg.php" title=""> ViewConditionalReleaseCase </a></li>
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
