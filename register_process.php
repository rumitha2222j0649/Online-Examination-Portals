<?php
include "db.php";

if(isset($_POST['fullname']))
{
    $fullname = $_POST['fullname'];
    $regno = $_POST['regno'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $department = $_POST['department'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password != $confirm_password)
    {
        echo "<script>
        alert('Password and Confirm Password do not match!');
        window.location='registration.php';
        </script>";
        exit();
    }

    $sql = "INSERT INTO students(fullname, regno, email, mobile, department, password)
            VALUES('$fullname','$regno','$email','$mobile','$department','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Registration Successful');
        window.location='login.php';
        </script>";
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }
}
?>