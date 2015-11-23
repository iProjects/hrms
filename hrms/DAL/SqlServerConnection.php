<?php

$host = "localhost";
$db = "mididb";
$user = "sa";
$pwd = "sa";
$successmsg = "";

try {

    $conn = new PDO("sqlsrv:Server=$host;Database =$db", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($conn) {
        return $conn;
    } else {
        $successmsg = "connection failed...</br/>";
        $successmsg .= error_get_last();
        echo($successmsg);
        return $successmsg;
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

function CloseConnection() {
    $conn = null;
}

?>
