<?php
						$dbhost = 'localhost';
						$dbuser = 'prison';
						$dbpass = 'prison';
						$conn =mysql_connect($dbhost, $dbuser, $dbpass);
						if(! $conn )
						{  
							die('Could not connect: ' . mysql_error());    
						}												
						$sql="SELECT * FROM  block";
						mysql_select_db('PRISON');
						$retval = mysql_query($sql);
						if(!$retval)
						{
							die('can not'.mysql_error());
						}
						
						$sql1="SELECT * FROM  Room";
						mysql_select_db('PRISON');
						$retval1 = mysql_query($sql1);
						if(!$retval)
						{
							die('can not'.mysql_error());
						}
						
						$sql2="SELECT * FROM  prison";
						mysql_select_db('PRISON');
						$retval2 = mysql_query($sql2);
						if(!$retval2)
						{
							die('can not'.mysql_error());
						}
?>
      <html>
         <head>
		    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		    <title> NEW PRISONER REGISTERATION FORM</title>
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
				<li><a href="registral.php"title="" style="margin-left:155px;">Home</a></li> 
				<li><a href="Aboutas.php" title="">About us</a></li>
				<li><a href="contactas.php" title="">contact us</a>
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
<!--==================================================================== end leftbar========================================================================= -->

<!-- start content -->
	      <div id="content" style="background: none repeat scroll 0% 0% rgb(80, 180, 188);">
	 
		      <div class="post">
			  <?php
			       session_start();
				   if (isset($_SESSION['error'])){
				   echo '<h3 style="text-align:center;color:red">'.$_SESSION['error'].'</h3></br>';
				   unset($_SESSION['error']);
					}
				   else if (isset($_SESSION['sucess'])){
				   echo '<h3 style="text-align:center;color:green">'.$_SESSION['sucess'].'</h3></br>';
				   unset($_SESSION['sucess']);
					}
				  ?>
                   <form   enctype="multipart/form-data" name="myForm" action="registraiton.php" method="post" onsubmit="return (Register());" 
					    <h2><b>NEW PRISONER REGISTERATION FORM </h2>
		                  <table style="color: black;"></td>
					        <tr><td>Select Prisoner photo:
					        <td><input type="file" name="pic" style="width:165px" accept="image/*"></td></tr>
				               <tr>
					            <td height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First name:</td><td><input type="text" name="fname" size="18" pattern="[A-Za-z]{2,8}" 
					               oninvalid="setCustomValidity('First Name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
			                </tr>
				                   <tr>
					                <td height="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name:</td><td><input type="text" name="lname" size="18" pattern="[A-Za-z]{2,8}" 
					                 oninvalid="setCustomValidity('Last Name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				                  </tr>
				                 
				                <tr>
					          <p><td height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; birthDate :</td>
					          <td><input type="text" name="birthDate" size="18" pattern="[0-9]+/[0-9]+/[0-9]+"
					          oninvalid="setCustomValidity('First Name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				            </tr>
				            <tr>
					        <p><td height="24">House_Phone_No:</td>
					        <td><input type="text" name="House_Phone_No" size="18" pattern="251[1-9][0-9][0-9]{6}|011[1-9][0-9]{6}"
					         oninvalid="setCustomValidity('First Name is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				          </tr>
				         <tr>
					     <p><td height="24">Office_Phone_No :</td>
					     <td><input type="text" name="Office_Phone_No" size="18" pattern="251[1-9][0-9][0-9]{6}|011[1-9][0-9]{6}"
					     oninvalid="setCustomValidity('Office_Phone_No is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				       </tr>
				      <tr>
					  <p><td height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cell_Phone :</td>
					  <td><input type="text" name="cell_phone" size="18" pattern="09[1-9][0-9][0-9]{6}|011[1-9][0-9]{6}"
					  oninvalid="setCustomValidity('Cell_Phone is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				      </tr>
				      <tr>
					   <td height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kebele:</td>
					   <td><input type="text" name="kebele" size="18" pattern="[A-Za-z 0-9]+"
					  oninvalid="setCustomValidity('kebele is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				    </tr>
				   <tr>
				   <td height="24">&nbsp;&nbsp;&nbsp;&nbsp;DateOfEntrance:</td>
				   <td><input type="text" name="Dateofentrance" size="18" pattern="[0-9]+/[0-9]+/[0-9]+"
				    oninvalid="setCustomValidity('Date is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td><br />
                 </tr>
				 <tr>
				    <td height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;offence Type :</td>
				    <td><input type="text" name="offenceType" size="18" pattern="[A-Za-z]+"
					oninvalid="setCustomValidity('offence Type is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				  </tr>
				  <tr>				
					<td height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City:</td>
					<td><input type="text" name="City" size="18" pattern="[A-Za-z]+"
					oninvalid="setCustomValidity('city  is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
				</tr>
				<tr>
					<td height="33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Region: </td>     
				   <td>
						<SELECT name="region"style="width:165px" >Region
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
					<td height="22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sex:</td>
						<td>
					     <SELECT name="sex" style="width:165px">
					      <OPTION value="male">Male
					      <OPTION value="female">Female
					      </select></td>
				 </tr>
				 <tr>
			 <td height="33">&nbsp;&nbsp;prison Name:</td>
			 <td><SELECT name="pn" style="width:165px">
			 <?php
		     while($search=mysql_fetch_array($retval2))
			  {
				  $prisonName=$search['prisonName'];
				  echo '<OPTION value="'.$prisonName.'">'.$prisonName.'</option>';
			  }
			  ?>
			  </select>
			  </td>
			 </tr>
				<tr>
			 <td height="33">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block Name:</td>
			 <td><SELECT name="bn" style="width:165px">
			 <?php
		     while($search=mysql_fetch_array($retval))
			  {
				  $prisonName=$search['blockName'];
				  $nob=$search['No_Room'];
				  echo '<OPTION value="'.$prisonName.'">'.$prisonName.'</option>';
			  }
			  ?>
			  </select>
			  </td>
			 </tr>
				<tr>
					<td height="23">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;room number:      
				   <td>
						<SELECT name="rn" style="width:165px">room number
							 <?php
		     while($search1=mysql_fetch_array($retval1))
			  {
				  $nob=$search1['Room_No'];
				  echo '<OPTION value="'.$nob.'">'.$nob.'</option>';
			  }
			  ?>
						</select>
                </td>
               </tr>
				<tr>
			      <td height="36" align="right"><input type="submit" value="Submit" style ></td>
					<td align="right"><input type="reset" value="Reset"></td>
				</tr>
            </table>
	   </form>		
	</div>
</div>
<!--======================================================================== end content ==========================================================================-->
<!--================================================================= start rightbar====================================================================== -->
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
<!--=============================================================== end leftbar==========================================================-->
 <!--======================================================== end page========================================================================================== -->
 <div id="footer">
   <p>Copyright ; 2015  <a href="#">Bair Dar prison administration </a> </p>

<!--=================================================================End of notice ==============================================================-->
</p>

</div>
</div>
</body>
