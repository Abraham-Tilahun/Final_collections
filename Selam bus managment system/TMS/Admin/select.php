<?php
$nm=$_GET["nm"];
include"connection/connection.php";
$res=mysql_query("select * from Employee where EID like('$nm%')");
echo "table border='1'";
while($row=mysql_fetch_array($res)){
echo"<tr>";
echo"<td>";echo $row["FIRST_NAME"];echo"</td>";	
echo"<td>";echo $row["LAST_NAME"];echo"</td>";	
echo"<td>";echo $row["EID"];echo"</td>";	
echo"</tr>";	
}
echo"</table>";
?>