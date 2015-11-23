
<?php

session_start();

//establish database connection. Should be called once in a page.                                                    
include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

$email = "-1";
$password = "-1";
$errormsg = '';

try {

    if (isset($_POST['txtusername'])) {
        $email = trim(stripslashes($_POST['txtusername']));
    }
    if (isset($_POST['txtpassword'])) {
        $password = trim(stripslashes($_POST['txtpassword']));
    }

    $sql_select = "SELECT * FROM hrms_users WHERE us_email = ?";

    $stmt = $conn->prepare($sql_select);

    $stmt->bindValue(1, $email);

    $stmt->execute();

    $founduser = $stmt->fetchAll();

    if (count($founduser) > 0) {

        $sql_select = "SELECT * FROM hrms_users WHERE us_email = ? and us_pwd = ?";

        $stmt = $conn->prepare($sql_select);

        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $password);

        $stmt->execute();

        $founduser = $stmt->fetchAll();

        if (count($founduser) > 0) {

            $_SESSION['loginflag'] = true;

            $_SESSION['loggedinuser'] = $email;

            setcookie("logincookie", $email, time() + (3600 * 2));

            $stmt = null;
            $conn = null;

            //header("Location: ../Views/Account/error_message_view.php");
            header("Location: ../Views/Home/Index.php");
            
        } else {

            unset($_SESSION["loginflag"]);

            unset($_SESSION["loggedinuser"]);

            unset($_SESSION["servererrormessage"]);

            unset($_SESSION["serversucessmessage"]);

            setcookie("logincookie", "", time() + (3600 * -1));

            $stmt = null;
            $conn = null;

            $errormsg .= 'Incorrect Credentials. Check your Password.';
            $errormsg .= error_get_last();

            $_SESSION['servererrormessage'] = $errormsg;

            header("Location: ../Views/Account/Login.php");
            
        }
    } else {

        unset($_SESSION["loginflag"]);

        unset($_SESSION["loggedinuser"]);

        unset($_SESSION["servererrormessage"]);

        unset($_SESSION["serversucessmessage"]);

        setcookie("logincookie", "", time() + (3600 * -1));

        $stmt = null;
        $conn = null;

        $errormsg .= "User [ " . $email . " ] does not exist.";
        $errormsg .= error_get_last();

        $_SESSION['servererrormessage'] = $errormsg;

        header("Location: ../Views/Account/Login.php");
        
    }
} catch (Exception $e) {

    $errormsg .= $e->getMessage();

    if ($e->getTraceAsString() != NULL) {
        $errormsg .= "<br/>" . $e->getTraceAsString();
    }

    if (error_get_last() != NULL) {
        $errormsg .= "<br/>" . error_get_last();
    }

    $stmt = null;
    $conn = null;

    $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';

    $_SESSION['servererrormessage'] = $errormsg;

    echo ($errormsg);

    header("Location: ../Views/Account/error_message_view.php");
    
}
?>
 