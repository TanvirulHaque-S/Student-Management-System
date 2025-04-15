<?php
include 'db_connection.php';

$name = $_POST['name'];
$sql = "INSERT INTO courses (name) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
    echo "Course added successfully. <a href='index.php'>Home</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>