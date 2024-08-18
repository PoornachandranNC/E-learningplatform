<?php
session_start();
$is_logged_in = isset($_SESSION['username']) ? 'true' : 'false';
$first_name = isset($_SESSION['first_name']) ? $_SESSION['first_name'] : '';
$last_name = isset($_SESSION['last_name']) ? $_SESSION['last_name'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                <ul class="nav" id="nav-list">
                    <li class="nav-item"><a class="nav-link text-white" href="contact.php" target="_blank">Contact</a></li>
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
        <section id="home" class="container">
            <div class="bg-white p-4 shadow-sm">
                <?php if($is_logged_in === 'true'): ?>
                    <h1>Hello, <?php echo htmlspecialchars($first_name) . ' ' . htmlspecialchars($last_name); ?></h1>
                <?php endif; ?>
                <p class="large">
                    <b>&emsp;&emsp;&emsp;&emsp;&emsp;Welcome to SkillMastery. Your premier destination for mastering new skills and advancing your career. Our platform offers comprehensive resources, tutorials, and expert guidance to help you excel in various fields. Whether you're a beginner or an experienced professional, SkillMastery is here to empower your learning journey and unlock your full potential.</b>
                </p>
                <a class="ab" href="courses.php" target="_blank"><h1>1. Programming Language Skills</h1></a>
                <div class="box">
                    <img src="images/courses/programming_languges.png" alt="programming_languges" width="150" height="130" class="float-right ml-3 mb-3">
                </div>
                <p>&emsp;&emsp;&emsp;&emsp;At its core, a programming language is a set of instructions that enables humans to communicate with computers using a series &ensp;of symbols that serve as a bridge that allows humans to turn our ideas into instructions computers can understand. Like spoken languages, each language has its own unique syntax, structure, vocabulary, and even slang or shortcuts.<br><br>&emsp;&emsp;&emsp;&emsp;These languages enable us to communicate with computers, build and organize code, specify functionality and behavior,&ensp; automate and improve efficiency, collaborate and share code, and solve problems creatively.</p>
                <a class="ab" href="digital_marketing.php" target="_blank"><h1>2. Digital Marketing Skills</h1></a>
                <div class="box">
                    <img src="images/digital_marketing/Digital-marketing.jpg" alt="Digital-marketing" width="150" height="130" class="float-right ml-3 mb-3">
                </div>
                <p>&emsp;&emsp;&emsp;&emsp;Digital marketing, or online marketing, is a form of advertising that uses the internet and digital technologies to connect with customers. Rather than traditional media, such as print, radio, or television, digital marketing uses computers, mobile, social media, search engines, and other digital channels to reach consumers wherever they spend the most time.<br><br>&emsp;&emsp;&emsp;&emsp;Over 60 percent of the global population is online, and more people are joining them every day. That's why companies are now increasing their digital marketing budgets while traditional marketing gets slashed.</p>
                <a class="ab" href="creative.php" target="_blank"><h1>3. Creative Skills</h1></a>
                <div class="box">
                    <img src="images/creative_skill/creative.webp" alt="creative_thinking" width="200" height="130" class="float-right ml-3 mb-3">
                </div>
                <p>&emsp;&emsp;&emsp;&emsp;Creativity is the ability to approach tasks or problems from fresh perspectives, using imagination to generate novel ideas. &ensp;&ensp;It enables solving complex issues and finding unique approaches. Creative thinkers observe connections, challenge norms, and &ensp;observe the world around them, fostering innovation and efficiency.<br><br>&emsp;&emsp;&emsp;&emsp;Creative video editing involves organizing and manipulating video clips to create a coherent final product. This includes understanding your editing software, cutting and arranging clips, adding transitions, sound editing, color grading, and exporting the final product in the desired format</p>
                <a class="ab" href="personal_development.php" target="_blank"><h1>4. Personal Development</h1></a>
                <div class="box">
                    <img src="images/personal_development/personal_development.jpg" alt="personal_development" width="150" height="130" class="float-right ml-3 mb-3">
                </div>
                <p>&emsp;&emsp;&emsp;&emsp;Personal development can include any skill that you build to improve yourself—your emotions, thoughts, or behaviors. It doesn't really matter which skills you want to improve; the key to personal development is taking the right steps—steps that help ensure that you reach whatever goal you are pursuing.<br><br>&emsp;&emsp;&emsp;&emsp;It is a lifelong process of self-improvement in various areas of one's life, including mental, emotional, social, and physical aspects. It involves activities and practices that enhance self-awareness, develop talents and potential, build human capital, and facilitate employability, quality of life, and the realization of dreams and aspirations.</p>
                <a class="ab" href="health_fitness.php" target="_blank"><h1>5. Health and Fitness</h1></a>
                <div class="box">
                    <img src="images/health_fitness/health_fitness.jpg" alt="health_fitness" width="150" height="130" class="float-right ml-3 mb-3">
                </div>
                <p>&emsp;&emsp;&emsp;&emsp;Health and fitness are crucial aspects of personal development and overall well-being. By prioritizing health and fitness, &ensp;individuals can enhance their overall well-being, improve their ability to handle stress, and lead a more fulfilling and productive life.<br><br>&emsp;&emsp;&emsp;&emsp;A healthy lifestyle fosters resilience, enabling us to better manage stress and navigate life's challenges with a clear and focused mind. Additionally, fitness activities often provide opportunities for social interaction, building a sense of community and belonging.</p>
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
