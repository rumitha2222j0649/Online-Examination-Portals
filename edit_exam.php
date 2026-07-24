<?php
include "db.php";

if (!isset($_GET['id'])) {
    header("Location: manage_exams.php");
    exit();
}

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM exams WHERE id='$id'");
$exam = mysqli_fetch_assoc($result);

if (!$exam) {
    echo "Exam not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Exam</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:#eef2f7;
}

/* Sidebar */

.sidebar{
position:fixed;
width:250px;
height:100%;
background:#0f172a;
}

.sidebar h2{
color:#fff;
text-align:center;
padding:20px;
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
box-shadow:0 2px 8px rgba(0,0,0,.1);
margin-bottom:20px;
}

.card{
background:#fff;
padding:30px;
border-radius:10px;
box-shadow:0 2px 8px rgba(0,0,0,.1);
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
display:block;
margin-bottom:8px;
font-weight:bold;
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
width:100%;
padding:14px;
background:#2563eb;
color:#fff;
border:none;
border-radius:8px;
font-size:16px;
cursor:pointer;
margin-top:20px;
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
<li><a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
</ul>

</div>

<div class="main">

<div class="header">
<h1>Edit Exam</h1>
</div>

<div class="card">

<form action="update_exam.php" method="POST">

<input type="hidden" name="id" value="<?php echo $exam['id']; ?>">

<div class="row">

<div class="col">
<label>Exam Title</label>
<input type="text" name="exam_title" value="<?php echo $exam['exam_title']; ?>" required>
</div>

<div class="col">
<label>Subject</label>
<input type="text" name="subject" value="<?php echo $exam['subject']; ?>" required>
</div>

</div>

<label>Description</label>
<textarea name="description"><?php echo $exam['description']; ?></textarea>

<div class="row">

<div class="col">
<label>Duration (Minutes)</label>
<input type="number" name="duration" value="<?php echo $exam['duration']; ?>" required>
</div>

<div class="col">
<label>Total Marks</label>
<input type="number" name="total_marks" value="<?php echo $exam['total_marks']; ?>" required>
</div>

</div>

<div class="row">

<div class="col">
<label>Exam Date</label>
<input type="date" name="exam_date" value="<?php echo $exam['exam_date']; ?>" required>
</div>

<div class="col">
<label>Start Time</label>
<input type="time" name="start_time" value="<?php echo $exam['start_time']; ?>" required>
</div>

<div class="col">
<label>End Time</label>
<input type="time" name="end_time" value="<?php echo $exam['end_time']; ?>" required>
</div>

</div>

<label>Status</label>

<select name="status">
<option value="Active" <?php if($exam['status']=="Active") echo "selected"; ?>>Active</option>
<option value="Inactive" <?php if($exam['status']=="Inactive") echo "selected"; ?>>Inactive</option>
</select>

<button type="submit">
<i class="fa fa-save"></i> Update Exam
</button>

</form>

</div>

</div>

</body>
</html>