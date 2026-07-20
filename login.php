<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Login | Online Examination Portal</title>

<link rel="stylesheet" href="style.css">

<style>

body{
    margin:0;
    font-family:Arial, Helvetica, sans-serif;
    background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),
    url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80');
    background-size:cover;
    background-position:center;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-box{
    width:400px;
    background:white;
    border-radius:15px;
    padding:40px;
    box-shadow:0 10px 30px rgba(0,0,0,.3);
}

.login-box h2{
    text-align:center;
    color:#0b3d91;
    margin-bottom:10px;
}

.login-box p{
    text-align:center;
    color:#666;
    margin-bottom:30px;
}

.input-group{
    margin-bottom:20px;
}

.input-group label{
    display:block;
    margin-bottom:8px;
    font-weight:bold;
}

.input-group input{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
}

.login-btn{
    width:100%;
    padding:13px;
    background:#0b3d91;
    color:white;
    border:none;
    border-radius:8px;
    font-size:17px;
    cursor:pointer;
}

.login-btn:hover{
    background:#062d6f;
}

.extra{
    text-align:center;
    margin-top:20px;
}

.extra a{
    text-decoration:none;
    color:#0b3d91;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="login-box">

<h2>Student Login</h2>

<p>Login to access your examinations</p>

<form action="login_process.php" method="POST">

<div class="input-group">
<label>Email Address</label>
<input type="email" name="email" placeholder="Enter Email" required>
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password" placeholder="Enter Password" required>
</div>

<button type="submit" class="login-btn">
Login
</button>

</form>

<div class="extra">

<p>
Don't have an account?
<a href="registration.php">Register</a>
</p>

</div>

</div>

</body>
</html>