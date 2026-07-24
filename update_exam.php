<?php
include "db.php";

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $exam_title = $_POST['exam_title'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $total_marks = $_POST['total_marks'];
    $exam_date = $_POST['exam_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $status = $_POST['status'];

    $sql = "UPDATE exams SET
            exam_title='$exam_title',
            subject='$subject',
            description='$description',
            duration='$duration',
            total_marks='$total_marks',
            exam_date='$exam_date',
            start_time='$start_time',
            end_time='$end_time',
            status='$status'
            WHERE id='$id'";

    if(mysqli_query($conn, $sql))
    {
        echo "<script>
                alert('Exam Updated Successfully');
                window.location='manage_exams.php';
              </script>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
else
{
    header("Location: manage_exams.php");
    exit();
}
?>