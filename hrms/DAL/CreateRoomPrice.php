
<?php

session_start();

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

$rp_current_room_price = "-1";
$rp_additional_room_price = "-1";
$rp_parent_id = "-1";
$status = "-1";
$errormsg = '';

try {

    if (isset($_POST['txtrp_current_room_price'])) {
        $rp_current_room_price = trim(stripslashes($_POST['txtrp_current_room_price']));
    }
    if (isset($_POST['txtrp_additional_room_price'])) {
        $rp_additional_room_price = trim(stripslashes($_POST['txtrp_additional_room_price']));
    }
    if (isset($_POST['txtrp_parent_id'])) {
        $rp_parent_id = trim(stripslashes($_POST['txtrp_parent_id']));
    }
    if (isset($_POST['cbostatus'])) {
        $status = trim(stripslashes($_POST['cbostatus']));
    }

    $sql_select = "SELECT * FROM hrms_room_prices WHERE rp_current_room_price = ? AND  rp_parent_id = ? ";

    $stmt = $conn->prepare($sql_select);

    $stmt->bindValue(1, $rp_current_room_price);
    $stmt->bindValue(2, $rp_parent_id);

    $stmt->execute();

    $foundroomprice = $stmt->fetchAll();

    if (count($foundroomprice) > 0) {
        $stmt = null;
        $conn = null;

        $errormsg .= 'Room Price with Amount [ ' . $rp_current_room_price . ' ] Exists.';
        $errormsg .= error_get_last();
        $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';

        $_SESSION['servererrormessage'] = $errormsg;

        header("Location: ../Views/Account/error_message_view.php");

        return;
    }

    $sql_insert = "INSERT INTO hrms_room_prices(rp_current_room_price, rp_additional_room_price, rp_parent_id, rp_status) VALUES (?,?,?,?)";

    $stmt = $conn->prepare($sql_insert);

    $stmt->bindValue(1, $rp_current_room_price);
    $stmt->bindValue(2, $rp_additional_room_price);
    $stmt->bindValue(3, $rp_parent_id);
    $stmt->bindValue(4, $status);

    $stmt->execute();

    $stmt->closeCursor();

    CloseConnection();

    header('Location: ../Views/RoomPrice/List.php');
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
 