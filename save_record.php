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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    if(isset($_POST["address"]))
    {
        $address = $_POST["address"];
        // Save data to the database
        $sql = "INSERT INTO addresses (address) VALUES ('$address')";

        if ($conn->query($sql) === TRUE) {
            $response['status'] = 'Success';
            echo json_encode($response);
        } else {
            // Error in database insertion
            echo("Error: " . $sql . "<br>" . $conn->error);
        }   
    }
}

// Close the database connection
$conn->close();
?>