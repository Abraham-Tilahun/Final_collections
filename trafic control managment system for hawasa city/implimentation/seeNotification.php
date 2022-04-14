<?php
require_once 'include/db.php';
$sql="UPDATE notification SET status = 'seen';";
$res=mysqli_query($db,$sql);
if(!$res)
{
    echo "Error: ".mysqli_error($db);
}else{
    echo "Successful ";
}

?>