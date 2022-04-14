<?php
session_start();
session_unset();
session_destroy();
echo "<script>window.location='login1.php';</script>";
{
echo "session not set";
}
?>
