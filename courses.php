<?php
session_start();
$is_logged_in = isset($_SESSION['username']) ? 'true' : 'false';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
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
        <section id="courses" class="container">
            <div class="bg-white p-4 shadow-sm">
                <h1>What is Programming Language?</h1>
                <p>&emsp;&emsp;&emsp;A programming language is a formal system comprising a set of instructions that produce various kinds of output. Programming languages are used to implement algorithms, control the behavior of machines, and develop software applications. They act as a bridge between human logic and machine processing, allowing humans to write instructions that computers can understand and execute. Like human languages, each programming language has its own syntax, semantics, and grammar rules.</p>
                <h1>Why We Learn Programming Languages?</h1>
                <div>
                    <h1>&emsp;&emsp;1. Programming Language Skills</h1>
                    <div class="box"></div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Learning programming languages enhances problem-solving skills by teaching you how to approach complex issues logically and systematically. When you write a program, you need to break down a problem into smaller, manageable parts, which helps in developing critical thinking and analytical skills. This ability to decompose problems is valuable not only in coding but in everyday life and various professional fields where problem-solving is crucial.</p>
                    <h1>&emsp;&emsp;2. Career Opportunities</h1>
                    <div class="box">
                        <img src="images/courses/Career-resources.jpg" alt="Career-resources" width="150" height="130" class="float-right ml-3 mb-3">
                    </div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Learning programming languages enhances problem-solving skills by teaching you how to approach complex issues logically and systematically. When you write a program, you need to break down a problem into smaller, manageable parts, which helps in developing critical thinking and analytical skills. This ability to decompose problems is valuable not only in coding but in everyday life and various professional fields where problem-solving is crucial.</p>
                    <h1>&emsp;&emsp;3. Automation</h1>
                    <div class="box"></div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Programming enables the automation of repetitive tasks, thereby increasing efficiency and productivity. Automation scripts and programs can handle mundane tasks such as data entry, report generation, and batch processing, freeing up time for more strategic and creative work. In sectors like finance, healthcare, and manufacturing, automation can lead to significant cost savings and improved accuracy.</p>
                    <h1>&emsp;&emsp;4. Innovation</h1>
                    <div class="box">
                        <img src="images/courses/innovation.jpg" alt="Career-resources" width="150" height="130" class="float-right ml-3 mb-3">
                    </div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Programming skills empower individuals to create innovative solutions and products. Whether it's developing a mobile app, creating a new software tool, or designing advanced AI systems, programming allows for the implementation of creative ideas. Innovations in technology often stem from the ability to code, making programming a key driver of progress and development in many fields.</p>
                    <h1>&emsp;&emsp;5. Understanding Technology</h1>
                    <div class="box"></div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Learning programming languages provides a deeper understanding of how technology works. This knowledge is crucial in today’s digital world, where technology is integral to almost every aspect of life. Understanding programming concepts helps individuals better utilize and innovate with technology, making them more adept at navigating and contributing to the digital landscape.</p>
                </div>
                <h1>Future Scopes of Learning Programming Languages</h1>
                <div>
                    <h1>&emsp;&emsp;1. Artificial Intelligence and Machine Learning</h1>
                    <div class="box">
                        <img src="images/courses/aiml.jpg" alt="AIML" width="200" height="130" class="float-right ml-3 mb-3">
                    </div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Learning programming languages enhances problem-solving skills by teaching you how to approach complex issues logically and systematically. When you write a program, you need to break down a problem into smaller, manageable parts, which helps in developing critical thinking and analytical skills. This ability to decompose problems is valuable not only in coding but in everyday life and various professional fields where problem-solving is crucial.</p>

                    <h1>&emsp;&emsp;2. Cyber Security</h1>
                    <div class="box"></div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;With the rise in cyber threats, the need for cybersecurity experts is increasing. Programmers with skills in secure coding practices, cryptography, and network security are essential for developing robust defense systems. Careers in cybersecurity involve protecting sensitive data, securing networks, and ensuring the integrity of information systems, which are critical for organizations worldwide.</p>

                    <h1>&emsp;&emsp;3. Data Science and Big Data</h1>
                    <div class="box">
                        <img src="images/courses/DS_BD.jpg" alt="Data_Science & Big_Data" width="200" height="130" class="float-right ml-3 mb-3">
                    </div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;The explosion of data has led to a surge in demand for data scientists and analysts proficient in programming languages that can handle big data, such as Python, SQL, and Java. Data science involves extracting insights from large datasets to inform business decisions and strategies. Skills in big data technologies, like Hadoop and Spark, are also valuable for managing and analyzing vast amounts of information.</p>

                    <h1>&emsp;&emsp;4. Web Development</h1>
                    <div class="box"></div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Web development remains a thriving field, with continuous demand for developers skilled in HTML, CSS, JavaScript, and modern frameworks like React and Angular. Web developers create and maintain websites and web applications, ensuring they are user-friendly, responsive, and visually appealing. As businesses and services increasingly move online, web development skills are essential for creating engaging digital experiences.</p>
                    <h1>&emsp;&emsp;5. Internet of Things (IoT)</h1>
                    <div class="box">
                        <img src="images/courses/iot.jpg" alt="Internet of Things" width="200" height="130" class="float-right ml-3 mb-3">
                    </div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;As IoT devices become more prevalent, there is a growing need for programmers who can develop and maintain applications that connect and control these devices. IoT involves creating interconnected systems of devices that communicate and exchange data, leading to innovations in smart homes, healthcare, transportation, and industrial automation. Skills in IoT development often involve languages like C, C++, and Python, as well as knowledge of hardware and networking.</p>
                    <h1>&emsp;&emsp;6. Blockchain Technology</h1>
                    <div class="box"></div>
                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;The rise of blockchain and cryptocurrencies has created a demand for programmers who can develop decentralized applications (DApps) and smart contracts using languages like Solidity. Blockchain technology offers secure, transparent, and immutable transaction records, making it valuable for industries like finance, supply chain, and digital identity. Knowledge of blockchain development can lead to careers in fintech, supply chain management, and beyond.</p>
                </div>
                <h1>Conclusion</h1>
                <p>&emsp;&emsp;&emsp;&emsp;In summary, programming languages are essential tools that enable us to communicate with computers and bring our digital ideas to life. They are the backbone of modern technology, driving innovation, efficiency, and automation across various industries. Learning programming languages not only enhances problem-solving skills and opens up numerous career opportunities but also empowers individuals to contribute to the technological advancements shaping our world. The future holds immense potential for those proficient in programming languages, with expanding fields like artificial intelligence, cybersecurity, data science, and web development continually seeking skilled programmers. By starting with the basics, practicing regularly, building projects, and staying updated with the latest trends, anyone can master programming languages and leverage their power to create impactful solutions.<br>&emsp;&emsp;&emsp;&emsp;Embracing programming languages is a journey of continuous learning and growth, offering a pathway to unlock new possibilities and achieve personal and professional success in the digital age. Whether you're aiming to automate tasks, develop innovative applications, or understand the intricacies of technology, programming languages provide the foundation to turn your aspirations into reality.</p>
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