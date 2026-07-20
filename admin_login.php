<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login | Online Examination Portal</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
    url("https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1600&q=80");
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-container{
    width:430px;
    background:rgba(255,255,255,0.95);
    padding:40px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.4);
}

.login-container h1{
    text-align:center;
    color:#0b3d91;
    margin-bottom:10px;
}

.login-container p{
    text-align:center;
    color:#555;
    margin-bottom:30px;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    font-size:17px;
    font-weight:bold;
    margin-bottom:8px;
}

.form-group input{
    width:100%;
    padding:13px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:16px;
}

.form-group input:focus{
    outline:none;
    border:2px solid #0b3d91;
}

.login-btn{
    width:100%;
    padding:14px;
    border:none;
    background:#0b3d91;
    color:white;
    font-size:18px;
    border-radius:8px;
    cursor:pointer;
    transition:.3s;
}

.login-btn:hover{
    background:#062c6d;
}

.home-link{
    margin-top:20px;
    text-align:center;
}

.home-link a{
    text-decoration:none;
    color:#0b3d91;
    font-weight:bold;
}

.home-link a:hover{
    color:red;
}

</style>

</head>

<body>

<div class="login-container">

<h1>Admin Login</h1>

<p>Online Examination Portal Administration</p>

<form action="admin_login_process.php" method="POST">

<div class="form-group">
<label>Username</label>
<input type="text" name="username" placeholder="Enter Admin Username" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" placeholder="Enter Password" required>
</div>

<button class="login-btn" type="submit">
Login
</button>

</form>

<div class="home-link">
<br>
<a href="index.php">⬅ Back to Home</a>
</div>

</div>

</body>
</html>