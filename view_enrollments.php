<?php
include 'db_connection.php';

$sql = "
SELECT s.name AS student_name, c.name AS course_name
FROM enrollment e
JOIN students s ON e.student_id = s.id
JOIN courses c ON e.course_id = c.id
";

$result = $conn->query($sql);

echo "<h2>Enrollment List</h2>";
echo "<table border='1'><tr><th>Student</th><th>Course</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['student_name']}</td>
        <td>{$row['course_name']}</td>
    </tr>";
}

$conn->close();
?>