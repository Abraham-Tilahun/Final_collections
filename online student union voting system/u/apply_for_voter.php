<?php
session_start();
include("Database/connection.php");
?>
<html>
<link  href="css/allcss.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
<head>
<title>Online Stuidenet Union Voting System</title>
<style>
		.textbox
	{
		height: 30px;
		width: 220px;
		font-family: Times New Roman;
		font-weight:italic;
		font-size: inherit;
		border: none;
	}
	.textarea
	{
		height: 100px;
		width: 500px;
		border: none;
		
	}
	#btn
	{
		background-color: #2692d9;
		height: 50px;
		width: 170px;
		color: white;
		cursor: pointer;
		border: none;
		font-family: Times New Roman;
		font-size: 20px;
		margin-top: 20px;
	}
	#btn:hover
	{
		background-color: #808c97;
		height: 50px;
		width: 170px;
		color: white;
		cursor: pointer;
		border: none;
		font-family: Times New Roman;
		font-size: 20px;
		margin-top: 20px;
	}
#file
{
		height: 25px;
		width: 220px;;
		background-color: #ffffff;
}
#content
{
	background-color: white;
	width: 80%;
	height: 600px;
	margin-left: 19%;
	margin-top: 0%;
	overflow-x: hidden;
	overflow-y: hidden;
}
.topnav input[type=text] {
  height: 42px;
  padding: 10px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  margin-left: 10px;
  
}
   .topnav input[type=submit] {
    background-color:#4392bc; 
    width: 100px;
    height: 37px;
    border: none;
     padding: 10px;
  }
     .topnav input[type=submit]:hover{ 
    background-color:##c1c7c8; 
    width: 100px;
    height: 37px;
    cursor: pointer;
    color: #fff7f7;
    border: none;
     padding: 10px;
  }
</style>
<script>
		var loadFile = function(event) 
		{
		var reader = new FileReader();
		reader.onload = function()
		{
		var output = document.getElementById('output');
		output.src = reader.result;
		};
		reader.readAsDataURL(event.target.files[0]);
		};
		function ValidateAlpha(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 &&  keyCode != 8  &&  keyCode != 9)
				{
				alert("please enter	Only letters! ")
            return false;
			}}
    </script>

