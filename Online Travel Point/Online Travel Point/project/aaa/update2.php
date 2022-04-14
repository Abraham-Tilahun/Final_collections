   <?php 
   
							$searchId = $_POST["prid"];
							 $doc=$dt=$yop=$dor="";
							$dbhost = 'localhost';
							$dbuser = 'prison';
							$dbpass = 'prison';
							$conn =mysql_connect($dbhost, $dbuser, $dbpass);
							if(! $conn )
							{  
								die('Could not connect: ' . mysql_error());    
							}						
							$sql3="select * from CourtDecision where prisonerId='$searchId'";
							mysql_select_db('PRISON');
							$retval3 = mysql_query($sql3);
							if(!$retval3)
							{
								die('can not'.mysql_error());
							}
							if($retval3)
							{
								while($search=mysql_fetch_array($retval3))
								{
									  $doc=$search['dateOfConviction'];
									  $dt=$search['DecisionType'];
									  $yop=$search['yearOfPunishment'];
									  $dor=$search['dateOfRelease'];
								}
							} 
							
?>
	
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
					<li><a href="Home.php"title="" style="margin-left:155px;">Home</a></li> 
					<li><a href="Aboutas.php" title=""> About us </a></li>
					<li><a href="contactus.php" title=""> contact us </a>
					<li><a href="logout.php" title=""> Logout </a></li>
				  </ul>
		    </div><br/>
<!-- =================================================start page=============================================================================================== -->
		       <div id="page">
			   <div id="page">
<!--================================================ start leftbar========================================================================================== -->
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
	<!-- end leftbar -->
<!--====================================================== start content====================================================================================== -->
	
                  <div id="content">
		          <div class="post">

                 
                  <form  type="multipart/form-data" name="myForm" action="updateprisoner.php" method="post"  onsubmit="return (Register());" >
					    <h2><b>update court decision form </h2>
						<table style color:black;>
           
		        <tr>
							<p><td height="35">DateOfConviction:</td><td><input type="text" name="doc" value="<?php echo $doc;?>" size="18" pattern="[0-9]+/+[0-9]+/[0-9]+"
							oninvalid="setCustomValidity('date is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
						</tr>

						<tr>
							<p><td height="34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Decision Type:</td><td><input type="text" value="<?php echo $dt;?>" name="dt" size="18" pattern="[A-Za-z]+"
							oninvalid="setCustomValidity('date is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
						</tr>
						<tr>
							<p><td height="27"> year Of Punishment:</td><td><input type="text" name="yop" value="<?php echo $yop;?>" size="18" pattern="[0-9]+"
							oninvalid="setCustomValidity('offence type is required')" onChange="try{setCustomValidity('')} catch(e){}" required="required"></td>
						</tr>
				
						<tr>
							<p><td height="35"> &nbsp;&nbsp;&nbsp;&nbsp; date Of Release:</td><td><input type="text" name="dor" value="<?php echo $dor;?>" size="18" pattern="[0-9]+/+[0-9]+/[0-9]||[0-9]+-[0-9]+-][0-9]+"
							oninvalid="setCustomValidity('Date is required')" onChange="try{setCustomValidity('')} catch(e){}"required="required"></td>
						</tr>
						<tr>
							<td><input type="hidden" name="pid" value="<?php echo $searchId;?>" size="18" pattern="[0-9]+/+[0-9]+/[0-9]+"
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
