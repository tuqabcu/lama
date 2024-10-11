<?php
$con = new mysqli("127.0.0.1", "root", "medicalapp##123", "lamadb");

// Check connection
if ($con->connect_error) {
    error_log("Connection failed: " . $con->connect_error, 3, "/opt/lampp/htdocs/lama/db_connection.log"); // Log to a custom file
    die("Connection failed: " . $con->connect_error);
} else {
    error_log("Connected successfully to the database.", 3, "/opt/lampp/htdocs/lama/db_connection.log"); // Log to a custom file
}

$con->set_charset("utf8");
?>
