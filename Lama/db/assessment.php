<?php
require_once 'mycon.php';

function insertPatientAssessment($q1, $q2, $q3, $q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15, $userId){
    global $con;

    // Prepare the SQL statement
    $st = $con->prepare("insert into patient_assessments(q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,userId) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    if ($st === false) {
        error_log("Error preparing statement: " . $con->error, 3, "/opt/lampp/htdocs/lama/db_connection.log");
        return false;
    }

    // Bind parameters
    $st->bind_param("ssssssssssssssss", $q1, $q2, $q3, $q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15, $userId);

    // Execute the statement
    if (!$st->execute()) {
        error_log("Error executing statement: " . $st->error, 3, "/opt/lampp/htdocs/lama/db_connection.log");
        return false;
    }

    // Log successful signup
    error_log("assessment inserted", 3, "/opt/lampp/htdocs/lama/db_connection.log");


    return true;
}