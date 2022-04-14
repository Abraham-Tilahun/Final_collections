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
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"/images/upload/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$model=$_POST['model'];
	
			
			$des=$_POST['des'];
			$de=$_POST['time'];
			
		
          $pro_id=$_POST['pro_id'];
			
$update=mysql_query("INSERT INTO movie (film_id,film_name,birr,time,date,film_image)
VALUES
('$pro_id','$model','$des','$de',Now(),'$location')");
header("location: product.php");
			exit();
		
			}
	}


?>
