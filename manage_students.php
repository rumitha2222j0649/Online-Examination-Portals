<?php
session_start();
include("db.php");

if(!isset($_SESSION['admin']))
{
    header("Location: admin_login.php");
    exit();
}

$result = mysqli_query($conn,"SELECT * FROM students");
$total = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Students</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,Helvetica,sans-serif;
}

body{
background:#eef2f7;
}

.header{
background:#0b3d91;
color:white;
padding:18px;
display:flex;
justify-content:space-between;
align-items:center;
}

.header h2{
font-size:28px;
}

.header a{
background:red;
color:white;
text-decoration:none;
padding:10px 18px;
border-radius:6px;
}

.container{
width:95%;
margin:30px auto;
}

.card{
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 5px 15px rgba(0,0,0,.15);
margin-bottom:20px;
}

.card h3{
color:#0b3d91;
}

.search-box{
margin:20px 0;
}

.search-box input{
width:300px;
padding:10px;
border:1px solid #ccc;
border-radius:5px;
}

table{
width:100%;
border-collapse:collapse;
background:white;
box-shadow:0 5px 15px rgba(0,0,0,.15);
}

table th{
background:#0b3d91;
color:white;
padding:14px;
}

table td{
padding:12px;
text-align:center;
border-bottom:1px solid #ddd;
}

table tr:hover{
background:#f5f5f5;
}

.delete{
background:red;
color:white;
padding:8px 12px;
text-decoration:none;
border-radius:5px;
}

.back{
display:inline-block;
margin-top:20px;
background:#0b3d91;
color:white;
padding:12px 20px;
text-decoration:none;
border-radius:5px;
}

</style>

<script>
function searchStudent()
{
let input=document.getElementById("search").value.toUpperCase();
let table=document.getElementById("studentTable");
let tr=table.getElementsByTagName("tr");

for(let i=1;i<tr.length;i++)
{
let td=tr[i].getElementsByTagName("td")[1];

if(td)
{
let txt=td.textContent || td.innerText;

if(txt.toUpperCase().indexOf(input)>-1)
{
tr[i].style.display="";
}
else
{
tr[i].style.display="none";
}
}
}
}
</script>

</head>

<body>

<div class="header">
<h2>Manage Students</h2>

<a href="logout.php">Logout</a>
</div>

<div class="container">

<div class="card">
<h3>Total Registered Students : <?php echo $total; ?></h3>
</div>

<div class="search-box">
<input type="text" id="search" placeholder="Search Student Name..." onkeyup="searchStudent()">
</div>

<table id="studentTable">

<tr>
<th>ID</th>
<th>Full Name</th>
<th>Register No</th>
<th>Email</th>
<th>Mobile</th>
<th>Department</th>
<th>Action</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['fullname']; ?></td>

<td><?php echo $row['regno']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['department']; ?></td>

<td>

<a class="delete" href="delete_student.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delete this student?')">

Delete

</a>

</td>

</tr>

<?php

}

?>

</table>

<a href="admin_dashboard.php" class="back">⬅ Back to Dashboard</a>

</div>

</body>
</html>