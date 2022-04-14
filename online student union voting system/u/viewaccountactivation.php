	<?php
session_start();
include("Database/connection.php");
	?>
<html>
<link  href="css/allcss.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../bootstrap/font-awesome-4.1.0/css/font-awesome.min.css">
<head>
<title>Online Stuidenet Union Voting System</title>
<style>
#content
{
	background-color: white;
	width: 80%;
	height: 600px;
	margin-left: 19%;
	margin-top: 0%;
	overflow-x: scroll;
	overflow-y: scroll;
}
		
</style>
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
				
						<?php
						include("homesidemenu.php");
					   ?>	
				    
				</div>
				<div id="content">
				<a name="bottom"></a>
<fieldset style="border: none;">
<?php
 $con = mysqli_connect('localhost','root', '','uogosuvs');
$query = "SELECT * FROM aresponse";
//$query="SELECT * FROM account ";
$result = mysqli_query($con,$query);
?>
<table class="data-table "style="margin-left: 50;px;margin-right: 15px;margin-top: 30px;">
<thead>
<tr>
<th>Requestid</th>
<th>Date</th>
<th>Message</th>

<th>Delete</th>
</tr>
</thead>
<?php
while($row = mysqli_fetch_array($result))
  {
  $ctrl = $row['requestid'];
  
  print ("<tr>");
   print ("<td>" . $row['requestid'] . "</td>");	
   print ("<td>" . $row['Date'] . "</td>");
 print ("<td>" . $row['message'] . "</td>");   
print("<td align = 'center' width = '1'><a href = 'deleteactivationresponse.php?key=".$ctrl."'\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class='fa fa-trash'</i>delete</img></a></td>
");
  print ("</tr>");
  
  }
print( "</table>");
mysqli_close($con);
?>
        </fieldset>
		    </div>
		<div id="footer">
			<?php
			include("footer.php");
			?>
	</div>

	</div>
</body>
</html>