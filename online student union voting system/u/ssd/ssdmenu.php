 <?php
	if(isset($_SESSION['username'])&& isset($_SESSION['password']))
	{
		?>
<ul>
    <li><a href="../ssd/SSD.php"title="home"><i class="fa fa-home"></i>Home</a></li>
	
	<li><a href="../ssd/ElectionDate.php"title="set election date"><i class="fa fa-calendar"></i>Eelection Date&nbsp;<span style="font-size: 7px;">&#9660;</span></a>
	
	<ul>
 	<li><a href="../ssd/ElectionDate.php">Set Eelection Date</a></li>
 	<li><a href="../ssd/UpdateElectionDate.php">Update Eelection Date</a></li>
 	</ul>
		 
	</li>
	<li><a href="#"title="set student apply date"><i class="fa fa-calendar"></i>Students ApplyDate <span style="font-size: 7px;">&#9660;</span></a>
	<ul>
	<li><a href="../ssd/setapplydate.php">Set Apply Date</a></li>
	<li><a href="../ssd/updateapplydate.php">Update Apply Date</a></li>
	</ul>
	</li>
	 <li><a href=""title="view election result"><i class="fa fa-info-circle"></i>View <span style="font-size: 7px;">&#9660;</span></a>
	<ul>
	<li><a href="../ssd/viewcandidate.php"title="view candidate">View Candidates</a> </li>
	<li><a href="../ssd/viewvoter.php"title="view voter">View Voters</a> </li>
		<li><a href="../ssd/viewstudentdata.php"title="view voter">View Student Data</a> </li>
	</ul></li>
	
   <li><a href=""title="view election result"><i class="fa fa-info-circle"></i>View election result<span style="font-size: 7px;">&#9660;</span></a>
	<ul>
	<li><a href="../ssd/TViewElectionResult.php">Tewodros</a> </li>	
	<li><a href="../ssd/MViewElectionResult.php">Maraki</a> </li>
	<li><a href="../ssd/GViewElectionResult.php">GC</a> </li>
	<li><a href="../ssd/FViewElectionResult.php">Facil</a> </li>
	<li><a href="../ssd/MZViewElectionResult.php">Melesi zenaw</a> </li>
	</ul></li>
	
<div id="photologin">	
<?php	
		echo "<li style='margin-left:2%;'><a href=../logout.php title='click here to logout the system SSD:".$_SESSION['username']."'><i class='fa fa-unlock'></i>logout(".$_SESSION['username'].")</a></li>";
if($_SESSION['role']=="SSD")
{
echo "<li style='float:right;margin-top:5px;'><p><b>.</b>Online</p>". "<img src='".$_SESSION['sphoto']."'</li>";

}
		
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
	<li><a href="#bottom"  ><i class="fa fa-arrow-down"></i></a></li>
</ul>


	