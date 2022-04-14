<?php

session_start();
if (!($_SESSION["user_type"] == "property_manager") || (!isset($_SESSION['fname']))) {
    header("Location: ../login.php");
}
if ((!isset($_SESSION['language']))) {

    include'../language/English.php';
} else if ($_SESSION['language'] == 'English') {

    include'../language/English.php';
} else if ($_SESSION['language'] == 'Amharic') {

    include'../language/Amharic.php';
}
?>
