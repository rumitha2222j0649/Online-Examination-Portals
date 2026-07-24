<?php
include "db.php";

$exam_result = mysqli_query($conn, "SELECT * FROM exams WHERE status='Active'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question | Online Examination Portal</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f4f6f9;
        }

        .container{
            width:600px;
            margin:40px auto;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
            margin-bottom:25px;
            color:#333;
        }

        label{
            font-weight:bold;
            display:block;
            margin-top:15px;
        }

        textarea,
        input,
        select{
            width:100%;
            padding:10px;
            margin-top:5px;
            border:1px solid #ccc;
            border-radius:5px;
            font-size:15px;
        }

        textarea{
            resize:none;
            height:100px;
        }

        button{
            width:100%;
            margin-top:25px;
            padding:12px;
            background:#007bff;
            color:white;
            border:none;
            border-radius:5px;
            font-size:16px;
            cursor:pointer;
        }

        button:hover{
            background:#0056b3;
        }
    </style>

</head>
<body>

<div class="container">

<h2>Add Question</h2>

<form action="add_question_process.php" method="POST">

<label>Select Exam</label>

<select name="exam_id" required>

<option value="">-- Select Exam --</option>

<?php
while($exam = mysqli_fetch_assoc($exam_result))
{
?>

<option value="<?php echo $exam['id']; ?>">
<?php echo $exam['exam_title']; ?> (<?php echo $exam['subject']; ?>)
</option>

<?php
}
?>

</select>

<label>Question</label>
<textarea name="question" required></textarea>

<label>Option A</label>
<input type="text" name="option1" required>

<label>Option B</label>
<input type="text" name="option2" required>

<label>Option C</label>
<input type="text" name="option3" required>

<label>Option D</label>
<input type="text" name="option4" required>

<label>Correct Answer</label>
<select name="correct_answer" required>
    <option value="">Select Correct Answer</option>
    <option value="option1">Option A</option>
    <option value="option2">Option B</option>
    <option value="option3">Option C</option>
    <option value="option4">Option D</option>
</select>

<label>Marks</label>
<input type="number" name="marks" value="1" min="1" required>

<button type="submit">Save Question</button>

</form>

</div>

</body>
</html>