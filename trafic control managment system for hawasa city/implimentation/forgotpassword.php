<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/customone.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
</head>
<body>
<div class="row">
    <div class="container-fluid">
        <div class="col-md-offset-3 col-md-6">
            <div class="panel panel-primary" style="margin-top: 10%;">
                <div class="panel-heading">
                    <h4 class="panel-title">Forgot Password</h4>
                </div>
                <form  action="javascript:void(0);" id="forgotpassword" method="post" class="form-horizontal">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="office" class="control-label col-md-3 hidden-xs">work Place</label>
                            <div class="col-md-6">
                                <select name="office" id="office" class="form-control">
                                    <option value="roadAutherity">Road Transport Authority</option>
                                    <option value="tpa">Traffic Police</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="control-label col-md-3 hidden-xs">User Name</label>

                            <div class="col-md-6">
                                <input type="text" id="username" class="form-control" name="username"
                                       required="required" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pincode" class="control-label col-md-3 hidden-xs">Security Code</label>

                            <div class="col-md-6">
                                <input type="text" id="pincode" name="pincode" class="form-control" required="required" autocomplete="off"/>

                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="index.php" class="btn btn-success">Login</a>
                        <div class="pull-right">
                            <input type="submit" class="btn btn-primary" value="Send Request"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert2.min.js"></script>
<script src="js/forgotPassword.js"></script>
</body>
</html>