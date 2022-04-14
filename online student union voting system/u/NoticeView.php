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
				<div id="content">
				<a name="bottom"></a>
<fieldset style="border: none;">
<legend align="center"><H1>Notice Board</H1> </legend>
<?php
	$date=date('Y-m-d hh:mm');
	$sql1=mysql_query("SELECT * from notice where Ex_Dates>='$date' ORDER BY dates ASC") or die(mysql_error());
	$ro=mysql_num_rows($sql1);
	if($ro!='0')
	{
	$sql=mysql_query("SELECT * from notice where Ex_Dates>='$date' ORDER BY dates ASC") or die(mysql_error());
	while($row=mysql_fetch_array($sql))
	{
	
            echo"<p align='right'><b>Date:</b>"."<u>".$row['Dates']."</u>"."</p>";
            echo"<center>"."<u>".$row['Title']."</u>"."</center>"."</p>";       	
			
			echo "<font  size='3' color='#00000b'>".$row['myfile'];
           echo"<font size='4' color='#00000b'><br><u><i>Posted By:".$row['sender']."</i></u>"."</p>";
         	echo "<hr>"	;

	}
	}
	else
	{
echo "<style='color:red;'><center><img src='IMG/delete.png' style='height:19px;'/>
						 No new notice?</center></div>";
		
	}
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