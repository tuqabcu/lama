<?php
require_once 'mycon.php';

function insertConsentForm($signedConsentForm, $userId){
    global $con;

    // Prepare the SQL statement
    $st = $con->prepare("insert into consent_forms(signedConsentForm,userId) values(?,?)");

    if ($st === false) {
        error_log("Error preparing statement: " . $con->error, 3, "/opt/lampp/htdocs/lama/db_connection.log");
        return false;
    }

    // Bind parameters
    $st->bind_param("ss", $signedConsentForm, $userId);

    // Execute the statement
    if (!$st->execute()) {
        error_log("Error executing statement: " . $st->error, 3, "/opt/lampp/htdocs/lama/db_connection.log");
        return false;
    }

    // Log successful signup
    error_log("Consent form inserted", 3, "/opt/lampp/htdocs/lama/db_connection.log");


    return true;
}