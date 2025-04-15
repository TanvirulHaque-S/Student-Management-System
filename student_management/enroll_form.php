<?php
include 'db_connection.php';

$students = $conn->query("SELECT * FROM students");
$courses = $conn->query("SELECT * FROM courses");
?>

<form action="enroll.php" method="POST">
    Student:
    <select name="student_id">
        <?php while ($row = $students->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['name']}</option>";
        } ?>
    </select><br>

    Course:
    <select name="course_id">
        <?php while ($row = $courses->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['name']}</option>";
        } ?>
    </select><br>

    <input type="submit" value="Enroll">
</form>