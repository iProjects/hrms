
<?php

include ("../DAL/MySqlConnection.php");
//include ("../DAL/SqlServerConnection.php");

try {

    if (isset($_POST['txtemail'])) {
        $email = trim(stripslashes($_POST['txtemail']));
    }
    if (isset($_POST['txtpwd'])) {
        $pwd = trim(stripslashes($_POST['txtpwd']));
    }
    if (isset($_POST['txttelephone'])) {
        $telephone = trim(stripslashes($_POST['txttelephone']));
    }
    if (isset($_POST['txtusertype'])) {
        $usertype = trim(stripslashes($_POST['txtusertype']));
    }
    if (isset($_POST['txtstatus'])) {
        $status = trim(stripslashes($_POST['txtstatus']));
    }
    if (isset($_POST['txtrole'])) {
        $role = trim(stripslashes($_POST['txtrole']));
    }

    $sql_insert = "INSERT INTO midiusers(email, pwd, telephone, usertype, status, role) VALUES (?,?,?,?,?,?)";

    $stmt = $conn->prepare($sql_insert);

    $stmt->bindValue(1, $email);
    $stmt->bindValue(2, $pwd);
    $stmt->bindValue(3, $telephone);
    $stmt->bindValue(4, $usertype);
    $stmt->bindValue(5, $status);
    $stmt->bindValue(6, $role);

    $stmt->execute();

    $stmt->closeCursor();

    CloseConnection();
    
    header('Location: ../Views/Account/Login.php');
    
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
 