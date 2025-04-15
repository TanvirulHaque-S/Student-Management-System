<?php
include 'db_connection.php';

$name = $_GET['name'];
$sql = "SELECT * FROM students WHERE name LIKE '%$name%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Search Results</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No matching students found.";
}

$conn->close();
?>