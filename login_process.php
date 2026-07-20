<?php
session_start();
include "db.php";

if(isset($_POST['email']) && isset($_POST['password']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['student_name'] = $row['fullname'];
        $_SESSION['student_email'] = $row['email'];

        header("Location: student_dashboard.php");
        exit();
    }
    else
    {
        echo "<script>
        alert('Invalid Email or Password');
        window.location='login.php';
        </script>";
    }
}
?>