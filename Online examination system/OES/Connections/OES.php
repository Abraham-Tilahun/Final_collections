<?php
// *** Logout the current user.
$logoutGoTo = "../index.php";
if (!isset($_SESSION)) {
  session_start();
}
$_SESSION['ID'] = NULL;
$_SESSION['Name'] = NULL;
$_SESSION['timeout'] = NULL;
unset($_SESSION['ID']);
unset($_SESSION['Name']);
unset($_SESSION['timeout']);
if ($logoutGoTo != "") {header("Location: $logoutGoTo");
exit;
}
?>