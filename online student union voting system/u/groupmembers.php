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
	#login
{
	margin-top: 0px;
	background-color: #718076;
	height: 220px;
	width: auto;
}
#content
{
	background-color: white;
	width: 60%;
	height: 600px;
	margin-left: 19%;
	margin-top: 0%;
	overflow-x: hidden;
	overflow-y: hidden;
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
				<div id="rightside">
					<div id="login">
					<img src="IMG/vote.jpg" alt="" height="220" width="220"/>
					</div> 
					<div id="calander">
					<b style="color: #12d7ed;">Calander</b>
						<?php
						include("calander.php");
						?>
					</div>    
				</div>
				<div id="content">
			<a name="bottom"></a>
		<fieldset style="height: 300px;border: none;margin: 50px;">			
				<center>
<h1>Group members</h1>
<table class="data-table" border="1"  style="border-collapse:collapse; background-color:cde;"</table>
	<tr>
		<th>Full Name</th><th>ID_Number</th><th>Section</th>
	</tr>
	<tr><td>Ebistie Mengistie </td><td>GUR/3771/08 </td><TD>1</TD></tr>
	<tr><td>Mulatu Mekonnen</td><td>GUR/3908/08</td><TD>2</TD></tr>
	<tr><td>Esubalew Marnew</td><td>GUR/3789/08</td><TD>1</TD></tr>
	<tr><td>Abdulhamid Mohammed </td><td>GUR/3634/08 </td><TD>1</TD></tr>
	<tr><td>Tinsae Mathewos </td><td>GUR/3996/08</td><TD>2</TD></tr>
</table></center>
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