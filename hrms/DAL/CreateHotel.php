
<?php

session_start();

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

$hotel_name = "-1";
$hotel_phone = "-1";
$hotel_email = "-1";
$hotel_address = "-1";
$hotel_country = "-1";  
$status = "-1";
$errormsg = '';

try {

    if (isset($_POST['txthotel_name'])) {
        $hotel_name = trim(stripslashes($_POST['txthotel_name']));
    }
    if (isset($_POST['txthotel_phone'])) {
        $hotel_phone = trim(stripslashes($_POST['txthotel_phone']));
    }
    if (isset($_POST['txthotel_email'])) {
        $hotel_email = trim(stripslashes($_POST['txthotel_email']));
    }
    if (isset($_POST['txthotel_address'])) {
        $hotel_address = trim(stripslashes($_POST['txthotel_address']));
    }
    if (isset($_POST['cbohotel_country'])) {
        $hotel_country = trim(stripslashes($_POST['cbohotel_country']));
    } 
    if (isset($_POST['cbostatus'])) {
        $status = trim(stripslashes($_POST['cbostatus']));
    }

    $sql_select = "SELECT * FROM hrms_hotels WHERE hotel_name = ?";

    $stmt = $conn->prepare($sql_select);

    $stmt->bindValue(1, $hotel_name);

    $stmt->execute();

    $foundhotel = $stmt->fetchAll();

    if (count($foundhotel) > 0) {
        $stmt = null;
        $conn = null;

        $errormsg .= 'Room with Description [ ' . $hotel_name . ' ] Exists.';
        $errormsg .= error_get_last();
        $errormsg .= '<br/><input type="button" value="Back" onclick="window.history.go(-1); return false;" />';

        $_SESSION['servererrormessage'] = $errormsg;

        header("Location: ../Views/Account/error_message_view.php");

        return;
    }

    $sql_insert = "INSERT INTO hrms_hotels(hotel_name, hotel_phone, hotel_email, hotel_address, hotel_country, hotel_status) VALUES (?,?,?,?,?,?)";

    $stmt = $conn->prepare($sql_insert);

    $stmt->bindValue(1, $hotel_name);
    $stmt->bindValue(2, $hotel_phone);
    $stmt->bindValue(3, $hotel_email);
    $stmt->bindValue(4, $hotel_address);
    $stmt->bindValue(5, $hotel_country); 
    $stmt->bindValue(6, $status);

    $stmt->execute();

    $stmt->closeCursor();

    CloseConnection();

    header('Location: ../Views/Hotel/List.php');
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
 