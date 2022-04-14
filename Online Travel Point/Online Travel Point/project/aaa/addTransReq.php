    <html>
       <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title> TRANSFER REQUEST FORM</title>
		<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
      </head>
        <body>
		<div id="main">
<!--=============================================================== start header ===========================================================================-->
          <div id="header">
				<div id="logo">
				 <img src="images/header.png" style="width: 100%; height: 100%;"></img>
				</div>
		</div>
<!--================================================================Header end============================================================================== -->
<!-- -=============================================================end header================================================================================ -->
			  <div id="menu">
				    <ul>
					   <li><a href="dicipline.php"title="" style="margin-left:155px;">Home</a></li> 
					   <li><a href="Aboutas.php" title="">About us</a></li>
					   <li><a href="contactus.html" title="">contact us</a>
					   <li><a href="logout.php" title="">Logout</a></li>
				    </ul>
		       </div>
<!--=================================================================== start page ===========================================================================-->
		     <div id="page">
<!-- =================================================================start leftbar========================================================================= -->
	   <div id="leftbar" class="sidebar">
			 <h2>REGISTRATION</h2>
			  <div class="back">
			      <ul>
				  <li><a href="addCondRe.php" title="">Add Conditional Release Case request</a></li>
					<li><a href="addTransReq.php">Add Transfer Request</a></li>
					<li><a href="changePassword.php">changePassword</a></li>
				</ul>
		    </div>
	   </div>
<!--=================================================================== end leftbar======================================================================== -->
<!-- ==================================================================start content =====================================================================-->
	 <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
		 <div class="post">
          <form name="myForm" action="Transfer.php" method="post" onsubmit="return (transfer());"> 
           <h2>TRANSFER REQUEST FORM </h2>
           <table style="color: black;">
					   <tr>
						<p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First name:</td><td><input type="text" name="fName" size="20" pattern="[A-Za-z]{2,8}"
						oninvalid="setCustomValidity('firstname is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required"></input>*</td>	
					   </tr>
						<tr>
						   <p><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name:</td><td><input type="text" name="lName" size="20"pattern="[A-Za-z]{2,8}"
							oninvalid="setCustomValidity('LastName is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required"></input>*</td>	
						</tr>
					   <tr>
						 <p><td>case of transfer:</td><td><input type="text" name="caseOfTransfer" size="20"pattern="[A-Za-z]+"
						 oninvalid="setCustomValidity('cause of trensfer is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required"></input>*</td>
					 </tr>
					  <tr>
						<p> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; prisoner Id:</td><td><input type="text" name="prisonerId" size="20" pattern="[0-9]+"
						oninvalid="setCustomValidity('Prison id is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required"></input>*</td>
					</tr>
					<tr>
						<p> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From:</td><td><input type="text" name="from" size="20" pattern="[A-Za-z]+[\s][A-Za-z]+|[A-Za-z]+[A-Za-z]+"
						oninvalid="setCustomValidity('From is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required"></input>*</td></td>
					</tr>
					<tr>
						<p> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To:</td><td><input type="text" name="to" size="20" pattern="[A-Za-z]+[\s][A-Za-z]+|[A-Za-z]+[A-Za-z]+"
						oninvalid="setCustomValidity('To is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required"></input></td>
					</tr>
					<tr>
						<p> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:</td><td><input type="text" name="date" size="20" pattern="[0-9]+/[0-9]+/[0-9]+"
						oninvalid="setCustomValidity('Date is required')" onchange="try{setCustomValidity('')} catch(e){}" required="required"></input></td>
				  <tr>
					<td height="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sex:</td>
							<td>
							 <SELECT name="sex">
							 <OPTION value="male">Male
							 <OPTION value="female">Female
							</select></td>
					 </tr>
					 <tr>
					  <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="submit" value="submit" ></a></td>
					  <td align="center"><input type="reset" value="reset"></td><br />
				   </tr>
      </table>
   </form>		
  </div>
</div>
<!-- ==========================================================================end content==================================================================== -->
<!-- =========================================================================start rightbar================================================================== -->
   <div id="rightbar" class="sidebar">
   <h2>View</h2>
	   <div class="back">
		 <ul>
		   <li><a href="viewConditinReq.php" title="">View Conditional Release Case request</a></li>
		   <li><a href="viewTransDici.php">View Transfer Request</a></li>
		   <li><a href="viewPrisonerDeci.php">View Prisoner Information</a></li>
		 </ul>
		 </div>
<div class="bottom"></div>	
<!--======================================================= end rightbar====================================================================================-->
<div style="clear: both;">&nbsp;</div>
</div>
<!--============================================================================================= end page================================================== -->
         <div id="footer">
        <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>
<!--=============================================================================================End of notice -->
       </p>
     </div>
    </div>
   </body>
