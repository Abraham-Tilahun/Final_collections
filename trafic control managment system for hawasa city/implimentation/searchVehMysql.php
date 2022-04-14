<?php
include('include/db.php');
if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($db, $_POST['search']);
    //echo $search;
    $sql = "SELECT * FROM vehicle WHERE plateNumber LIKE '$search%' OR oname LIKE '$search%'; ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        die("Error in Query");
    }
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $output = "";
        while ($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
            $output .= '<tr>';
            $output .= '<td>' . $row['plateNumber'] . '</td >';
            $output .= '<td>' . $row['oname'] . " ,". $row['sex'] ." , " . $row['region'] . '</td >';
            $output .= '<td>' . $row['vehicleType'] . '</td >';
            $output .= '<td>' . $row['madeIn'] . '</td >';
            $output .= '<td>+' . $row['color'] . '</td >';
            $output .= '<td>
                            <a href="editVehicleProfile.php ?id=' . $row['plateNumber'] . '"
                                   class="btn btn-default edit"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#vehicleInfo' . $row['plateNumber'] . '" data-toggle="modal"
                                   class="btn btn-info info"><i class="fa fa-file"></i> Info </a>
                          </td >';
            $output .='<td>
                          <a href="#delete'.$row['plateNumber'].'" data-toggle="modal" class="btn btn-danger" >
                          <i class="fa fa-remove"></i>Delete </a>
                        </td >';
            $output .= '</tr > ';
        }
        echo $output;
    } else {
        echo "1";
    }
}
mysqli_close($db);
?>

