<?php
include "db.php";

$sql = "SELECT questions.*, exams.exam_title
        FROM questions
        INNER JOIN exams ON questions.exam_id = exams.id
        ORDER BY questions.id DESC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Manage Questions</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Segoe UI,sans-serif;
}

body{
background:#eef2f7;
}

/* Sidebar */

.sidebar{
width:250px;
height:100vh;
background:#0f172a;
position:fixed;
left:0;
top:0;
}

.sidebar h2{
color:#fff;
text-align:center;
padding:25px;
background:#1e293b;
}

.sidebar ul{
list-style:none;
}

.sidebar ul li a{
display:block;
padding:18px;
color:#fff;
text-decoration:none;
transition:.3s;
}

.sidebar ul li a:hover{
background:#2563eb;
padding-left:28px;
}

.sidebar i{
margin-right:10px;
}

/* Main */

.main{
margin-left:250px;
padding:30px;
}

.header{
background:#fff;
padding:20px;
border-radius:10px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
margin-bottom:20px;
}

.card{
background:#fff;
padding:20px;
border-radius:10px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.top{
display:flex;
justify-content:space-between;
margin-bottom:20px;
}

.search{
width:280px;
padding:10px;
border:1px solid #ccc;
border-radius:6px;
}

.add-btn{
background:#2563eb;
color:#fff;
padding:10px 20px;
text-decoration:none;
border-radius:6px;
}

table{
width:100%;
border-collapse:collapse;
}

table th{
background:#2563eb;
color:#fff;
padding:14px;
}

table td{
padding:12px;
border-bottom:1px solid #ddd;
text-align:center;
}

.edit{
background:#ffc107;
padding:8px 12px;
border-radius:5px;
color:#000;
text-decoration:none;
}

.delete{
background:#dc3545;
padding:8px 12px;
border-radius:5px;
color:#fff;
text-decoration:none;
}

.question{
text-align:left;
max-width:300px;
}

</style>

</head>

<body>

<div class="sidebar">

<h2>Exam Portal</h2>

<ul>

<li><a href="admin_dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>

<li><a href="manage_students.php"><i class="fa fa-users"></i> Students</a></li>

<li><a href="add_exam.php"><i class="fa fa-book"></i> Create Exam</a></li>

<li><a href="manage_exams.php"><i class="fa fa-list"></i> Manage Exams</a></li>

<li><a href="add_question.php"><i class="fa fa-plus-circle"></i> Add Question</a></li>

<li><a href="manage_questions.php"><i class="fa fa-question-circle"></i> Manage Questions</a></li>

<li><a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a></li>

</ul>

</div>

<div class="main">

<div class="header">

<h1>Manage Questions</h1>

</div>

<div class="card">

<div class="top">

<input type="text" class="search" placeholder="Search Question...">

<a href="add_question.php" class="add-btn">
<i class="fa fa-plus"></i> Add Question
</a>

</div>

<table>

<tr>

<th>ID</th>
<th>Exam</th>
<th>Question</th>
<th>Correct Answer</th>
<th>Marks</th>
<th>Action</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['exam_title']; ?></td>

<td class="question"><?php echo $row['question']; ?></td>

<td><?php echo $row['correct_answer']; ?></td>

<td><?php echo $row['marks']; ?></td>

<td>

<a href="edit_question.php?id=<?php echo $row['id']; ?>" class="edit">
<i class="fa fa-edit"></i>
</a>

<a href="delete_question.php?id=<?php echo $row['id']; ?>" class="delete"
onclick="return confirm('Delete this Question?')">
<i class="fa fa-trash"></i>
</a>

</td>

</tr>

<?php
}
?>

</table>

</div>

</div>

</body>

</html>