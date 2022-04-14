<?php
require_once 'include/db.php';
session_start();
function generatePIN($digits = 4)
{
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while ($i < $digits) {
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
$username = "";
$date = date("Y-m-d");
if (isset($_POST['forgotpassword'])) {
    $pincode = mysqli_real_escape_string($db, $_POST["pincode"]);
    $office = mysqli_real_escape_string($db, $_POST["office"]);
    if (isset($_POST["forgotpassword"])) {
        $username = $_POST["username"];
        $password = $username . generatePIN();
        $usesrpassword = mysqli_real_escape_string($db, SHA1($password));
        if (strtolower($office) == strtolower("roadAutherity")) {
            $sqlforgotpassword = "update emp_user_list set user_password='$usesrpassword'
                                  WHERE emp_id='$username' and pincode='$pincode';";
            if (!mysqli_query($db, $sqlforgotpassword)) {
                echo "Error:" . mysqli_error($db);
            } else {
                if (mysqli_affected_rows($db) != 0) {
                    echo "your new password=" . $password;
                } else {
                    echo "Incorrect user name or security code !";
                }

            }
        } elseif (strtolower($office) == strtolower("tpa")) {
            $sqlforgotpassword = "update tpuser_list set user_password='$usesrpassword'
                                  WHERE tp_id='$username' and pincode='$pincode';";
            if (!mysqli_query($db, $sqlforgotpassword)) {
                echo "Error:" . mysqli_error($db);
            } else {
                if (mysqli_affected_rows($db) != 0) {
                    echo "your new password=" . $password;
                } else {
                    echo "Incorrect user name or security code !";
                }
            }
        }
    }
} elseif (isset($_POST["sendmessage"])) {
    $message = mysqli_real_escape_string($db, $_POST["message"]);
    $username = $_SESSION["login_user"];
    $sql = "INSERT INTO notification (notificationId, name, notification, date)
                VALUES (NULL, '$username', '$message', '$date');";
    if (!mysqli_query($db, $sql)) {
        echo "something wrong in the query !";
    } else {
        echo "You have succefully send your message !";
    }
}
?>