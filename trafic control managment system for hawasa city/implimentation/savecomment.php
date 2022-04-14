<?php
require_once 'include/db.php';
session_start();
if(isset($_POST['tittle'])){
    $name=$_SESSION['login_user'];
    $tittle=$_POST['tittle'];
    $detail=$_POST['detail'];
    $sql="INSERT INTO forumdiscussion (id,name,tittle,message) VALUES (null,'$name','$tittle','$detail');";
    $result=mysqli_query($db,$sql);
    if(!$result){
        echo("your query is not correct");

    }else{
        return true;
    }
}
mysqli_close($db);