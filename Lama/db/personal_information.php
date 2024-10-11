<?php
require_once 'mycon.php';

function insertPersonalInfo($pid, $mrn, $name, $dob,$gender,$ms,$ancestry,$userId){
    global $con;

    // Prepare the SQL statement
    $st = $con->prepare("insert into personal_infos(pid, mrn, name,dob,gender,ms,ancestry,userId) values(?,?,?,?,?,?,?,?)");

    if ($st === false) {
        error_log("Error preparing statement: " . $con->error, 3, "/opt/lampp/htdocs/lama/db_connection.log");
        return false;
    }

    // Bind parameters
    $st->bind_param("ssssssss", $pid, $mrn, $name, $dob,$gender,$ms, $ancestry,$userId);

    // Execute the statement
    if (!$st->execute()) {
        error_log("Error executing statement: " . $st->error, 3, "/opt/lampp/htdocs/lama/db_connection.log");
        return false;
    }

    // Log successful signup
    error_log("Personal info inserted", 3, "/opt/lampp/htdocs/lama/db_connection.log");


    return true;
}