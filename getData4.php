<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ccfit";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT hasil_test_4 FROM tes_result";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    // Fetch data from each row
    while ($row = $result->fetch_assoc()) {
        $data = $row['hasil_test_4'];
    }
}

// Return the data as JSON without escaping slashes
echo json_encode($data);

// Close the connection
$conn->close();
?>
