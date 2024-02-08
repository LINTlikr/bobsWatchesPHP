<?php
// Database connection parameters
$servername = "sql3.freemysqlhosting.net";
$username = "sql3682717";
$password = "TG88p8sIlD";
$database = "sql3682717";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the latest record from the addresses table
$sql = "SELECT * FROM addresses ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
$response = [];
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response['address'] = $row["address"];
}

// Close the database connection
$conn->close();

// Return the response as JSON
echo json_encode($response);
?>
