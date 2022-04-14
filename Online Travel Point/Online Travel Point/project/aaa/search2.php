    
	
	<html>
      <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>search prisoner information</title>
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
					        <li><a href="staff.php">STAFF</a></li>
					        <li><a href="Schedul.php">Schedule</a></li>
					        <li><a href="search1.php">search prisoners</a></li>
							<li><a href="updateCourtDecision.php">update prisoners</a></li>
 				            <li><a href="decision.php">court decision</a></li>
					        <li><a href="prisonReg.php">prison registration</a></li>
					        <li><a href="newPrisonerRegistration.php">new prisoner registration</a></li>
					        <li><a href="visitorregistration.php">Register Visitor</a></li>
							<li><a href="courtForm.php">court registration</a></li>
					        <li><a href="tran.php">Transfer request</a></li>
					        <li><a href="conditionalReleaseCase.php">conditional release case</a></li>
				        </ul>
			        </div>
				
	             </div>
	<!-- end leftbar -->
<!--====================================================== start content====================================================================================== -->
	
                  <div id="content">
		          <div class="post">
         <?php
		 echo '<table style color:black;>';
           
  
  if(isset($_POST['search']))
  {
		$searchId = $_POST["prid"];
		$dbhost = 'localhost';
		$dbuser = 'prison';
		$dbpass = 'prison';
		$conn =mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $conn )
		{  
			die('Could not connect: ' . mysql_error());    
		}						
		$sql="SELECT * FROM   prisoner where prisonerId='$searchId' and status=0";
		mysql_select_db('PRISON');
		$retval = mysql_query($sql);
		if(!$retval)
		{
			die('can not'.mysql_error());
		}
		if($retval)
		{
			echo '<table border=5 height="500px" width="450px">';
			echo '<tbody>';
			  while($search=mysql_fetch_array($retval))
			  {
				  echo '<img src="'.$search['image_path'].'" style="width: 40%; height: 40%;">';
				 echo '<tr>';
				    echo '<td>'."Prisoner ID: ".'</td>';
					echo '<td>'.$search['prisonerId'].'</td>';
					echo '</tr>';
				  echo '<tr>';
				  echo '<td>'."Prison Name: ".'</td>';
				  echo '<td>'.$search['prisonName'].'</td>';
				  echo '</tr>';
				  echo '<tr>';
					  echo '<td>'."Date of entrance: ".'</td>';
					  echo '<td>'.$search['dateOfEntrance'].'</td>';
					  echo '</tr>';
					  echo '<tr>';
					  echo '<td>'."Offence Type: ".'</td>';
					  echo '<td>'.$search['offenceType'].'</td>';
					  echo '</tr>';
				$sql2="select * from person where personId=".$search['personId']."";
				  mysql_select_db('PRISON');
					$retval2 = mysql_query($sql2);
					if(!$retval2)
					{
						die('can not'.mysql_error());
					}
					if($retval2)
					{
					
						while($search=mysql_fetch_array($retval2))
						  {
							  echo '<tr>';
								  echo '<td>'."First Name: ".'</td>';
								  echo '<td>'.$search['fName'].'</td>';
								  echo '</tr>';
								  echo '<tr>';
								  echo '<td>'."Last Name: ".'</td>';
								  echo '<td>'.$search['lName'].'</td>';
								  echo '</tr>';
								  echo '<tr>';
								  echo '<td>'."Date of Birth: ".'</td>';
								  echo '<td>'.$search['birtDate'].'</td>';
								  echo '</tr>';
								  echo '<tr>';
								  echo '<td>'."Sex: ".'</td>';
								  echo '<td>'.$search['sex'].'</td>';
								  echo '</tr>';
							$sql3="select * from address where adressId=".$search['adressId']."";
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
									  echo '<tr>';
									  echo '<td>'."City: ".'</td>';
									  echo '<td>'.$search['city'].'</td>';
									 echo '</tr>';
								}
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
									 echo '<tr>';
									  echo '<td>'."court Of Conviction: ".'</td>';
									  echo '<td>'.$search['courtOfConviction'].'</td>';
									  echo '</tr>';
									  echo '<tr>';
									  echo '<td>'."date Of Conviction: ".'</td>';
									  echo '<td>'.$search['dateOfConviction'].'</td>';
									  echo '</tr>';
									  echo '<tr>';
									  echo '<td>'."Decision Type: ".'</td>';
									  echo '<td>'.$search['DecisionType'].'</td>';
									 echo '</tr>';
									 echo '<tr>';
									  echo '<td>'."year Of Punishment: ".'</td>';
									  echo '<td>'.$search['yearOfPunishment'].'</td>';
									 echo '</tr>';
									 echo '<tr>';
									  echo '<td>'."date Of Release: ".'</td>';
									  echo '<td>'.$search['date_of_release'].'</td>';
									 echo '</tr>';
								}
							}
						  }
					}
			  }
			  echo '</tbody>';
			echo "</table>";			  
			}  
		mysql_close($conn);
  }
   echo '</table>';
?>
	        			
		      </div>
	          </div>
<!--====================================================== end content====================================================================================== -->
	<!-- ===================================================start rightbar ====================================================================================-->
	                    <div id="rightbar" class="sidebar">
				
				             <h2>View</h2>
			                       <div class="back">
				                     <ul>
					                   <li><a href="viewSchedule.php">View Schedule</a></li>
					                   <li> <a href="viewPrisonerInformation.php"> View prisoner information</a></li>
					                   <li><a href="viewTransferRequest.php" title="">View Transfer Request</a></li>
					                   <li><a href="viewCon.php" title="">View Conditional Release Case request</a></li>
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
 







 
