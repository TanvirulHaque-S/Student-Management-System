<?php
include 'db_connection.php';

$student_id = $_POST['student_id'];
$course_id = $_POST['course_id'];

$sql = "INSERT INTO enrollment (student_id, course_id)
        VALUES ('$student_id', '$course_id')";

if ($conn->query($sql) === TRUE) {
    echo "Student enrolled successfully. <a href='index.php'>Home</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>