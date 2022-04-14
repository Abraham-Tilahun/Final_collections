<?php
include("../includes/db.php");		
?>
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	$id=$_GET['movie_id'];
	$result = mysql_query("SELECT * FROM products where movie_id='$id'");
		while($row = mysql_fetch_array($result))
			{
			$total_seat=$row['total_seat'];
			$freeseatleft=$row['freeseatleft'];
			$movie_type=$row['movie_type'];
			$brand=$row['MovieName'];
				$type=$row['movieseendate'];
				$rate=$row['movie_price'];
				$description=$row['movie_description'];
				
			}
?>
<form action="execeditmovie.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['movie_id'] ?>">
	total_seat:<br><input type="text" name="total_seat" value="<?php echo $total_seat ?>" class="ed"><br>
	total_seat-Left:<br><input type="text" name="freeseatleft" value="<?php echo $freeseatleft ?>" class="ed"><br>
	Movie_Type:<br><input type="text" name="movie_type" value="<?php echo $movie_type ?>" class="ed"><br>
	MovieName:<br>
	<input type="text" name="brand" value="<?php echo $brand ?>" class="ed"><br>
	Movie Seen Date <br>
	<input type="text" name="type" value="<?php echo $type ?>" class="ed"><br>
	Price:<br><input type="text" name="rate" value="<?php echo $rate ?>" class="ed"><br>
	Description:<br><textarea name="description" class="ed"><?php echo $description ?></textarea><br>
	<input type="submit" value="Edit" id="button1">
</form>