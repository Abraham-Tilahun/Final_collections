<?php
include('include/db.php');
if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($db, $_POST['search']);
    //echo $search;
    $sql = "SELECT * FROM driver WHERE lnumber LIKE '$search%' OR fname LIKE '$search%' or lname LIKE '$search%'; ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        die("Error in Query");
    }
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $output = "";
        while ($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
            $output .= '<tr>';
            $output .= '<td>' . $row['lnumber'] . '</td >';
            $output .= '<td>' . $row['fname'] . " , " . $row['lname'] . '</td >';
            $output .= '<td>' . $row['region'] . '</td >';
            $output .= '<td>' . $row['level'] . '</td >';
            $output .= '<td>' . $row['pnum'] . '</td >';
            $output .= '<td>
                            <a href="editDriverProfile.php ?id=' . $row['lnumber'] . '"
                                   class="btn btn-default edit"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#driverinfo' . $row['lnumber'] . '" data-toggle="modal"
                                   class="btn btn-info info"><i class="fa fa-file"></i> Info </a>
                          </td >';
            $output .='<td>
                          <button type="button" class="btn btn-danger" onclick="manageAccount('.$row['lnumber'].')">
                          <i class="fa fa-toggle-on"></i>Deactivate </button>
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

