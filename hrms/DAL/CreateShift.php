
<?php

session_start();

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

$shift_day_of_week = "-1";
$shift_start_time = "-1";
$shift_end_time = "-1";
$status = "-1";
$errormsg = '';

try {

    if (isset($_POST['dtpshift_day_of_week'])) {
        $shift_day_of_week = trim(stripslashes($_POST['dtpshift_day_of_week']));
    }
    if (isset($_POST['txtshift_start_time'])) {
        $shift_start_time = trim(stripslashes($_POST['txtshift_start_time']));
    }
    if (isset($_POST['txtshift_end_time'])) {
        $shift_end_time = trim(stripslashes($_POST['txtshift_end_time']));
    }
    if (isset($_POST['cbostatus'])) {
        $status = trim(stripslashes($_POST['cbostatus']));
    }

    $sql_select = "SELECT * FROM hrms_shifts WHERE shift_day_of_week = ?";

    $stmt = $conn->prepare($sql_select);

    $stmt->bindValue(1, $shift_day_of_week);

    $stmt->execute();

    $foundShift = $stmt->fetchAll();

    if (count($foundShift) > 0) {
        $stmt = null;
        $conn = null;

        $errormsg .= 'Shift for Date [ ' . $shift_day_of_week . ' ] Exists.';
        $errormsg .= error_get_last();
        $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';

        $_SESSION['servererrormessage'] = $errormsg;

        header("Location: ../Views/Account/error_message_view.php");

        return;
    }

    $sql_insert = "INSERT INTO hrms_shifts(shift_day_of_week, shift_start_time, shift_end_time, shift_status) VALUES (?,?,?,?)";

    $stmt = $conn->prepare($sql_insert);

    $stmt->bindValue(1, $shift_day_of_week);
    $stmt->bindValue(2, $shift_start_time);
    $stmt->bindValue(3, $shift_end_time);
    $stmt->bindValue(4, $status);

    $stmt->execute();

    $stmt->closeCursor();

    CloseConnection();

    header('Location: ../Views/Shift/List.php');
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
 