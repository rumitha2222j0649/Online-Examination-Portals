<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial,sans-serif}
body{display:flex;background:#f4f7fb}
.sidebar{width:240px;min-height:100vh;background:#123a7a;color:#fff;padding:20px}
.sidebar h2{margin-bottom:25px}
.sidebar a{display:block;color:#fff;text-decoration:none;padding:12px;border-radius:8px;margin:8px 0}
.sidebar a:hover{background:#2958a8}
.main{flex:1;padding:25px}
.top{display:flex;justify-content:space-between;align-items:center;margin-bottom:25px}
.cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:20px}
.card{background:#fff;padding:20px;border-radius:12px;box-shadow:0 4px 10px rgba(0,0,0,.12)}
.card h3{color:#123a7a;margin-bottom:10px}
table{width:100%;border-collapse:collapse;background:#fff;margin-top:30px}
th,td{padding:12px;border:1px solid #ddd}
th{background:#123a7a;color:#fff}
.logout{background:#d62828;color:#fff;padding:10px 18px;text-decoration:none;border-radius:6px}
</style>
</head>
<body>
<div class="sidebar">
<h2>Exam Portal</h2>
<a href="#">Dashboard</a>
<a href="manage_students.php">Manage Students</a>
<a href="add_question.php">Add Questions</a>
<a href="manage_questions.php">Manage Questions</a>
<a href="view_results.php">Results</a>
<a href="logout.php">Logout</a>
</div>

<div class="main">
<div class="top">
<div>
<h1>Admin Dashboard</h1>
<p>Welcome, <?php echo htmlspecialchars($_SESSION['admin']); ?></p>
</div>
<a class="logout" href="logout.php">Logout</a>
</div>

<div class="cards">
<div class="card"><h3>Total Students</h3><h1>120</h1></div>
<div class="card"><h3>Total Questions</h3><h1>350</h1></div>
<div class="card"><h3>Active Exams</h3><h1>8</h1></div>
<div class="card"><h3>Results Published</h3><h1>95</h1></div>
</div>

<h2 style="margin-top:30px">Recent Students</h2>
<table>
<tr><th>ID</th><th>Name</th><th>Department</th><th>Status</th></tr>
<tr><td>1</td><td>Sharnika J</td><td>MCA</td><td>Active</td></tr>
<tr><td>2</td><td>Student 2</td><td>MCA</td><td>Active</td></tr>
<tr><td>3</td><td>Student 3</td><td>BCA</td><td>Active</td></tr>
</table>
</div>
</body>
</html>