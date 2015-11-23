
<?php

session_start();

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

$description = "-1"; 
$status = "-1"; 
$errormsg = '';

try {

    if (isset($_POST['txtroom_type_description'])) {
        $description = trim(stripslashes($_POST['txtroom_type_description']));
    } 
    if (isset($_POST['cbostatus'])) {
        $status = trim(stripslashes($_POST['cbostatus']));
    } 

    $sql_select = "SELECT * FROM hrms_room_types WHERE room_type_description = ?";

    $stmt = $conn->prepare($sql_select);

    $stmt->bindValue(1, $description);

    $stmt->execute();

    $foundroomtype = $stmt->fetchAll();

    if (count($foundroomtype) > 0) {
        $stmt = null;
        $conn = null;

        $errormsg .= 'Room Type with Description [ ' . $description . ' ] Exists.';
        $errormsg .= error_get_last();
        $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';

        $_SESSION['servererrormessage'] = $errormsg;

        header("Location: ../Views/Account/error_message_view.php");
        
        return;
    }

    $sql_insert = "INSERT INTO hrms_room_types(room_type_description, room_type_status) VALUES (?,?)";

    $stmt = $conn->prepare($sql_insert);

    $stmt->bindValue(1, $description); 
    $stmt->bindValue(2, $status); 

    $stmt->execute();

    $stmt->closeCursor();

    CloseConnection();

    header('Location: ../Views/RoomType/List.php');
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
 