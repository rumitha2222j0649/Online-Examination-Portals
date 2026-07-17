<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Registration | Online Examination Portal</title>

<link rel="stylesheet" href="style.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),
    url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1600&q=80');
    background-size:cover;
    background-position:center;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.register-box{
    width:500px;
    background:#fff;
    padding:35px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,.3);
}

.register-box h2{
    text-align:center;
    color:#0b3d91;
    margin-bottom:10px;
}

.register-box p{
    text-align:center;
    color:#666;
    margin-bottom:25px;
}

.input-group{
    margin-bottom:18px;
}

.input-group label{
    display:block;
    margin-bottom:6px;
    font-weight:bold;
}

.input-group input,
.input-group select{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
}

.register-btn{
    width:100%;
    padding:13px;
    border:none;
    background:#0b3d91;
    color:#fff;
    font-size:17px;
    border-radius:8px;
    cursor:pointer;
}

.register-btn:hover{
    background:#062d6f;
}

.extra{
    text-align:center;
    margin-top:20px;
}

.extra a{
    color:#0b3d91;
    text-decoration:none;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="register-box">

<h2>Student Registration</h2>

<p>Create your account to attend online examinations.</p>

<form action="register_process.php" method="POST">

<div class="input-group">
<label>Full Name</label>
<input type="text" name="fullname" placeholder="Enter Full Name" required>
</div>

<div class="input-group">
<label>Register Number</label>
<input type="text" name="regno" placeholder="Enter Register Number" required>
</div>

<div class="input-group">
<label>Email Address</label>
<input type="email" name="email" placeholder="Enter Email Address" required>
</div>

<div class="input-group">
<label>Mobile Number</label>
<input type="text" name="mobile" placeholder="Enter Mobile Number" required>
</div>

<div class="input-group">
<label>Department</label>
<select name="department" required>
<option value="">Select Department</option>
<option>MCA</option>
<option>MBA</option>
<option>BCA</option>
<option>B.Sc Computer Science</option>
<option>B.Tech</option>
</select>
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password" placeholder="Create Password" required>
</div>

<div class="input-group">
<label>Confirm Password</label>
<input type="password" name="confirm_password" placeholder="Confirm Password" required>
</div>

<button type="submit" class="register-btn">
Register
</button>

</form>

<div class="extra">

<p>
Already have an account?
<a href="login.php">Login Here</a>
</p>

</div>

</div>

</body>
</html>