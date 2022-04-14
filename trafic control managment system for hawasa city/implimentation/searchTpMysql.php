<?php
include('include/db.php');
if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($db, $_POST['search']);
    //echo $search;
    $sql = "SELECT * FROM traffic_police WHERE tp_id LIKE '$search%' OR rank LIKE '$search%' OR fname LIKE '$search%' OR role LIKE '$search%'; ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        die("Error in Query");
    }
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $output = "";
        while ($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
            $output .= '<tr>';
            $output .= '<td>' . $row['tp_id'] . '</td >';
            $output .= '<td>' . $row['fname'] . " ".$row['mname']." ". $row['lname'] . '</td >';
            $output .= '<td>' . $row['rank'] . '</td >';
            $output .= '<td>' . $row['role'] . '</td >';
            $output .= '<td>' . $row['phone'] . '</td >';
            $output .= '<td>
                            <a href="edittpProfile.php ?id=' . $row['tp_id'] . '"
                                   class="btn btn-default edit"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#tpinfo' . $row['tp_id'] . '" data-toggle="modal"
                                   class="btn btn-info info"><i class="fa fa-file"></i> Info </a>
                          </td >';
            $output .='<td>
                          <button type="button" class="btn btn-danger" onclick="manageAccount('.$row['tp_id'].')">
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

