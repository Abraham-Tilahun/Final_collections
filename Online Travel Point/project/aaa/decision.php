  <?php
  include("dbconnet.php");
  mysql_select_db('PRISON');
  $sql="SELECT * FROM  conditional_release_case_request";
		mysql_select_db('PRISON');
		$retval = mysql_query($sql);
		if(!$retval)
		{
			die('can not'.mysql_error());
		}
		
        ?>  
   
        <html>
        <head>
		 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		 <title>DECISION FORM </title>
		 <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
        </head>
        <body>
	<div id="main">
<!-- ========================================================== header====================================================================================== -->
                <div id="header">
				 <div id="logo">
				  <img src="images/header.png" style="width: 100%; height: 100%;"></img>
	             </diva>
			   </div>
<!--================================================================Header end =============================================================================-->
<!-- ===============================================================end header=============================================================================== -->
			<div id="menu">
				    <ul>
					 <li><a href="CourtDecision.php"title="" style="margin-left:155px;">Home</a></li> 
				      <li><a href="Aboutas.php" title="">About us</a></li>
				     <li><a href="contactus.html" title="">contact us</a>
				     <li><a href="logout.php" title="">Logout</a></li>
				    </ul>
				  </ul>
		    </div><br/>
<!--===================================================================== start page============================================================================ -->
    <div id="page">
<!--===================================================================== start leftbar======================================================================== -->
   <div id="page">
     <div id="leftbar" class="sidebar">
			 <h2>REGISTRATION</h2>
			  <div class="back">
			      <ul>
					<li><a href="decision.php">Add court decision</a></li>
					<li><a href="changePasswordCourt.php">change Password</a></li>
					<li><a href="updateCourtDecisioncour.php">updateCourtDecision</a></li>		
				</ul>
		    </div>
	   </div>
<!--============================================================================ end leftbar===================================================================== -->
<!-- ===========================================================================start content================================================================== -->
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
							<p><td height="35">DateOfConviction:</td><td><input type="text" name="DateOfConviction" size="18" pattern="[0-9]+/+[0-9]+/[0-9]+"
							oninvalid="setCustomValidity('date is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
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
<!--===============================================================================end content===================================================================== -->
<!--========================================================================= start rightbar ===============================================================-->
	  <div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
					<li><a href="viewPrisonerInfoCourt.php"> View Prisoner information</a></li>
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
