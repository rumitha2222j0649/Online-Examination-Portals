<?php
include "db.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $question = mysqli_query($conn,"SELECT * FROM questions WHERE id='$id'");
    $row = mysqli_fetch_assoc($question);

    $exam = mysqli_query($conn,"SELECT * FROM exams");
}
else
{
    header("Location: manage_questions.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Question</title>

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
padding:25px;
border-radius:10px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
}

label{
display:block;
margin-top:15px;
font-weight:bold;
}

input,
textarea,
select{
width:100%;
padding:12px;
margin-top:5px;
border:1px solid #ccc;
border-radius:6px;
font-size:15px;
}

textarea{
height:120px;
resize:none;
}

button{
margin-top:25px;
width:100%;
padding:14px;
background:#2563eb;
color:#fff;
border:none;
border-radius:6px;
font-size:16px;
cursor:pointer;
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
<li><a href="manage_questions.php"><i class="fa fa-question-circle"></i> Manage Questions</a></li>
<li><a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a></li>

</ul>

</div>

<div class="main">

<div class="header">
<h1>Edit Question</h1>
</div>

<div class="card">

<form action="update_question.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Select Exam</label>

<select name="exam_id" required>

<?php
while($examRow=mysqli_fetch_assoc($exam))
{
?>

<option value="<?php echo $examRow['id']; ?>"
<?php if($examRow['id']==$row['exam_id']) echo "selected"; ?>>

<?php echo $examRow['exam_title']; ?>

</option>

<?php
}
?>

</select>

<label>Question</label>

<textarea name="question" required><?php echo $row['question']; ?></textarea>

<label>Option A</label>

<input type="text" name="option1" value="<?php echo $row['option1']; ?>" required>

<label>Option B</label>

<input type="text" name="option2" value="<?php echo $row['option2']; ?>" required>

<label>Option C</label>

<input type="text" name="option3" value="<?php echo $row['option3']; ?>" required>

<label>Option D</label>

<input type="text" name="option4" value="<?php echo $row['option4']; ?>" required>

<label>Correct Answer</label>

<select name="correct_answer">

<option value="option1" <?php if($row['correct_answer']=="option1") echo "selected"; ?>>Option A</option>

<option value="option2" <?php if($row['correct_answer']=="option2") echo "selected"; ?>>Option B</option>

<option value="option3" <?php if($row['correct_answer']=="option3") echo "selected"; ?>>Option C</option>

<option value="option4" <?php if($row['correct_answer']=="option4") echo "selected"; ?>>Option D</option>

</select>

<label>Marks</label>

<input type="number" name="marks" value="<?php echo $row['marks']; ?>" required>

<button type="submit">
<i class="fa fa-save"></i> Update Question
</button>

</form>

</div>

</div>

</body>

</html>