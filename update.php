<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "goutam_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE students SET name='Vankudre Goutam Sunil' WHERE id='19UCS134'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>