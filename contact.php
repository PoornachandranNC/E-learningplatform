<?php
session_start();
$is_logged_in = isset($_SESSION['username']) ? 'true' : 'false';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SkillMastery</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <style>
        .large {
            font-size: larger;
        }
        .ab:link {
            color: black;
        }
        .ab:hover {
            color: #00ff0d;
        }
        .ab:visited {
            color: aqua;
        }
        .box img {
            transition: transform 0.2s ease;
        }
        .box img:hover {
            transform: scale(1.1);
        }
        header nav ul li a {
            color: #ffffff;
            text-decoration: none;
        }
        header nav ul li a:hover {
            background-color:#ddd;
            color: #000000;
            border-width: 50px;
        }
        header nav ul li .dropdown-content {
            display: none;
            position: absolute;
            background-color: #28a745;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        header nav ul li .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        header nav ul li .dropdown-content a:hover {
            background-color: #ddd;
        }
        header nav ul li:hover .dropdown-content {
            display: block;
        }
        .unstyled-list {
            list-style-type: none;
            padding: 0;
        }
        .unstyled-list li {
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <header class="bg-success text-dark py-3">
        <div class="container d-flex align-items-center">
            <img src="images/logo.png" alt="logo" class="logo mr-3" style="height: 50px;">
            <h1 class="mb-0">SKILLMASTERY</h1>
            <nav class="ml-auto">
                <ul class="nav"  id="nav-list">
                    <li class="nav-item"><a class="nav-link text-white" href="index.php" target="_blank">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="about.php" target="_blank">About Us</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="nav-link text-white">More</a>
                        <div class="dropdown-content">
                            <a href="services.html" target="_blank">Services</a>
                            <a href="table.html" target="_blank">Table</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="py-4">
        <section id="contact" class="container">
            <div class="bg-white p-4 shadow-sm">
                <h1>Contact Us</h1>
                <p>We would love to hear from you! Whether you have a question, need assistance, or want to provide feedback, our team is here to help. Get in touch with us through any of the following methods:</p>
                <ul class="list-unstyled">
                    <li>
                        <strong>Email:</strong>
                        <p>For general inquiries: <a href="mailto:info@skillmastery.com">info@skillmastery.com</a></p>
                        <p>For support: <a href="mailto:support@skillmastery.com">support@skillmastery.com</a></p>
                        <p>For partnership opportunities: <a href="mailto:partners@skillmastery.com">partners@skillmastery.com</a></p>
                    </li>
                    <li>
                        <strong>Phone:</strong>
                        <p>Call us at: +91 1234567890</p>
                        <p>Our support team is available Monday to Friday, 9 AM - 5 PM (EST).</p>
                    </li>
                    <li>
                        <strong>Mailing Address:</strong>
                        <p>SkillMastery Inc.<br>123 Learning Lane<br>Chennai Tamilnadu.</p>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <footer class="bg-success text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 SkillMastery. All rights reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a class="text-white" href="#">Privacy Policy</a></li>
                <li class="list-inline-item"><a class="text-white" href="#">Terms of Service</a></li>
            </ul>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navList = document.getElementById('nav-list');
            const isLoggedIn = <?php echo $is_logged_in; ?>;
            
            if (isLoggedIn === true) {
                navList.innerHTML += '<li class="nav-item"><a class="nav-link text-white" href="logout.php">Logout</a></li>';
            } else {
                navList.innerHTML += '<li class="nav-item"><a class="nav-link text-white" href="login.php">Login</a></li>';
                navList.innerHTML += '<li class="nav-item"><a class="nav-link text-white" href="signup.php">Sign Up</a></li>';
            }
        });
    </script>
</body>
</html>
