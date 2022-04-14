<?php
session_start();
require_once 'class.user.php';
$user = new USER();
if (isset($_POST['btn-submit'])) {
    $email = $_POST['txtemail'];

    $stmt = $user->runQuery("SELECT userId FROM user_account WHERE EMAIL=:email LIMIT 1");
  
    $stmt->execute(array(":email" => $email));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($stmt->rowCount() == 1) {
        $id = $row['userId'];
        $code = md5(uniqid(rand()));

        $stmt = $user->runQuery("UPDATE user_account SET Verification=:token WHERE EMAIL=:email");
        $stmt->execute(array(":token" => $code, "email" => $email));

        $message = "
				   Hello , $email
				   <br /><br />
                                   This message was send from Assosa university fixed asset management system<br/>
				   We got requested to reset your password, if you do this then just click the following link to reset your password, if not just ignore                   this email,
				   <br /><br />
				   Click Following Link To Reset Your Password 
				   <br /><br />
				   <a href='localhost/aufams/recover_account/resetpass.php?id=$id&code=$code'>click here to reset your password</a>
				   <br /><br />
				   thank you :)
				   ";
        $subject = "Password Reset";

        $user->send_mail($email, $message, $subject);

        $msg = "<div class='alert alert-success'>
					<button class='close' data-dismiss='alert'>&times;</button>
					We've sent an email to $email.
                    Please click on the password reset link in the email to generate new password. 
			  	</div>";
    } else {
        $msg = "<div class='alert alert-danger'>
					<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry!</strong>  this email not found. 
			    </div>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        
    </head>
    <body id="login">
        <div class="container">

            <form class="form-signin" method="post">
                <h2 class="form-signin-heading">Forgot Password</h2><hr />

<?php
if (isset($msg)) {
    echo $msg;
} else {
    ?>
                    <div class='alert alert-info'>
                        Please enter your email address. You will receive a link to create a new password via email.!
                    </div>  
                    <?php
                }
                ?>

                <input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required />
                <hr />
                <button class="btn btn-danger btn-primary" type="submit" name="btn-submit">Generate new Password</button>
            </form>

        </div> <!-- /container -->
        <script src="bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>