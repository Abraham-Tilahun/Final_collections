<?php
mysql_select_db('storem');
mysql_select_db('storem',mysql_connect('localhost','root',''))or die(mysql_error());
{
//if (isset($_POST['transferproperty']))
$Reg_Date=$_POST["Reg_Date"];
$prop_code=$_POST["prop_code"];
$prop_name=$_POST["prop_name"];
$unit_price=$_POST["unit_price"];
$Quality=$_POST["Quality"];
$prop_model=$_POST["prop_model"];
$description=$_POST["description"];
mysql_query("INSERT INTO new_item(Reg_Date,prop_code,prop_name,unit_price,Quality,prop_model,description) 
VALUES ('$Reg_Date','$prop_code','$prop_name','$unit_price','$Quality','$prop_model','$description')"); 
 echo '<script language="javascript">';
    echo 'alert("Register property seccussfully"); location.href="storemanregisterproperty.php"';
    echo '</script>';
}

?>	