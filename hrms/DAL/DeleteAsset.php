
<?php

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

try {

    if (isset($_POST['txtid'])) {
        $assetid = trim(stripslashes($_POST['txtid']));
    } 
echo $assetid;
    $sql_delete = "DELETE FROM midiassets WHERE id = ?";

    $stmt = $conn->prepare($sql_delete);

    $stmt->bindValue(1, $assetid); 

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
 