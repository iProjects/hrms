
<?php

session_start();

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

$room_description = "-1";
$room_type = "-1";
$room_hotel_id = "-1";
$room_no = "-1";
$room_photo = "-1";
$room_price = "-1";
$room_max_capacity = "-1";
$room_no_of_beds = "-1";
$room_smoking = "-1";
$status = "-1";
$errormsg = '';

try {

    if (isset($_POST['txtroom_description'])) {
        $room_description = trim(stripslashes($_POST['txtroom_description']));
    }
    if (isset($_POST['cboroom_type'])) {
        $room_type = trim(stripslashes($_POST['cboroom_type']));
    }
    if (isset($_POST['cboroom_hotel_id'])) {
        $room_hotel_id = trim(stripslashes($_POST['cboroom_hotel_id']));
    }
    if (isset($_POST['txtroom_no'])) {
        $room_no = trim(stripslashes($_POST['txtroom_no']));
    }
    if (isset($_POST['txtroom_photo'])) {
        $room_photo = trim(stripslashes($_POST['txtroom_photo']));
    }
    if (isset($_POST['cborm_room_price'])) {
        $room_price = trim(stripslashes($_POST['cborm_room_price']));
    }
    if (isset($_POST['txtroom_max_capacity'])) {
        $room_max_capacity = trim(stripslashes($_POST['txtroom_max_capacity']));
    }
    if (isset($_POST['txtroom_no_of_beds'])) {
        $room_no_of_beds = trim(stripslashes($_POST['txtroom_no_of_beds']));
    }
    if (isset($_POST['chkroom_smoking'])) {
        $room_no_of_beds = trim(stripslashes($_POST['chkroom_smoking']));
    }
    if (isset($_POST['cbostatus'])) {
        $status = trim(stripslashes($_POST['cbostatus']));
    }

    $sql_select = "SELECT * FROM hrms_rooms WHERE room_description = ?";

    $stmt = $conn->prepare($sql_select);

    $stmt->bindValue(1, $room_description);

    $stmt->execute();

    $foundroom = $stmt->fetchAll();

    if (count($foundroom) > 0) {
        $stmt = null;
        $conn = null;

        $errormsg .= 'Room with Description [ ' . $room_description . ' ] Exists.';
        $errormsg .= error_get_last();
        $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';

        $_SESSION['servererrormessage'] = $errormsg;

        header("Location: ../Views/Account/error_message_view.php");

        return;
    }

    $sql_insert = "INSERT INTO hrms_rooms(room_description, room_type, room_hotel_id, room_no, room_photo, rm_room_price, room_max_capacity, room_no_of_beds, room_smoking, room_status) VALUES (?,?,?,?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($sql_insert);

    $stmt->bindValue(1, $room_description);
    $stmt->bindValue(2, $room_type);
    $stmt->bindValue(3, $room_hotel_id);
    $stmt->bindValue(4, $room_no);
    $stmt->bindValue(5, $room_photo);
    $stmt->bindValue(6, $room_price);
    $stmt->bindValue(7, $room_max_capacity);
    $stmt->bindValue(8, $room_no_of_beds);
    $stmt->bindValue(9, $room_smoking);
    $stmt->bindValue(10, $status);

    $stmt->execute();

    $stmt->closeCursor();

    CloseConnection();

    header('Location: ../Views/Room/List.php');
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
 