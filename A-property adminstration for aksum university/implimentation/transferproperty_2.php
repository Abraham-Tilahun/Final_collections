<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
{
//if (isset($_POST['transferproperty']))
$ID=$_POST["ID"];
$prop_name=$_POST["prop_name"];
$prop_quantity=$_POST["prop_quantity"];
$prop_type=$_POST["prop_type"];
$prop_model=$_POST["prop_model"];
$prop_number=$_POST["prop_number"];
mysql_query("INSERT INTO transfer_property(prop_name,prop_quantity,prop_type,prop_model,prop_number) 
VALUES ('$prop_name','$prop_quantity','$prop_type','$prop_model','$prop_number')"); 
 echo '<script language="javascript">';
    echo 'alert("Transfer property seccussfully"); location.href="storemanregisterproperty.php"';
    echo '</script>';
}

?>	