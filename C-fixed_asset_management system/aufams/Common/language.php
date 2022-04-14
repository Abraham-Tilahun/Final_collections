<?php
session_start();

if((!isset($_SESSION['language']))){
  
    include'../language/English.php';
}
else if($_SESSION['language']=='English') {
   
   include'../language/English.php';  
}
else if($_SESSION['language']=='Amharic') {
  
   include'../language/Amharic.php';
  
}?>
