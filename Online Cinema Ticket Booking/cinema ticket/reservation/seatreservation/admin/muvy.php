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
				<a id=<img src="../../../image/HH.PNG"> href="reserver information.php"></a>
				<div id="details">
				  <div class="tcenter">
<img src="../../../image/HH.PNG" alt="HHOCTBS" width="147">					!
					<br>
					<a class="alightred" href="../../../index.php">Logout</a>
				  </div>
			  </div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a href="reserver information.php">
							<img src="img/m-dashboard.png" alt="Dashboard" width="99" height="59">
							<span>RESERVER</span>						</a>					</li>
					
					<li>
						<a class="active" href="muvy.php">
							<img src="img/MVY.PNG" alt="Statistics" width="99" height="59">
							<span>MOVIE</span>						</a>					</li>
					<li>
						<a href="seatinformation.php">
							<img alt="Statistics" src="img/m-statistics.png">
							<span>Seat Information</span>
						</a>
						<li>
						<a href="../../../cinemapayment/admin/profileAdmin.php">
							<img alt="Statistics" src="img/m-statistics.png">
							<span>Updatee Profile </span>
						</a>
					</li>
					    <div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<a rel="facebox" href="addmovie.php">Add Movie</a>
					
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> Movie Type </th>
								<th> Movie Name </th>
								<th> Seat Number </th>
								<th> Price </th>
								<th> Time </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../db.php');
							$result = mysql_query("SELECT * FROM movie_name");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['type'].'</td>';
									echo '<td><div align="right">'.$row['movie_name'].'</div></td>';
									echo '<td><div align="right">'.$row['numseats'].'</div></td>';
									echo '<td><div align="right">'.$row['price'].'</div></td>';
									echo '<td><div align="right">'.$row['time'].'</div></td>';
									echo '<td><div align="center"><a rel="facebox" href="editmoviedetails.php?id='.$row['id'].'">edit</a> | <a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
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
   url: "deletemovie.php",
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