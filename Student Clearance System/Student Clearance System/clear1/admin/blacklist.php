<?php
	session_start();
	if($_SESSION['username']!="")
	{
		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Generate Blacklist</title>
  
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Display Result</title>
<link rel="stylesheet" href="../admin/css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="../admin/css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="../admin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 

<!-- Custom jquery scripts -->
<script src="../admin/js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	</div>
<img src="../admin/logo.png" width="" height="135" style="margin-bottom:px;margin-left:px;margin-top:22px;">
<H6 style="margin-top:-138px;margin-left:190px;font-size:15px;color:#F8F8FF;display: block;">Managed By Abhinav Education Trust, Jahangirpura</h6>
<H6 style="margin-top:-15px;margin-left:750px;font-size:15px;color:#F8F8FF;" >Affiliated To Veer Narmad South Gujarat University</h6>
<H6 style="margin-top:30px;margin-left:175px;font-size:34px;color:#F8F8FF;">VIVEKANAND COLLEGE FOR BCA,BBA,B.COM,B.Ed,PTC </b></h6>
	
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
		
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><b><font style="font-family: Arial, Helvetica, sans-serif;" color="#F8F8FF">Hello  <b style="color:#FFDEAD;">&nbsp;Adminstrator </b><img src="image/admin1.png" style="margin-top:-50px;" height="60" width="70"></td>
		<td>
		</td>
		</tr>
		</table>
	</div>
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account"><img src="images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="cnpassword.php" id="acc-settings">Change Password</a>
				 
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select" ><li><a href="welcome.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="coursemanage.php"><b>Master Form</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				
				<li><a href="coursemanage.php">Course</a></li>
				<li><a href="semestermanage.php">Semester</a></li>
				<li><a href="subjectmanage.php">Subject</a></li>
				<li><a href="studentmanage.php">Student</a></li>
				<li><a href="exammanage.php">Exam</a></li>
				<li><a href="resultmanage.php">Result</a></li>
				<li><a href="attendance.php">Attendance</a></li>
				<li><a href="facultymanage.php">Faculty</a></li>
				
				<li><a href="subjecttaken.php">Subject Taken</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="uploadstudinfo.php"><b>Upload</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="uploadstudinfo.php">Stud Info</a></li>
				<li><a href="uploadtimetable.php">Exam Time Table</a></li>
				<li><a href="uploadresult.php">Exam Result</a></li>
				<li><a href="uploadatt.php">Attendance</a></li>
				<li><a href="uploadblacklist.php">Blacklist </a></li>
				<li><a href="uploadsyllabus.php">Syllabus </a></li>
				<li><a href="uploadgallery.php">Gallery</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="collegemanage.php"><b>Access</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="collegemanage.php">College Info</a></li>
				<li><a href="downloadmanage.php">Download</a></li>
				<li><a href="eventmanage.php">Event</a></li>
				<li><a href="newsmanage.php">News</a></li>
				<li><a href="usermanage.php">Usertype</a></li>
				<li><a href="loginmanage.php">Loginuser</a></li>
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider"></div>
		
		<ul class="current"><li><a href="displayattend.php"><b>Attendance</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				
				<li><a href="displayattend.php">Display Attendance</a></li>
				<li class="sub_show"><a href="blacklist.php">Generate Blacklist</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="../admin/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="toplef"></th>
		<td id="tbl-border-t">&nbsp;</td>
		<th class="toprigh"></th>
		<th rowspan="3" class="sized"><img src="../admin/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-le"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				
				
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				
				
				
				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			
			<div class="clear"></div>
		 
		</div>
			<div class="clear">&nbsp;</div>

</div>
</div>

<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<form  method="post">
  <div style="margin-top:-360px;margin-left:200px;">
   <center>
<div style="width: 600px;
	margin-left:-178px;
	//margin: 160px auto 0 auto;
	background: #F5F5F5;;
	-moz-border-radius: 8px;                       
	-webkit-border-radius: 8px;
	padding: 80px;
	border: 1px solid #adaa9f;
	-moz-box-shadow: 0 2px 2px #9c9c9c;
	-webkit-box-shadow: 0 2px 2px #9c9c9c;">
<table width="80%">
  <tr>
<td style="font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;font-size:18px;">
<div style="margin-top:30px;">Attendance</td></div>
<td>
<div style="">
<select name="att" size="1" style="width:200px;margin-right:200px;width:265px;margin-top:30px;font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;font-size:18px;"">
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("vvkcollege",$con);
$res=mysql_query("select * from attend_master where declard='Yes';");
$cnt=mysql_num_rows($res);
while($cnt>0)
{
	while($row=mysql_fetch_array($res))
	{
		$sdate=$row['start_date'];
		$edate=$row['end'];
		$sid=$row['sem_id'];
		$cid=$row['course_id'];
		$id=$row['att_id'];	
		$syear  = substr($sdate,0,4);
		$smonth = substr($sdate,5,2);
		$sday  = substr($sdate,8,2);
		$eyear  = substr($edate,0,4);
		$emonth = substr($edate,5,2);
		$eday  = substr($edate,8,2);
		$qry1="SELECT course_name FROM course_master where course_id in(select course_id from attend_master where course_id=$cid);";
		$res2=mysql_query($qry1);
		$row2=mysql_fetch_array($res2);
		$name=$row2['course_name'];
		$qry1="SELECT sem_no,year FROM sem_master where sem_id in(select sem_id from attend_master where sem_id=$sid);";
		$res2=mysql_query($qry1);
		$row2=mysql_fetch_array($res2);
		$semno=$row2['sem_no'];
		if($semno==0)
		{
			$sem=$row2['year'];
		}
		else
		{
			$sem="Sem"."-".$semno;
		}
		if($smonth==1)
		{
			$asmonth='JAN';
		}
		if($smonth==2)
		{
			$smonth='FEB';
		}
		if($smonth==3)
		{
			$smonth='MAR';
		}
		if($smonth==4)
		{
			$smonth='APR';
		}
		if($smonth==5)
		{
			$smonth='MAY';
		}
		if($smonth==6)
		{
			$smonth='JUN';
		}
		if($smonth==7)
		{
			$smonth='JUL';
		}
		if($smonth==8)
		{
			$smonth='AUG';
		}
		if($smonth==9)
		{
			$smonth='SEP';
		}
		if($smonth==10)
		{
			$smonth='OCT';
		}
		if($smonth==11)
		{
			$smonth='NOV';
		}
		if($smonth==12)
		{
			$smonth='DEC';
		}
		if($emonth==1)
		{
			$emonth='JAN';
		}
		if($emonth==2)
		{
			$emonth='FEB';
		}
		if($emonth==3)
		{
			$emonth='MAR';
		}
		if($emonth==4)
		{
			$emonth='APR';
		}
		if($emonth==5)
		{
			$emonth='MAY';
		}
		if($emonth==6)
		{
			$emonth='JUN';
		}
		if($emonth==7)
		{
			$emonth='JUL';
		}
		if($emonth==8)
		{
			$emonth='AUG';
		}
		if($emonth==9)
		{
			$emonth='SEP';
		}
		if($emonth==10)
		{
			$emonth='OCT';
		}
		if($emonth==11)
		{
			$emonth='NOV';
		}
		if($emonth==12)
		{
			$emonth='DEC';
		}
		if($emonth==$smonth)
		{
			$s=$smonth."-".$syear;
			$e=$emonth." "."-"." ".$eyear;
			$exam=$name." ".$sem." "."(".$s.")";?>
			<option value="<?php echo $id?>">
			<?php  echo $exam?>
			</option><?php
		}
		else
		{
			$s=$smonth."-".$syear;
			$e=$emonth."-".$eyear;
			$exam=$name." ".$sem." "."(".$s." "."TO"." ".$e.")";?>
			<option value="<?php echo $id?>">
			<?php  echo $exam?>
			</option><?php
		}
	}
$cnt--;	
}
?>
</select>
</div>
</td>
</tr>
<tr>
<td>
<div style="margin-top:30px;font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;font-size:18px;">
Maximum Present Rate
</div>
</td>
<td>
<div style="margin-top:30px;margin-left:px;">
<input type="text" name="per" style="font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;font-size:18px;">
</div>
</td>
</tr>
<tr>
<td><div style="margin-top:30px;margin-left:200px;">
<input type="submit"  value="Submit" name="l1"   style="width: 150px;
    height: 40px;
    color: #ffffff;
    background: url(images/contact_but.png);
    background-repeat:no-repeat;
    background-position:left bottom;
    border: none;
    font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;
font-size:18px;
    font-weight: bold;" />
</td>
<td>
<div style="margin-top:30px;margin-left:30px;">
	<div class="bubble-left"></div>
	<div class="bubble-inner">Select Attendance and Click Submit button</div>
	<div class="bubble-right"></div>
</div>
</div>
</td>
</tr>
</table>
</form>
<form action="saveexcel.php" method="post" 
onsubmit='$("#datatodisplay").val( $("<div>").append( $("#ReportTable").eq(0).clone() ).html() )'>
</div>
</div>
<?php
if(isset($_POST['l1']))
{
	$str=$_POST['att'];
	if(isset($_POST['per']))
	{
		$pe=$_POST['per'];
		
	}
	if($pe==0)
	{
		?>
		<script language="javascript">
		alert("Zero is not valid");
		</script>
		<?php
	}
	$qry="SELECT sub_name FROM sub_master where sub_id in(select sub_id from stud_attend_master where att_id=$str);";
	$res=mysql_query("$qry");?>
	<br><br>

<table class="table1" style="margin-left:px;" id="ReportTable">
                <thead>
                    <tr>
                       <th>Stud Id</td>
                <th>Name</td>
                 <th>Working Days</td> 

                   
               <?php
	while($row=mysql_fetch_array($res))
	{
		?>
		<th><?php echo $row['sub_name']?></td>
		<?php
	}
	echo "<th>Division</td>";
	echo "<th>Avg Present Rate(%)</td>";
	echo "</tr>";
	echo "</thead>";
	$qry="SELECT * FROM attend_master where att_id=$id;";
		$res=mysql_query("$qry");
		$row=mysql_fetch_array($res);
		$m=$row['working_days'];
		$qry="SELECT * FROM stud_attend_master where att_id=$id;";
		$res1=mysql_query("$qry");
		echo "<tbody>";
		static $lstudid,$tot;
		while($row=mysql_fetch_array($res1))
		{
			
   	            	echo "<tr>";
			$tot=0;
			$studid=$row['stud_id'];
			if($studid!=$lstudid)
			{
			//echo "<td>".$studid."</td>";
			$qry1="select fname,mname,lname from stud_master where stud_id=$studid;";
			$res=mysql_query($qry1) or die();
			while($row2=mysql_fetch_array($res))
			{
				$fn=$row2['fname'];
				$mn=$row2['mname'];
				$ln=$row2['lname'];
				$fullname=$fn." ".$mn." ".$ln;
			}
			$qry4="select * from stud_attend_master where stud_id=$studid;";
			$res4=mysql_query($qry4) or die();
			$cnt1=mysql_num_rows($res4);
			while($row4=mysql_fetch_array($res4))
			{
				$lstudid=$row['stud_id'];
				$totp=$row4['tot_present'];
				$tot+=$totp;
				//echo "<td>".$totp."</td>";
			}
			$d=$row['division'];
			$totw=$m*$cnt1;
			$per=$tot/$totw*100;
			//echo "<td>";
			if($pe>=$per)
			{
				echo "<tr>";
				echo "<td>".$studid."</td>";
				echo "<td>".$fullname."</td>";
				echo "<td>".$m."</td>";
				
				$qry4="select * from stud_attend_master where stud_id=$studid;";
				$res4=mysql_query($qry4) or die();
				$cnt1=mysql_num_rows($res4);
				while($row4=mysql_fetch_array($res4))
				{
					$lstudid=$row['stud_id'];
					$totp=$row4['tot_present'];
					$tot+=$totp;
					echo "<td>".$totp."</td>";
				}
				echo "<td>".$d."</td>";
				echo "<td>";
				printf("%6.2f",$per);
				echo "</tr>";
			}
			}
			
		}
		echo "</tbody>";
		echo "</table>";
?>
<td align="center">
<input type="hidden" id="datatodisplay" name="datatodisplay">
<input type="submit"  value="Create File " name="l1"   style="width:150px;
    height: 40px;margin-left:540px;
    color: #ffffff;
    background: url(images/contact_but.png);
    background-repeat:no-repeat;
    background-position:left bottom;
    border: none;
    font-family: Verdana, Helvetica, sans-serif, Helvetica, sans-serif;font-size:18px;
    font-weight: bold;" />
<input type="hidden" name='id' value="<?php echo $id?>">
</form>
<?php
}
}
?>


