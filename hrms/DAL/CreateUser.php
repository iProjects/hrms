
<?php

session_start();

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

$email = "-1";
$pwd = "-1";
$phone = "-1";
$status = "-1";
$role = "-1";
$errormsg = '';

try {

    if (isset($_POST['txtemail'])) {
        $email = trim(stripslashes($_POST['txtemail']));
    }
    if (isset($_POST['txtpwd'])) {
        $pwd = trim(stripslashes($_POST['txtpwd']));
    }
    if (isset($_POST['txtphone'])) {
        $phone = trim(stripslashes($_POST['txtphone']));
    }
    if (isset($_POST['cbostatus'])) {
        $status = trim(stripslashes($_POST['cbostatus']));
    }
    if (isset($_POST['cborole'])) {
        $role = trim(stripslashes($_POST['cborole']));
    }

    $sql_select = "SELECT * FROM hrms_users WHERE us_email = ?";

    $stmt = $conn->prepare($sql_select);

    $stmt->bindValue(1, $email);

    $stmt->execute();

    $founduser = $stmt->fetchAll();

    if (count($founduser) > 0) {
        $stmt = null;
        $conn = null;

        $errormsg .= 'User with email [ ' . $email . ' ] Exists.';
        $errormsg .= error_get_last();
        $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';

        $_SESSION['servererrormessage'] = $errormsg;

        header("Location: ../Views/Account/error_message_view.php");
        
        return;
    }

    $sql_insert = "INSERT INTO hrms_users(us_email, us_pwd, us_telephone, us_status, us_role) VALUES (?,?,?,?,?)";

    $stmt = $conn->prepare($sql_insert);

    $stmt->bindValue(1, $email);
    $stmt->bindValue(2, $pwd);
    $stmt->bindValue(3, $phone);
    $stmt->bindValue(4, $status);
    $stmt->bindValue(5, $role);

    $stmt->execute();

    $stmt->closeCursor();

    CloseConnection();

    header('Location: ../Views/User/List.php');
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
 