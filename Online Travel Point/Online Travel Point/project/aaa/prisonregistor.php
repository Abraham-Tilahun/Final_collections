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
					<li><a href="Home.php"title="" style="margin-left:155px;">Home</a></li> 
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
					        <li><a href="prisonRegreg.php"> prison registration </a></li>
					<li><a href="newPrisonerRegistration.php"> new prisoner registration </a></li>
					<li><a href="search1.php"> search prisoners </a></li>
					<li><a href="tran.php"> Add Transfer request</a></li> 
					<li><a href="conditionalReleaseCase.php">Add conditional release case request</a></li>
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
					<td height="23">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;room number:      
				   <td>
						    <OPTION value="1">1
							<OPTION value="2">2 
							<OPTION value="3">3
							<OPTION value="4">4
							<OPTION value="5">5
							<OPTION value="6">6 
							<OPTION value="7">7
							<OPTION value="8">8
							<OPTION value="9">9
							<OPTION value="10">10 
							<OPTION value="11">11
							<OPTION value="12">12
							<OPTION value="12">13
							<OPTION value="12">14
							<OPTION value="12">15
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
					                   <li> <a href="viewPrisonerInformation.php"> View prisoner information </a></li>
										<li><a href="search1.html">Update PrisonerInformation</a></li>
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
