<?php
include "db.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM exams WHERE id='$id'";

    if(mysqli_query($conn, $sql))
    {
        echo "<script>
                alert('Exam Deleted Successfully');
                window.location='manage_exams.php';
              </script>";
    }
    else
    {
        echo "<script>
                alert('Failed to Delete Exam');
                window.location='manage_exams.php';
              </script>";
    }
}
else
{
    header("Location: manage_exams.php");
    exit();
}
?>