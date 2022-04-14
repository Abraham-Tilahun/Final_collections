<?php
session_start();
if($log != "log"){
	header ("Location: View request.php");
}
$Req_ID = $Req_ID['key'];
$SQL = "DELETE FROM request WHERE Req_ID = '$Req_ID'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'View request.php'</script>";
?>