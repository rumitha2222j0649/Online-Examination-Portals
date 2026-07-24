<?php
include "db.php";

$result = mysqli_query($conn,"SELECT * FROM exams ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Manage Exams</title>

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
color:white;
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
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:20px;
}

.header h1{
color:#0f172a;
}

.card{
background:#fff;
padding:20px;
border-radius:10px;
box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.top{
display:flex;
justify-content:space-between;
margin-bottom:20px;
}

.search{
padding:10px;
width:280px;
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
color:white;
padding:14px;
}

table td{
padding:12px;
border-bottom:1px solid #ddd;
text-align:center;
}

.active{
background:green;
color:white;
padding:5px 10px;
border-radius:20px;
}

.inactive{
background:red;
color:white;
padding:5px 10px;
border-radius:20px;
}

.edit{
background:#ffc107;
color:black;
padding:7px 12px;
text-decoration:none;
border-radius:5px;
}

.delete{
background:#dc3545;
color:white;
padding:7px 12px;
text-decoration:none;
border-radius:5px;
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

<li><a href="manage_questions.php"><i class="fa fa-question-circle"></i> Questions</a></li>

<li><a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a></li>

</ul>

</div>

<div class="main">

<div class="header">

<h1>Manage Exams</h1>

</div>

<div class="card">

<div class="top">

<input type="text" class="search" placeholder="Search Exam...">

<a href="add_exam.php" class="add-btn">
<i class="fa fa-plus"></i> Create Exam
</a>

</div>

<table>

<tr>

<th>ID</th>
<th>Exam Title</th>
<th>Subject</th>
<th>Duration</th>
<th>Total Marks</th>
<th>Date</th>
<th>Status</th>
<th>Action</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['exam_title']; ?></td>

<td><?php echo $row['subject']; ?></td>

<td><?php echo $row['duration']; ?> Min</td>

<td><?php echo $row['total_marks']; ?></td>

<td><?php echo $row['exam_date']; ?></td>

<td>

<?php

if($row['status']=="Active")
{
echo "<span class='active'>Active</span>";
}
else
{
echo "<span class='inactive'>Inactive</span>";
}

?>

</td>

<td>

<a href="edit_exam.php?id=<?php echo $row['id']; ?>" class="edit">
<i class="fa fa-edit"></i>
</a>

<a href="delete_exam.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('Delete this exam?')">
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