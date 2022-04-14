<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
</head>
<script>
    function checkMe(id) {
        alert(id + "Clicked");
    }
</script>
<body>
<?php
include 'include/db.php';
$sql = "SELECT * FROM employee;";
$res = mysqli_query($db, $sql);
if (!$res) {
    echo "something wrong";
}
?>

<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <table id="dataTabls" class="table table-bordered" style="text-align: center;">
            <thead>
            <tr>
                <th>Employee Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>sex</th>
                <th>role</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_array($res)) {
            ?>
            <tr>
                <td><?= $row['emp_id'] ?></td>
                <td><?= $row['fname'] ?></td>
                <td><?= $row['lname'] ?></td>
                <td><?= $row['sex'] ?></td>
                <td><?= $row['role'] ?></td>
                <td><a href="#<?=$row['emp_id'];?>" class="btn btn-primary" data-toggle="modal">Edit</a></td>
                <td>
                    <button class="btn btn-warning" onclick="checkMe('<?php echo $row['emp_id']; ?>');">
                        Delete
                    </button>
                </td>
            </tr>
            <div class="modal fade" id="<?=$row['emp_id'];?>" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close"
                                    data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                This Modal title
                            </h4>
                        </div>
                        <div class="modal-body">
                            <?=$row['emp_id'];?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                                    data-dismiss="modal">Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Submit changes
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTabls').dataTable({
            "bJQueryUI": true
        });
    })
</script>
</body>
</html>