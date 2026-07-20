<?php
session_start();
include("db.php");

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Check if student ID is received
if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

    // Delete student
    $sql = "DELETE FROM students WHERE id = $id";

    if (mysqli_query($conn, $sql)) {

        echo "<script>
                alert('Student deleted successfully!');
                window.location='manage_students.php';
              </script>";

    } else {

        echo "<script>
                alert('Error deleting student!');
                window.location='manage_students.php';
              </script>";
    }

} else {

    header("Location: manage_students.php");
    exit();
}
?>