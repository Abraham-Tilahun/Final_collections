<?php
/*if(is_uploaded_file($_FILES['profile']['tmp_name'])) {
    if(is_uploaded_file($_FILES['profile']['tmp_name'])) {
        $extension = explode("/", $_FILES["profile"]["type"]);
        $_FILES['profile']['name']="gech.".$extension[1];
        $sourcePath = $_FILES['profile']['name'];
        echo strtolower($_FILES['profile']['type']);
    }
}*//*
$date=date_create("2013-03-15");
date_sub($date,date_interval_create_from_date_string("40 days"));
//echo date_format($date,"Y-m-d");

$date = date('Y-m-j');
$newdate = strtotime ( '-7 day' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-j' , $newdate );
if($date>$newdate)
echo $date;

//echo " ". $diff;*/
require_once "domPdf/dompdf_config.inc.php";
$content="hello world";
$pdf=new DOMPDF();
$pdf->load_html($content);
$pdf->render();
$pdf->stream("sample.pdf");


?>