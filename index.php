<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination Portal</title>
    
    <!-- Google Fonts & Font Awesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        /* ================= GLOBAL STYLES ================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f4f7f6;
            color: #333;
            overflow-x: hidden;
        }

        /* ================= NAVBAR ================= */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0d2c54;
            padding: 20px 8%;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo {
            color: #fff;
            font-size: 24px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar .logo i {
            color: #00b4d8;
        }

        .navbar nav ul {
            display: flex;
            list-style: none;
            align-items: center;
            gap: 30px;
        }

        .navbar nav ul li a {
            color: #e0e0e0;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .navbar nav ul li a:hover {
            color: #00b4d8;
        }

        .navbar nav ul li .admin-btn {
            background-color: transparent;
            border: 2px solid #00b4d8;
            padding: 8px 20px;
            border-radius: 5px;
            color: #00b4d8;
            transition: all 0.3s ease;
        }

        .navbar nav ul li .admin-btn:hover {
            background-color: #00b4d8;
            color: #0d2c54;
        }

        /* ================= HERO SECTION ================= */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 8%;
            background: linear-gradient(135deg, #0d2c54 0%, #1b4965 100%);
            color: #fff;
            min-height: 75vh;
        }

        .hero-left {
            max-width: 55%;
        }

        .hero-left h4 {
            color: #00b4d8;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .hero-left h1 {
            font-size: 48px;
            line-height: 1.2;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero-left p {
            font-size: 16px;
            color: #cbd5e1;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        .hero-left .buttons {
            display: flex;
            gap: 20px;
        }

        .hero-left .btn {
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .hero-left .btn-primary {
            background-color: #00b4d8;
            color: #0d2c54;
        }

        .hero-left .btn-primary:hover {
            background-color: #0096c7;
            transform: translateY(-2px);
        }

        .hero-left .btn-secondary {
            border: 2px solid #fff;
            color: #fff;
        }

        .hero-left .btn-secondary:hover {
            background-color: #fff;
            color: #0d2c54;
            transform: translateY(-2px);
        }

        .hero-right {
            max-width: 40%;
            display: flex;
            justify-content: center;
            position: relative;
        }

        /* Placeholder image styles to keep layout clean even if image is missing */
        .hero-right .img-placeholder {
            width: 350px;
            height: 350px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px dashed rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #cbd5e1;
            text-align: center;
            padding: 20px;
        }

        .hero-right .img-placeholder i {
            font-size: 64px;
            margin-bottom: 15px;
            color: #00b4d8;
        }

        /* ================= STATISTICS ================= */
        .stats {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #fff;
            padding: 40px 8%;
            box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.05);
            margin-top: -30px;
            border-radius: 10px;
            width: 84%;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            z-index: 10;
        }

        .stat-box {
            text-align: center;
        }

        .stat-box h2 {
            font-size: 36px;
            color: #0d2c54;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-box p {
            color: #666;
            font-size: 15px;
            font-weight: 500;
        }

        /* Responsive Breakpoints */
        @media (max-width: 768px) {
            .navbar { padding: 15px 5%; }
            .navbar nav ul { display: none; } /* Simplified for mobile preview */
            .hero { flex-direction: column; text-align: center; padding: 40px 5%; }
            .hero-left { max-width: 100%; margin-bottom: 40px; }
            .hero-left h1 { font-size: 36px; }
            .hero-left .buttons { justify-content: center; }
            .hero-right { max-width: 100%; }
            .stats { flex-direction: column; gap: 30px; width: 90%; margin-top: 20px; }
        }
    </style>
</head>
<body>

    <!-- ================= NAVBAR ================= -->
    <header class="navbar">
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            <span>ExamPortal</span>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="login.php">Student Login</a></li>
                <li><a href="admin_login.php" class="admin-btn">Admin Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- ================= HERO SECTION ================= -->
    <section class="hero">
        <div class="hero-left">
            <h4>Welcome to</h4>
            <h1>Online <br> Examination <br> Portal</h1>
            <p>Conduct secure online examinations, manage students, create dynamic question papers, monitor test environments, and publish instant analytical results through one robust, professional platform.</p>
            <div class="buttons">
                <a href="login.php" class="btn btn-primary">Student Login</a>
                <a href="admin_login.php" class="btn btn-secondary">Admin Login</a>
            </div>
        </div>
        <div class="hero-right">
            <!-- Handled cleanly as a mockup profile circle so it doesn't break if images/student.png is missing -->
            <div class="img-placeholder">
                <i class="fas fa-user-graduate"></i>
                <h3>Secure Exam Environment</h3>
                <p style="font-size: 12px; margin-top: 5px; color: #a0aec0;">Add student.png to your images folder to replace this graphic</p>
            </div>
        </div>
    </section>

    <!-- ================= STATISTICS ================= -->
    <section class="stats">
        <div class="stat-box">
            <h2>5000+</h2>
            <p>Students Registered</p>
        </div>
        <div class="stat-box">
            <h2>300+</h2>
            <p>Online Exams Hosted</p>
        </div>
        <div class="stat-box">
            <h2>150+</h2>
            <p>Expert Faculty Members</p>
        </div>
        <div class="stat-box">
            <h2>98%</h2>
            <p>Seamless Success Rate</p>
        </div>
    </section>

</body>
</html>