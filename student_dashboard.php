<?php
session_start();

if(!isset($_SESSION['student_name']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Dashboard</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f4f6f9;
}

.header{
    background:#0b3d91;
    color:white;
    padding:20px;
    text-align:center;
}

.container{
    width:90%;
    margin:30px auto;
}

.card{
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

h2{
    color:#0b3d91;
    margin-bottom:15px;
}

.logout{
    display:inline-block;
    margin-top:20px;
    background:red;
    color:white;
    padding:10px 20px;
    text-decoration:none;
    border-radius:5px;
}
</style>

</head>
<body>

<div class="header">
<h1>Online Examination Portal</h1>
</div>

<div class="container">

<div class="card">

<h2>Welcome, <?php echo $_SESSION['student_name']; ?> 🎓</h2>

<p>You have successfully logged into the Online Examination Portal.</p>

<p>Dashboard is under development.</p>

<a href="login.php" class="logout">Logout</a>

</div>

</div>

</body>
</html>