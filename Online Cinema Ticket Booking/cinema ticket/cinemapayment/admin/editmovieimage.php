<html>
<head>
<script type='text/javascript'>
function check()
  {
   if(document.getElementById("up").value =="")
   {
    alert('Please Browse  The Image First !!'); 
    document.getElementById("up").focus();
    return false;
   }
   }
</script>
</head>
<body>
<?php
include("../includes/db.php");		

	$id=$_GET['movie_id'];
	$result = mysql_query("SELECT * FROM products where movie_id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$image=$row['movie_photo'];
			}
?>
<img src="../images/upload/<?php echo $image ?>">
<form action="editpicexec.php" method="post" enctype="multipart/form-data">
	<br>
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['movie_id']; ?>">
	Select Image
	<br>
	<input type="file" name="image"><br>
	<input type="submit" value="Upload" id="up" Onclick="return check(this.form);">
</form>
</body>
</html>