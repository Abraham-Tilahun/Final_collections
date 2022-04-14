   <?php
$pid=$_POST["prisonerId"];
   ?>
   <html>
        <head>
		 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		 <title>ADD PRISONER CONDITIONAL RELEASE CASE</title>
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
					 <li><a href="Aboutas.php" title="">About as</a></li>
			         <li><a href="contactas.php" title="">contact as</a></li>
			         <li><a href="login.php" title="">LogIn</a></li>
				  </ul>
		    </div><br/>
			<div id="page">
<!--===================================================================== start page============================================================================ -->
<!--===================================================================== start leftbar======================================================================== -->
   <div id="page">
	 <div id="leftbar" class="sidebar">
			 <h2>REGISTRATION</h2>
			  <div class="back">
			      <ul>
					 <li><a href="changePasswordRegistral.php">changePassword</a></li>
				    <li><a href="prisonRegreg.php"> prison registration </a></li>
					<li><a href="blockReg.php"> Block registration </a></li>
				    <li><a href="roomReg.php"> Room registration </a></li>
					<li><a href="newPrisonerRegistration.php"> new prisoner registration </a></li>
					<li><a href="search1.php"> search prisoners </a></li>
					<li><a href="tran.php"> Add Transfer request</a></li> 
					<li><a href="addCondRe.php">Add conditional release case request</a></li>
				</ul>
		    </div>
	   </div>
<!--============================================================================ end leftbar===================================================================== -->
<!-- ===========================================================================start content================================================================== -->
                 <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	 </BR></BR></BR></BR>
       <form name="frm" action="conditionalRequest.php" method="post" onSubmit="return register()"><br> 
            <caption><h2 style="padding-left:100px"> add conditional release request </h2></CAPTION></BR>
			<table style="padding-left:100px color:Black">
			<tr>
				<td height="25">year of punishment:&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="yop" size="18" pattern="[0-9]{1,8}" 
				oninvalid="setCustomValidity('Last Name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
			 </tr>
			 <tr>
				 <p><td height="25">date of request:</td><td><input type="text" name="dor" size="18" pattern="[0-9]+/[0-9]+/[0-9]+"
				 oninvalid="setCustomValidity('prisoner id is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
			 </tr>
			 <tr>
				 <p><td height="25">crime committed:</td><td><input type="text" name="cc" size="18" pattern="[A-Zz-a]+"
				 oninvalid="setCustomValidity('prisoner id is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
			 </tr>
			<tr><td><td><input type="hidden" name="pid" size="18" value="<?php echo $pid; ?>"></td></td></tr>
		    <td >&nbsp;&nbsp;<input type="submit" value="submit" ></a></td>
		    <td><input type="button"  value="Back"  onclick="window.history.back();"></td>
		 </tr>
	</table>
  </form>
</div>
 </div>
<!-- =========================================================================end content===================================================================== -->
<!--========================================================================= start rightbar ===============================================================-->
	  <div id="rightbar" class="sidebar">
		 <h2>View</h2>
			<div class="back">
				<ul>
					<li> <a href="viewPrisonerInformationreg.php"> View prisoner information </a></li>
					<li><a href="viewTransReg.php">View Transfer Request</a></li>
					<li><a href="viewConreg.php" title=""> ViewConditionalReleaseCase </a></li>
				   </ul>
	</div>
				
	<!-- end====================================================================================== rightbar====================================================== -->
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
