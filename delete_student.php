<?php
include 'db_connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Student deleted. <a href='view_students.php'>Back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>