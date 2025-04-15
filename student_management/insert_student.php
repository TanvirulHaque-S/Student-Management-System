<?php
include 'db_connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO students (id, name, email, phone)
        VALUES ('$id', '$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "Student added successfully. <a href='index.php'>Home</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>