<?php
	session_start();
	if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
	include("../Database/connection.php");
	$id=$_SESSION['userid'];
	?>
<html>
<link  href="../css/allcss.css" rel="stylesheet" type="text/css"/>

<head>
<title>Online Stuidenet Union Voting System</title>
<style>
#content{
	background-color: white;
	width: 80%;
	height: 600px;
	margin-left: 18%;
	margin-top: 0%;
	overflow-x: hidden;
	overflow-y: hidden;
}
.btn {
	float: right;
    position: relative;
    background-color: #4592d8;
    color: #fffbfb;
    font-size: 16px;
    padding: 10px 30px;
    border: none;
    cursor: pointer;
    border-radius: 1px;
    text-align: center;
    width: 160px;
    text-decoration: none;
}
.btn:hover {
	background-color: #e9e8e7;
    color: #000000;
}
</style>
</head>
<body>
<div id="container">
		<div id="header">
		<?php
		include("../header.php");
		?>
		</div>
		<div id="menu">
		<?php
include("../Tedycandidate/candidatemenu.php");
		?>
	</div>

				<div id="leftside">
					<div id="applyside">
						<?php
							include("../Tedycandidate/candidatesidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="content">
				<fieldset style="margin: 2px;height: auto;border: none;">
			<div style="margin-left: 600px;margin-top: -0px;border:1px solid #fff;padding: 5px;
             box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<?php	
$result = mysql_query("SELECT * FROM election");
$numrow = mysql_num_rows($result);
if ($numrow == 0)
{
	die('No record found.');
}
$row = mysql_fetch_row($result);
$closedate = date_format(date_create($row[2]), 'm/d/Y H:i:s');
//print("you can send request Until time is up!!");
echo "Voting Close Date: " . $closedate;
?>
<br>
Time Left:
<script>
CloseDate = "<?php echo $closedate ?>";
BackColor = "whte";
ForeColor = "red";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Days %%H%%:%%M%%:%%S%% Seconds.";
FinishMessage = "Voting is now bieng closed!";
	function calcage(secs, num1, num2) {
  s = ((Math.floor(secs/num1))%num2).toString();
  if (LeadingZero && s.length < 2)
    s = "0" + s;
  return "<b>" + s + "</b>";
}
function CountBack(secs) {
  if (secs < 0) {
    document.getElementById("cntdwn").innerHTML = "Request Date is Now Closed";
	window.location = "../Tedycandidate/voteclosed.php"
    return;
  }
  DisplayStr = DisplayFormat.replace(/%%D%%/g, calcage(secs,86400,100000));
  DisplayStr = DisplayStr.replace(/%%H%%/g, calcage(secs,3600,24));
  DisplayStr = DisplayStr.replace(/%%M%%/g, calcage(secs,60,60));
  DisplayStr = DisplayStr.replace(/%%S%%/g, calcage(secs,1,60));

  document.getElementById("cntdwn").innerHTML = DisplayStr;
  if (CountActive)
    setTimeout("CountBack(" + (secs+CountStepper) + ")", SetTimeOutPeriod);
}

function putspan(backcolor, forecolor) 
{
 document.write("<span id='cntdwn' style='background-color:" + backcolor + 
                "; color:" + forecolor + "'></span>");
}
CountStepper = Math.ceil(CountStepper);
if (CountStepper == 0)
  CountActive = false;
var SetTimeOutPeriod = (Math.abs(CountStepper)-1)*1000 + 990;
putspan(BackColor, ForeColor);
var EndDate = new Date(CloseDate);
var CurrentDate = new Date();
if(CountStepper>0)
  ddiff = new Date(CurrentDate-EndDate);
else
  ddiff = new Date(EndDate-CurrentDate);
gsecs = Math.floor(ddiff.valueOf()/1000);
CountBack(gsecs);
</script></div>
		<?php		
$per_page=4;

if (isset($_GET["page"])) {

$page = $_GET["page"];

}

else {

$page=1;

}

// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;	
	$sql1=mysql_query("select * from candidate_for_sec_vote order by Full_Name LIMIT $start_from, $per_page");
	$row1=mysql_num_rows($sql1);
	if($row1>0)
	{
		while($rowsel= mysql_fetch_array($sql1))
				{	
					//$username=$info['username'];
					$fullname=$rowsel['Full_Name'];
					$collage=$rowsel['faculity'];
					$dept=$rowsel['department'];
					$yr=$rowsel['year'];	
					$cgpa=$rowsel['CGPA'];  
					$campus=$rowsel['campus'];  
					$infor=$rowsel['information']; 
                  $userid=$rowsel['Candidate_ID'];					
					$query=mysql_query("select * from user where userid='$userid'");
					$rowselected=mysql_num_rows($query);
					if($rowselected>0)
					{
					while( $info = mysql_fetch_array($query))
					{
					$fn=$info['fname'];
					$photo=$info['photo'];
					
					}		 ?>
					<div style="margin: 5px;float: left;border:1px Solid #dadcdc;
					 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<table cellspacing="0">
						<tr  style="background-color: #5078af;height: auto;color: #fff;"><th colspan="2">
						<label>Candidate:<?php echo ''.$fn.'';?></label></th></tr>
						<tr><td colspan="2"><?php echo "<img src='$photo' height=200>"?></td></tr>
						<tr><td><b>Full Name:</b></td><td><?php echo ''.$fullname.'';?></td></tr>
						<tr><td><b>faculity:</b></td><td><?php  echo ''.$collage.''; ?></td></tr>
						<tr><td><b>Department:</b></td><td><?php echo ''.$dept.''; ?></td></tr>
						<tr><td><b>Year:</b></td><td><?php echo ''.$yr.'&nbsp;year'; ?></td></tr>
						<tr><td><b>CGPA:</b></td><td><?php echo ''.$cgpa.''; ?></td></tr>
						<tr><td><b>campus:</b></td><td><?php echo ''.$campus.''; ?></td></tr>
						<tr><td><b>information:</b></td><td><?php echo ''.$infor.''; ?></td></tr>
						<tr><td colspan="2"><a href="votepresidantforallcampus.php?voteid=<?php echo $userid;?>" class="btn">Vote<a/></td></tr>
					</table>
					</div>
                    <?php
					}
					else
					print "no candidate found!";
		         }	
		       if(isset($_GET['voteid']))
	                	{
	            $varvoteid=$_GET['voteid'];
			$qry="select * from user where userid='$id'";
			$results = mysql_query($qry) or die(mysql_error());
			if(mysql_num_rows($results)>0)
			{
				while ($row = mysql_fetch_array($results)) 
					{
					$requestid=$row['requestid'];
					$sqlquer1=mysql_query("select * from user WHERE userid='$varvoteid'");
					while($row2 = mysql_fetch_array($sqlquer1))
					{
					$fn=$row2['fname'];
					$ln=$row2['lname'];	
					$sex=$row2['sex'];
					//$sex=$row2['sex'];
					$requestid2=$row2['requestid'];
					$sqlquer2=mysql_query("select * from requesttable WHERE student_ID='$requestid2'");
					while($row3 = mysql_fetch_array($sqlquer2))
					{
					$collage=$row3['faculity'];
					$dept=$row3['deparment'];
					$yr=$row3['year'];	
					$cgpa=$row3['cgpa'];  
					$campus=$row3['campus'];  
					$infor=$row3['information'];
					}
					}
					}
					$sqlquery=mysql_query("select * from requesttable WHERE student_ID='$requestid'");
					while($result1=mysql_fetch_array($sqlquery))
					{
					$votestatus=$result1['votestatus2'];	
					if($votestatus=='unvote')
					{
					$sql=mysql_query("select * from counter2 where CID='$varvoteid'");
					$total=mysql_num_rows($sql);
					if($total>0)
					{
					while ($row = mysql_fetch_array($sql)) 
					$VOICE=$row['VOICE'];
					$total=$VOICE+1;
					mysql_query("update counter2 set VOICE='$total' where CID='$varvoteid'");
					mysql_query("INSERT INTO `ballotstore` VALUES ( '$id','$varvoteid')");
					mysql_query("update requesttable set votestatus2='vote' where student_ID='$requestid'");
					echo"You have sucssusfully voted Thank you!";
					}
					else
					{
					mysql_query("INSERT INTO `counter2` VALUES ('$varvoteid','$fn $ln','$sex','$collage','$dept','$yr','$cgpa','$campus','$infor','1')");	
					mysql_query("INSERT INTO `ballotstore` VALUES ('$id','$varvoteid')");	
					mysql_query("update requesttable set votestatus2='vote' where student_ID='$requestid'");
					echo"You have sucssusfully voted Thank you!";
					}
					}
					if($votestatus=='vote')
					{
				echo"<script> alert('Sorry!!! You are already Vote! you cannot vote again please!!!'); 
				window.location = 'candidate.php';</script>";
				exit();	
					//echo "You are already Voted! you cannot vote again please!!!";
					}
					}
			}
			else
			echo "no data found";
	        }
		}
		else{
			echo"";
		}
?>
				</fieldset>
				<?php
		$query = "select * from candidate_for_sec_vote";
  $result = mysql_query($query);
	if(mysql_affected_rows($con)){
// Count the total records
$total_records = mysql_num_rows($result);
//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);

//Going to first page
echo "<center> <h3><a href='../Tedycandidate/votepresidantforallcampus.php?page=1'>".'Privouse Page'."</a> ";
for ($i=1; $i<=$total_pages; $i++) {

echo "<a href='../Tedycandidate/votepresidantforallcampus.php?page=".$i."'>".$i."</a> ";
};
// Going to last page
echo "<a href='../Tedycandidate/votepresidantforallcampus.php?page=$total_pages'>".'Next Page'."</a></h3></center> ";
	}
else{
	echo" wait until candidate is approve";
}
?>
		    </div>
		<div id="footer">
			<?php
			include("../Tedycandidate/footer.php");
			?>
	</div>
				<?php
	}
	else
	{
	?>	
	<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='../home.php');
 </script>
 <?php
	}
   ?>
         <a name="bottom"></a>
	</div>
</div>
</body>
</html>
