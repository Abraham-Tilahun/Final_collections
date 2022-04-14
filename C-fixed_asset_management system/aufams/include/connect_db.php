<?php

$connect = mysql_connect("localhost", "root", "");
if (!$connect) {
    echo "Not Connected";
}
$db = mysql_select_db("fams", $connect);
if (!$db) {
    echo "Database Not Selected";
}
?>


