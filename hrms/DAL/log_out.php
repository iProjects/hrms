
<?php

session_start();

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

try {

    unset($_SESSION["loginflag"]);

    unset($_SESSION["loggedinuser"]);

    unset($_SESSION["servererrormessage"]);

    unset($_SESSION["serversucessmessage"]);

    setcookie("logincookie", "", time() + (3600 * -1));

    $stmt = null;
    $conn = null;

    header("Location: ../Views/Account/Login.php");
    
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
 