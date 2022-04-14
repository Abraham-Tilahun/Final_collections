 <?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
//if(!isset($_POST['Add']))
{
$name=$_POST["ItemName"];
$Iid=$_POST["ItemId"];
$pr=$_POST["price"];
$Qaun=$_POST["Quantity"];
$mod=$_POST["model"];
mysql_query("INSERT INTO new_item(ItemName,ItemId,price,Quantity,model) 
VALUES ('$name', '$Iid', '$pr','$Qaun', '$mod')"); 
 echo '<script language="javascript">';
    echo 'alert("Register property seccussfully"); location.href="storemanregisterproperty.php"';
    echo '</script>';
}

?>	