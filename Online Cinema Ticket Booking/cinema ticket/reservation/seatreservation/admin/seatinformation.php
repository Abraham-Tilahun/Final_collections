<?php
	require_once('auth.php');
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom">
				<a id="" href="reserver information.php"></a>
				<div id="details">
				  <div class="tcenter"><img src="../../../image/HH.PNG" width="166" height="28">!
					<br>
					<a class="alightred" href="../index.php">Logout</a>
				  </div>
			  </div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a href="reserver information.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Reserver Information</span>
						</a>
					</li>
					
					<li>
						<a href="muvy.php">
							<!--<img alt="Statistics" src="img/m-custom.png">-->
							<span>Movie</span>
						</a>
					</li>
					<li>
						<a class="active" href="seatinformation.php">
							<img alt="Statistics" src="img/m-statistics.png">
							<span>Seat Information</span>
						</a>
						 <li class="item first" id="one"><a href="../../../admin/manager/profileAdmin.php" class="main"><span class="outer"><span class="inner content">Update Profile</span></span></a></li>
	<li class="item first" id="four"><a href="../../../cinemapayment/admin/message.php" class="main"><span class="outer"><span class="inner media_library"> Message</span></span></a></li>
	<li class="item first" id="one"><a href="../../../cinemapayment/admin/movie.php" class="main current"><span class="outer"><span class="inner newsletter">Add Movie</span></span></a></li>
					</li>
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> Date </th>
								<th> Movie Type </th>
								<th> Movie Name </th>
								<th> Seat Number </th>
								<th> Transaction Code </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../db.php');
							$result = mysql_query("SELECT * FROM reserve");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['date'].'</td>';
									$rrad=$row['movie_type'];
									$results = mysql_query("SELECT * FROM movie_name WHERE id='$rrad'");
									while($rows = mysql_fetch_array($results))
										{
									echo '<td><div align="right">'.$rows['type'].'</div></td>';
									echo '<td><div align="right">'.$rows['movie_name'].'</div></td>';
										}
									echo '<td><div align="right">'.$row['seat'].'</div></td>';
									echo '<td><div align="right">'.$row['transactionnum'].'</div></td>';
									echo '<td><div align="center"><a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
				</div>
				<div id="footer" class="radius-bottom">
					
		<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=910 height=40 >
<font color=white size=4px ><p align=center>GROUP 7 &copy;2009/2017 HibretHotelCinema &reg;All RIghts Reserved @DEBRE TABOR UNIVERSITY.</p>
</td>
</tr>

</table>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteinventory.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>