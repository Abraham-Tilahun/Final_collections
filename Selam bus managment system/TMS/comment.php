<html>
<form action=""method="post">
<label> Name:</br><input type="text"name="name"></br>
<label>Massege: </br> <textarea cols="35"rows="5"name="mes"></textarea></label></br>
<input type="submit"name="post"value="Post">
</html>
<?php 
include"connection/connection.php";
$name = $_POST["name"];
$text = $_POST["mes"];
$post= $_POST["post"];
if($post){
$write = fopen("com.text", "a+");	
fwrite ($write,"<u><u>$name</b></u></br>$text</br>");
fclose($write);
$read = fopen("com.txt", "r+t");
echo "All Communet";
while(!feof($read)){
	echo fread($read, 1024);
}
fclose($read);
}
else{
$read = fopen("com.txt", "r+t");
echo "All Communet";
while(!feof($read)){
	echo fread($read, 1024);
}
fclose($read);	 
}
?>