<?php

$host = "localhost";
$port = "3306";
$db = "hrmsdb";
$user = "sa";
$pwd = "sa";
$successmsg = "";
$errormsg = "";
$conn = '';
$stmt = '';

try {

    $conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($conn) {
        //return $conn;
    } else {
        $errormsg .= "connection failed...</br/>";
        $errormsg .= error_get_last();
        echo ($errormsg);
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

    $_SESSION['servererrormessage'] = $errormsg;

    echo ($errormsg);

    header("Location: ../Views/Account/error_message_view.php");
}

function CloseConnection() {
    $conn = null;
}

?>
