
<?php

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

try {

    if (isset($_POST['publicipaddress'])) {
        $email = trim(stripslashes($_POST['publicipaddress']));
    }
    if (isset($_POST['country'])) {
        $pwd = trim(stripslashes($_POST['country']));
    }

    $sql_select = "SELECT * FROM hrmsusers WHERE email = ? and pwd = ?";

    $stmt = $conn->prepare($sql_select);

    $stmt->bindValue(1, $email);
    $stmt->bindValue(2, $pwd);

    $stmt->execute();

    $founduser = $stmt->fetchAll();

    if ($founduser) {
        $_SESSION['loginflag'] = true;

        $_SESSION['loggedinuser'] = $email;

        setcookie("logincookie", $email, time() + (3600 * 2));

        $stmt->closeCursor();

        CloseConnection();

        header("Location: ../Views/Home/Index.php");
    } else {
        unset($_SESSION["loginflag"]);

        unset($_SESSION["loggedinuser"]);

        session_destroy();

        $_SESSION = array();

        setcookie("logincookie", "", time() + (3600 * -1));

        $stmt->closeCursor();

        CloseConnection();

        $errormsg .= 'Incorrect Credentials. Check your Email and Password.';
        $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';

        echo $errormsg;
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
    $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';
    echo $errormsg;
}
?>
 