<?php
session_start();
$is_logged_in = isset($_SESSION['username']) ? 'true' : 'false';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - SkillMastery</title>
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
                    <li class="nav-item"><a class="nav-link text-white" href="contact.php" target="_blank">Contact</a></li>
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
        <section id="about-us" class="container">
            <div class="bg-white p-4 shadow-sm">
                <p>&emsp;&emsp;&emsp;Welcome to SkillMastery, your premier destination for skill development and professional growth. At SkillMastery, we believe that learning is a lifelong journey and we are dedicated to empowering individuals with the skills they need to succeed in today’s dynamic and ever-evolving job market.</p>
                <h1><br>Our Mission</h1>
                <p>&emsp;&emsp;&emsp;Our mission is to bridge the skills gap by providing high-quality, accessible, and affordable training programs. We are committed to helping individuals unlock their full potential, enhance their career prospects, and achieve their personal and professional goals.</p>

                <h1><br>Our Vision</h1>
                <p>&emsp;&emsp;&emsp;We envision a world where everyone has the opportunity to acquire the skills necessary to thrive in their chosen fields. By offering a diverse range of courses and resources, we aim to foster a culture of continuous learning and innovation.</p>

                <h1><br>What We Offer</h1>
                    <h3>&emsp;&emsp;1. Expert-Led Courses</h3>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Learn from industry leaders and experts who bring real-world experience and insights.</p>
                    <h3>&emsp;&emsp;2. Flexible Learning</h3>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Access our courses anytime, anywhere, and learn at your own pace with our flexible online platform.</p>
                    <h3>&emsp;&emsp;3. Comprehensive Curriculum</h3>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Our courses cover a wide array of subjects including technology, business, design, and personal development.</p>
                    <h3>&emsp;&emsp;4. Community Support</h3>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Join a vibrant community of learners and professionals, and engage in discussions, networking, and collaborative projects.</p>
                    <h3>&emsp;&emsp;5. Career Services</h3>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Take advantage of our career support services, including resume reviews, job placement assistance, and career coaching.</p>
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
