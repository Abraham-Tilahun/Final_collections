   <html>
        <head>
		 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		 <title>ApproveRequest</title>
		 <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
        </head>
     <body>
	<div id="main">
<!-- ========================================================== header====================================================================================== -->
              <div id="header">
				 <div id="logo">
				  <img src="images/header.png" style="width: 100%; height: 100%;"></img>
	             </div>
			 </div>
<!--================================================================Header end =============================================================================-->
<!-- ===============================================================end header=============================================================================== -->
			<div id="menu">
				    <ul>
					 <li><a href="registral.php"title="" style="margin-left:155px;">Home</a></li> 
				      <li><a href="Aboutas.php" title="">About us</a></li>
				     <li><a href="contactus.html" title="">contact us</a>
				     <li><a href="logout.php" title="">Logout</a></li>
				  </ul>
		    </div><br/>
<!--===================================================================== start page============================================================================ -->
<!--===================================================================== start leftbar======================================================================== -->
   <div id="page">
	 <div id="leftbar" class="sidebar">
			 <h2>REGISTRATION</h2>
			 <div class="back">
                  <ul>
				    <li><a href="changePasswordDecisipline.php">change Password</a></li>
					<li><a href="approveTransferDecisipline.php">approve prisoner transfer request</a></li>	
				</ul>
			</div>
	</div>
<!--============================================================================ end leftbar===================================================================== -->
<!-- ===========================================================================start content================================================================== -->
	 <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	  <div class="post"></BR></BR></BR></BR></BR>
       <form name="frm" action="approveRequest1.php" method="post" onSubmit="return register()"> 
            <caption><h2 style="padding-left:80px"> Prisoner Conditional Request Approve Form </h2></CAPTION></BR>
			<table style="padding-left:80px">
			<tr>
			<td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PrisonerId:</td><td><input type="text" name="pid" size="18" pattern="[A-Za-z]+/[0-9]+{2,8}" 
			oninvalid="setCustomValidity('PrisonerId is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
		    </tr>
			<tr>
			<td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conditional Release:</td><td><input type="text" name="cr" size="18" pattern="[A-Za-z]+/[0-9]+{2,8}" 
			oninvalid="setCustomValidity('PrisonerId is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
		    </tr>
		    <td ><input type="submit" value="Approve" ></a></td>
		    <td><input type="button"  value="Back"  onclick="window.history.back();"></td>
		 </tr>
	</table>
  </form>
</div>
 </div>
<!-- =========================================================================end content===================================================================== -->
<!--========================================================================= start rightbar ===============================================================-->
	
<<div id="rightbar" class="sidebar">
				   <h2>View</h2>
			        <div class="back">
				     <ul>
					  <li> <a href="viewPrisonerInformationdicip.php"> View prisoner information</a></li>
					<li><a href="viewTransferPrisonerInformatidicip.php" title="">View  Transferred prisoner</a></li>
					<li><a href="viewTransferRequestDecisipline.php" title="">View prisoners' Transfer Request</a></li>
				</ul>
				  </ul>
			   </div>
<!--======================================================================= end rightbar===================================================================== -->
	     <div style="clear: both;">&nbsp;</div>
         </div>
<!--============================================================================ end page=============================================================== -->
        <div id="footer">
          <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=========================================================================End of notice =================================================================-->
       </p>
      </div>
   </div>
  </body>
