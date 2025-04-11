<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = ""; // Default password in XAMPP
$dbname = "StudentRecords";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data
$studentname = $_POST['studentname'];
$studentid = $_POST['studentid'];
$dateofbirth = $_POST['dateofbirth'];
$courseid = $_POST['courseid'];

// Insert data into the table
$sql = "INSERT INTO Students (studentname, studentid, dateofbirth, courseid)
VALUES ('$studentname', '$studentid', '$dateofbirth', '$courseid')";

if ($conn->query($sql) === TRUE) {
    echo "Record saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
