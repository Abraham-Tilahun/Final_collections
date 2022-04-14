<?php
require_once 'include/db.php';
$row = array();
$resEmp = mysqli_query($db, " SELECT count(*) AS emp FROM employee;");
$data = mysqli_fetch_assoc($resEmp);
$row['emp'] = $data['emp'];
$resDriv = mysqli_query($db, " SELECT count(*) AS driv FROM driver;");
$data = mysqli_fetch_assoc($resDriv);
$row['driv'] = $data['driv'];
$resTp = mysqli_query($db, " SELECT count(*) AS tp FROM traffic_police;");
$data = mysqli_fetch_assoc($resTp);
$row['tp'] = $data['tp'];
$resVeh = mysqli_query($db, " SELECT count(*) AS veh FROM vehicle;");
$data = mysqli_fetch_assoc($resVeh);
$row['veh'] = $data['veh'];
echo json_encode($row);
