<?php
session_start();
include("../Database/connection.php");
if(isset($_SESSION['username'])&&isset($_SESSION['password']))
	{
	?>
<html>
<link  href="../css/allcss.css" rel="stylesheet" type="text/css"/>
<head>
<title>Online Stuidenet Union Voting System</title>
<style>

#content
{
	background-color: white;
	height: 600px;
	margin-left: 18%;
	margin-top: 7px;
    overflow-x: auto;
	overflow-y: auto;
	width:80%;
}

</style>
<script type="text/javascript">
  function showDiv(prefix,chooser) 
   {
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		if(selectedOption == "3")
		{
			displayDiv(prefix,"3");
		}
		if(selectedOption == "4")
		{
			displayDiv(prefix,"4");
		}
		if(selectedOption == "5")
		{
			displayDiv(prefix,"5");
		}
} 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}
</script>

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
      include("../Admin/Adminmenu.php");
		?>
	    </div>
				<div id="leftside">
					<div id="applyside">
						<?php
            include("../Admin/Adminsidemenu.php");
					   ?>	
					</div>    
				</div>
				<div id="content">
				
				<a name="bottom"></a>
  <table id="contentbox" align="center" style="margin-top:1%;">
		<tr>
			<td id="content">
				<div id="report">
				Which Type of report do you want?
				<select name="portal" id="cboOptions" onChange="showDiv('div',this)">
					<option value="1">...</option>
					<option value="2">Candidates</option>
					<option value="4">Voters</option>
				</select>
				<br /><br />
						  
				<div id="div1" style="display:none;"></div>	
				<div id="div2" style="display:none;">
					<form action="" method="post" >
						<center><h3><u>List of candidates With their total voice</u></h3> </center>
						 
						<p valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<form>
						<input type="button"
						style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; 
					   value="Print" onclick="window.print();">
					   </form>
					   </p>
					   <?php
			$sql="SELECT * FROM count ";
	        $sel=mysql_query($sql);
			?>
			<table align="center" style="border:1px solid #51a351;border-radius:6px;" id="vtable"><tr>
			
			<th bgcolor="#51a351"><font color="white" size="6">Name</th>
			<th bgcolor="#51a351" width="60px">
			<font color="white" size="6">Campus</th>
			<th bgcolor="#51a351"><font color="white" size="6">Sex</th>
			<th bgcolor="#51a351"><font color="white" size="6">Total_voice</th>
			</tr>
			
			<?php
			$rowcolor=0;
			$intt=mysql_num_rows($sel);
			print"<br>";
			echo"<font color='blue'>There are &nbsp;</font><font color='red'>".$intt."&nbsp;</font>Candidates are Voted";
			echo"<br><br>";
			while($row=mysql_fetch_array($sel)){
  print ("<tr>");
print ("<td><font size='4'>" .$row['fullname']. "</td>");	
 print ("<td><font size='4'>" . $row['campus'] . "</td>"); 
print ("<td><font size='4'>" . $row['sex'] . "</td>");
print("<td><font size='4'>".$row['VOICE']."</td>");
  print ("</tr>");
  }
print( "</table>");
						?>
					</form>
				</div>		
				<div id="div4" style="display:none;">
					<form action="" method="post">
					<u><center><h2>Voters</h2></center></u>
						
					<p valign="bottom" align="right">
					<p valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<form>
					<input type="button" style="width:30%;height:30px;color:#2E8B57;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px"; value="Print" 
					   onclick="window.print();">
					   </form>
					   </p>
					<?php   
	     $sql="SELECT * FROM requesttable where requesttype='Voter'";
	        $sel=mysql_query($sql);
	?>
			<table style="width:500px;border:1px solid #51a351;border-radius:6px;" id="vtable"><tr>
			
			<th bgcolor="#51a351" ><font color="white" size="6">Full_Name</th>
			<th bgcolor="#51a351"><font color="white" size="6">Campus</th>
			<th bgcolor="#51a351" ><font color="white" size="6">sex</th>
			<th bgcolor="#51a351" ><font color="white" size="6">Status</th>
			</tr>
			<?php
			$rowcolor=0;
			$intt=mysql_num_rows($sel);
			echo"<br><br>";
			while($row=mysql_fetch_array($sel)){
  print ("<tr>");

print ("<td><font size='4'>" .$row['fname']."&nbsp;"."&nbsp;".$row['lname']. "</td>");
  print ("<td><font size='4'>" . $row['campus'] . "</td>");
print ("<td><font size='4'>" . $row['sex'] . "</td>");	 
$status=$row['votstatus'];
if($status=='unvote')
{
print("
<td style='height:30px;	color:red;	text-align:center;'>Not Cast</td>");
}
else
{
print("
<td style='height:30px;	color:blue;	text-align:center;'>Cast</td>");
}
  print ("</tr>");
  }
print( "</table>");
						?>
					</form>
				</div>
				</div>
			</td>
		</tr>
	</table>
	<a name="bottom"></a>
           <font>
        </div>
		<div id="footer">
			<?php
			include("../Admin/footer.php");
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
	</div>
</body>
</html>