<html>
<body bgcolor=black>
<?php
require_once('dbconnect.php');
$id = $_REQUEST['id'];
mysql_query("DELETE FROM barcode where id= '$id''");
echo "<script> alert('1 record deleted');
window.location.href='index.php';
</script>";
?>
</body>
</html>