<?php
include("../includes/db.php");	
	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			header("location: movie.php");
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../images/upload/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$roomid=$_POST['roomid'];
			
			if(!$update=mysql_query("UPDATE products SET  	movie_photo = '$location' WHERE  movie_id='$roomid'")) {
			
				echo mysql_error();
				
				
			}
			else{
			
			header("location: movie.php");
			exit();
			}
			}
	}


?>