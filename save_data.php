<?php
// Add your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cfit2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the AJAX request
$namaa = $_POST['namaa'];
$jabatan = $_POST['jabatan'];
$pendidikann = $_POST['pendidikann'];
$tanggal_testa = $_POST['tanggal_testa'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$usia = $_POST['usia'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];

// Perform any necessary validation or sanitization here

// Insert data into the database
$sql = "INSERT INTO answer (namaa, jabatan, pendidikann, tanggal_testa, tanggal_lahir, usia, sub1, sub2, sub3, sub4)
        VALUES ('$namaa', '$jabatan', '$pendidikann', '$tanggal_testa', '$tanggal_lahir', '$usia', '$sub1', '$sub2', '$sub3', '$sub4')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
