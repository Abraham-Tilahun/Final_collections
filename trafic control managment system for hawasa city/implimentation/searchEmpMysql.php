<?php
include('include/db.php');
if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($db, $_POST['search']);
    //echo $search;
    $sql = "SELECT * FROM employee WHERE emp_id LIKE '$search%' OR fname LIKE '$search%' or lname LIKE '$search%'; ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        die("Error in Query");
    }
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $output = "";
        while ($row = mysqli_fetch_array($result, MYSQL_BOTH)) {
            $output .= '<tr>';
            $output .= '<td>' . $row['emp_id'] . '</td >';
            $output .= '<td>' . $row['fname'] . " " . $row['lname'] . '</td >';
            $output .= '<td>' . $row['edu_status'] . '</td >';
            $output .= '<td>' . $row['role'] . '</td >';
            $output .= '<td>+' . $row['pnum'] . '</td >';
            $output .= '<td>
                            <a href="editEmployeeprofile.php ?id=' . $row['emp_id'] . '"
                                   class="btn btn-default edit"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#empinfo' . $row['emp_id'] . '" data-toggle="modal"
                                   class="btn btn-info info"><i class="fa fa-file"></i> Info </a>
                          </td >';
            $output .='<td>
                          <button type="button" class="btn btn-danger" onclick="manageAccount('.$row['emp_id'].')">
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

