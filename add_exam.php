<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Create Exam | Online Examination Portal</title>

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
color:#fff;
}

.sidebar h2{
text-align:center;
padding:25px;
background:#1e293b;
font-size:22px;
}

.sidebar ul{
list-style:none;
}

.sidebar ul li{
border-bottom:1px solid rgba(255,255,255,.08);
}

.sidebar ul li a{
display:block;
padding:18px 20px;
color:#fff;
text-decoration:none;
transition:.3s;
}

.sidebar ul li a:hover{
background:#2563eb;
padding-left:28px;
}

.sidebar ul li a i{
margin-right:10px;
}

/* Main */

.main{
margin-left:250px;
padding:30px;
}

.header{
background:#fff;
padding:18px 25px;
border-radius:10px;
box-shadow:0 2px 10px rgba(0,0,0,.08);
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:25px;
}

.header h1{
font-size:28px;
color:#0f172a;
}

.header span{
font-weight:bold;
color:#2563eb;
}

.card{
background:#fff;
padding:30px;
border-radius:12px;
box-shadow:0 2px 10px rgba(0,0,0,.08);
}

.card h2{
margin-bottom:20px;
color:#0f172a;
}

.row{
display:flex;
gap:20px;
margin-bottom:20px;
}

.col{
flex:1;
}

label{
font-weight:600;
display:block;
margin-bottom:8px;
}

input,
textarea,
select{
width:100%;
padding:12px;
border:1px solid #ccc;
border-radius:8px;
font-size:15px;
}

textarea{
height:100px;
resize:none;
}

button{
background:#2563eb;
color:#fff;
padding:14px;
border:none;
border-radius:8px;
cursor:pointer;
font-size:16px;
width:100%;
margin-top:20px;
transition:.3s;
}

button:hover{
background:#1d4ed8;
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

<h1>Create New Exam</h1>

<span>Admin Panel</span>

</div>

<div class="card">

<h2>Exam Details</h2>

<form action="add_exam_process.php" method="POST">

<div class="row">

<div class="col">

<label>Exam Title</label>

<input type="text" name="exam_title" placeholder="Enter Exam Title" required>

</div>

<div class="col">

<label>Subject</label>

<input type="text" name="subject" placeholder="Enter Subject" required>

</div>

</div>

<label>Description</label>

<textarea name="description" placeholder="Enter Exam Description"></textarea>

<div class="row">

<div class="col">

<label>Duration (Minutes)</label>

<input type="number" name="duration" required>

</div>

<div class="col">

<label>Total Marks</label>

<input type="number" name="total_marks" required>

</div>

</div>

<div class="row">

<div class="col">

<label>Exam Date</label>

<input type="date" name="exam_date" required>

</div>

<div class="col">

<label>Start Time</label>

<input type="time" name="start_time" required>

</div>

<div class="col">

<label>End Time</label>

<input type="time" name="end_time" required>

</div>

</div>

<label>Status</label>

<select name="status">

<option value="Active">Active</option>

<option value="Inactive">Inactive</option>

</select>

<button type="submit">

<i class="fa fa-save"></i> Create Exam

</button>

</form>

</div>

</div>

</body>
</html>