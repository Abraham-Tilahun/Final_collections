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
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../images/upload/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$movie_type=$_POST['movie_type'];
			$total_seat=$_POST['total_seat'];
	
			$rate=$_POST['rate'];
			$desc=$_POST['desc'];
			$des=$_POST['des'];
			$de=$_POST['de'];
          $movie_id=$_POST['movie_id'];
			
$update=mysql_query("INSERT INTO products (movie_id,total_seat,freeseatleft,movie_type,MovieName,movieseendate,movie_price,movie_photo,movie_description)
VALUES
('$movie_id','$total_seat','$total_seat','$movie_type','$rate','$desc','$des','$location','$de')");
header("location: movie.php");
			exit();
		
			}
	}


?>