</head>
<body>
<div id="container">
		<div id="header">
		<?php
		include("headerhome.php");
	   ?>
		</div>
		<div id="menu">
		<?php
  include("menu.php");
		?>
	</div>

				<div id="leftside">
					<div id="applyside">
						<?php
							include("homesidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="content">

<fieldset style="margin-top: 10px; height: auto; border: none;">
<div style="margin-left: 60%;margin-top: -45px;padding: 5px; width:40%;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<?php	
$result = mysql_query("SELECT * FROM apply_date");
$numrow = mysql_num_rows($result);
if ($numrow == 0)
{
	die('No record found.');
}
$row = mysql_fetch_row($result);
$closedate = date_format(date_create($row[2]), 'm/d/Y H:i:s');
print("you can send request Until time is up!!");
echo "<br>Closing Date: " . $closedate;
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
DisplayFormat = "%%D%% Days %%H%% Hours %%M%% Minutes %%S%% Seconds.";
FinishMessage = "Apply date is now bieng closed!";
	function calcage(secs, num1, num2) {
  s = ((Math.floor(secs/num1))%num2).toString();
  if (LeadingZero && s.length < 2)
    s = "0" + s;
  return "<b>" + s + "</b>";
}
function CountBack(secs) {
  if (secs < 0) {
    document.getElementById("cntdwn").innerHTML = "Request Date is Now Closed";
	window.location = "applyclose.php"
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
</script>
</div>
<div class="topnav">
    <form method="post"enctype="multipart/form-data">
      <label>Search Your ID here</label>
	  <input type="text" placeholder="Search.." name="searchID"/>
      <input type="submit" value="Search" name="search">
    </form>
  </div>  
 
  <legend style="font-size: 30px;" align="left">Apply For Voter Page</legend>
  <?php
  
			if(isset($_POST['search']))
						{
				$Search_ID=$_POST['searchID'];
                    if(empty($Search_ID)){
						 echo"<font color='red'><center>please fill the field</center></font>";
					}
					else{
				$sql="select * from student where sid='$Search_ID'";
				$userexist=mysql_query($sql);
				if(mysql_affected_rows()>0)
				{
					while($row=mysql_fetch_assoc($userexist))	
						{
								?>
						<form action="" method="post" enctype="multipart/form-data" onSubmit="return validate()">
						<table  border="1" style="border-collapse:collapse; background-color:cde;">
						  <tr>
						<td>Student_ID:</td><td><input type="text" name="vid" class="textbox" required="1" readonly value="<?php echo $row['sid'];?>"title="you can not modify"/></td>
						<td> Username: </td><td><input type="text" name="un" required="1" class="textbox" onKeyPress="return ValidateAlpha(event)"title="enter username only character"/></td>
						  </tr>
						  <tr>
						  <td>First name: </td><td><input type="text" name="fname" class="textbox" required="1" readonly value="<?php echo $row['fname'];?>"title="you can not modify"/></td>
						  <td> Password: </td><td><input type="password" name="pw" required="1" class="textbox" id="pw" pattern=".{3,}" title="three or more characters"/>
						  <script type="text/javascript">
				    var f1 = new LiveValidation('pw');
				   f1.add(Validate.Presence,{failureMessage: "X"});
				 </script>
						  </td>
						  </tr>
						 <tr>
						 <td> Last name: </td><td><input type="text" name="lname" class="textbox" required="1" readonly value="<?php echo $row['lname'];?>"title="you can not modify"/></td>
						 <td>Confirm Password: </td><td><input type="password" name="cpw" required="1" class="textbox" id="rpw"title="three or more characters"/></td>
						 </tr>
						 <tr><td>Gender:</td><td><input type="text" name="gender" class="textbox" required="1" readonly value="<?php echo $row['gender'];?>"title="you can not modify"/></td>
						 <td>User Photo:</td><td><input type="file" name="photo" id="file" required="1" accept="image/*" onchange="loadFile(event)"title="add your photo"/></td>
						 </tr>
						 <tr><td> Age: </td>
						 <td><input type="number" name="age" class="textbox" min="15" max="60" required="1" readonly value="<?php echo $row['age'];?>"title="you can not modify"/></td>
						 			 <td>Date:</td><td><input type="datetime" name="date"  class="textbox" readonly value="<?php echo  date("Y-m-d h:i:sa");?>"title="you can not modify"/></td>
						 </tr>
						 <tr><td>Faculity: </td>
						 <td><input type="text" name="collage" class="textbox" required="1" readonly value="<?php echo $row['collage'];?>"title="you can not modify"></td>
						 <td> Campus</td>
			             <td>
			             <input type="text" name="campus" class="textbox" required="1" readonly value="<?php echo $row['campus'];?>"title="you can not modify">
			           </td></tr>
					 <tr><td>Department: </td>
					 <td><input type="text" name="department" class="textbox" required="1" readonly value="<?php echo $row['department'];?>"title="you can not modify"></td></tr>
					 <tr><td>Year: </td><td><input type="text" name="year" class="textbox" required="1" readonly value="<?php echo $row['year'];?>"title="you can not modify"></td></tr>
					<tr><td>CGPA: </td><td><input type="text" name="cgpa" class="textbox" required="1" readonly value="<?php echo $row['cgpa'];?>"title="you can not modify"/></td></tr>
						  <tr><td colspan="2"  style="margin-left: 200px;"><input type="submit" value="Send" id="btn" name="register">
						  <input type="reset" value="Cancel" id="btn"></td></tr>
						 <img id="output"  width="150" height="170"  style="float: right;"/>
						  </table>
						  </form>;
						  <?php
						}
	
			    }
else{
echo "<font color=red><center>You are not The member of University!<br>So You Couldn't apply for candidate.</center></font>";

}
}		
}
		else if(isset($_POST['register']))
				{
					$vid=$_POST['vid'];
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					$gender=$_POST['gender'];
					$age=$_POST['age'];
					$collage=$_POST['collage'];
					$dept=$_POST['department'];
					$year=$_POST['year'];
					$date=$_POST['date'];
					$campus=$_POST['campus'];
					$username=$_POST['un']; 
					$cgpa=$_POST['cgpa'];
					$pass=$_POST['pw'];
					//$pass=MD5($_POST['pw']);
					$cpass=$_POST['cpw'];
					$ptmploc=$_FILES["photo"]["tmp_name"];
					$pname=$_FILES["photo"]["name"];
					$psize=$_FILES["photo"]["size"];
					$ptype=$_FILES["photo"]["type"];
					$sql="select * from student where sid='$vid'";
				$userexist=mysql_query($sql);
						while($row=mysql_fetch_assoc($userexist))
						{
							$program=$row['program'];
							
						}
					if($program=="regular")
							{
			if($pass==$cpass){
			if($psize<=1000000&&($ptype=="image/jpeg"||$ptype=="image/jpeg"||$ptype=="image/png"))
						{
				if(!file_exists("userphoto"))
					mkdir("userphoto");
				$photopath="userphoto/$pname";
				if(copy($ptmploc,$photopath))
				{
					
		$sql=mysql_query("insert into requesttable values('$vid','$fname','$lname','$gender','$age','$collage','$dept','$year','$cgpa','$username','$pass','Voter','unvote','unvote','$photopath','no','$date','$campus','')");
				if(!$sql)
				//die("<font color=red><b><center>You Can Not Apply more than once!</center></b></font>");
			echo "<script type='text/javascript'>alert('You Can Not Apply  more than once !')</script>";
					else
						echo "<script type='text/javascript'>alert('You Apply Successfully!')</script>";
						//echo "<font color=green><b><center>You Apply Successfully!</center></b></font>";
						
			
								}
				else
				echo "Unable to upload the photo!";
				}
				else
				{
				if($psize>1000000)
				echo "Photo size should not be greater than 2Kb!";
				else
				echo "Photo should be in jpeg format";
				}
				}
				else{
					echo"<font color='red'>The password is no mutch!</font>";
				}
				}				
				else
				echo "<font color=red><b><center>You Couldn't Apply For Voter Because  you are Extension Student.</center></b></font>"; 
		}
				?>
				</fieldset>
		    </div>
		<div id="footer">
			<?php
			include("footer.php");
			?>
			<a name="bottom"></a>
	</div>
	</div>
</body>
</html>