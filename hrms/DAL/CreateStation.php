
<?php

session_start();

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

$description = "-1"; 
$status = "-1"; 
$errormsg = '';

try {

    if (isset($_POST['txtstation_description'])) {
        $description = trim(stripslashes($_POST['txtstation_description']));
    } 
    if (isset($_POST['cbostatus'])) {
        $status = trim(stripslashes($_POST['cbostatus']));
    } 

    $sql_select = "SELECT * FROM hrms_stations WHERE station_description = ?";

    $stmt = $conn->prepare($sql_select);

    $stmt->bindValue(1, $description);

    $stmt->execute();

    $foundstation = $stmt->fetchAll();

    if (count($foundstation) > 0) {
        $stmt = null;
        $conn = null;

        $errormsg .= 'Station with Description [ ' . $description . ' ] Exists.';
        $errormsg .= error_get_last();
        $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';

        $_SESSION['servererrormessage'] = $errormsg;

        header("Location: ../Views/Account/error_message_view.php");
        
        return;
    }

    $sql_insert = "INSERT INTO hrms_stations(station_description, station_status) VALUES (?,?)";

    $stmt = $conn->prepare($sql_insert);

    $stmt->bindValue(1, $description); 
    $stmt->bindValue(2, $status); 

    $stmt->execute();

    $stmt->closeCursor();

    CloseConnection();

    header('Location: ../Views/Station/List.php');
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
 