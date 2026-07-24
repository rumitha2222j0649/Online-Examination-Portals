<?php
include "db.php";

if(isset($_POST['exam_title']))
{
    $exam_title = $_POST['exam_title'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $total_marks = $_POST['total_marks'];
    $exam_date = $_POST['exam_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $status = $_POST['status'];

    $sql = "INSERT INTO exams
    (exam_title,subject,description,duration,total_marks,exam_date,start_time,end_time,status)
    VALUES
    ('$exam_title','$subject','$description','$duration','$total_marks','$exam_date','$start_time','$end_time','$status')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Exam Created Successfully');
        window.location='manage_exams.php';
        </script>";
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }
}
?>