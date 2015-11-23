
<?php

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

try {

    if (isset($_POST['txtassetname'])) {
        $assetname = trim(stripslashes($_POST['txtassetname']));
    }
    if (isset($_POST['txtassettype'])) {
        $assettype = trim(stripslashes($_POST['txtassettype']));
    }
    if (isset($_POST['dtpdateacquired'])) {
        $dateacquired = trim(stripslashes($_POST['dtpdateacquired']));
    }
    if (isset($_POST['txtacquiredvalue'])) {
        $acquiredvalue = trim(stripslashes($_POST['txtacquiredvalue']));
    }
    if (isset($_POST['txtcurrentvalue'])) {
        $currentvalue = trim(stripslashes($_POST['txtcurrentvalue']));
    }

    $sql_insert = "INSERT INTO midiassets(assetname, assettype, dateacquired, acquiredvalue, currentvalue) VALUES (?,?,?,?,?)";

    $stmt = $conn->prepare($sql_insert);

    $stmt->bindValue(1, $assetname);
    $stmt->bindValue(2, $assettype);
    $stmt->bindValue(3, $dateacquired);
    $stmt->bindValue(4, $acquiredvalue);
    $stmt->bindValue(5, $currentvalue);

    $stmt->execute();

    $stmt->closeCursor();

    CloseConnection();

    header('Location: ../Views/Asset/List.php');
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
 