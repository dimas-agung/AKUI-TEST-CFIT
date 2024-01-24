<?php
// Assuming you have a database connection established

// Example connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccfit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute the query
$result = $conn->query($subi1);

// Check if the query was successful
if ($result) {
    $row = $result->fetch_assoc();
    $ssub1 = $row['hasil_test_1'];
} else {
    // Handle the error
    echo "Error: " . $subi1 . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
