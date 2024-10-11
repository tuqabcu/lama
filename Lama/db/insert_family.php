<?php
session_start(); // Start the session
header('Content-Type: application/json');

require_once 'mycon.php';

function insertFamilyPedigree($csv, $img, $userId){
    global $con;

    $st = $con->prepare("INSERT INTO family_pedigree(csv, img, userId) VALUES (?, ?, ?)");
    
    if ($st === false) {
        error_log("Error preparing statement: " . $con->error, 3, "/opt/lampp/htdocs/lama/db_connection.log");
        return false;
    }

    $st->bind_param("sss", $csv, $img, $userId);

    if (!$st->execute()) {
        error_log("Error executing statement: " . $st->error, 3, "/opt/lampp/htdocs/lama/db_connection.log");
        return false;
    }

    error_log("Personal info inserted", 3, "/opt/lampp/htdocs/lama/db_connection.log");

    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON data from the request body
    $data = json_decode(file_get_contents('php://input'), true);

    // Extract the values
    $csv = $data['csv'] ?? null;
    $img = $data['img'] ?? null;
    // $userId = $data['userId'] ?? null;
    $userId = $_SESSION['userid'] ?? null;


    // Call the insert function with the retrieved values
    $result = insertFamilyPedigree($csv, $img, $userId);

    // Return the result as JSON
    echo json_encode(['success' => $result]);
}
?>
