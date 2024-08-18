<?php
session_start();
$is_logged_in = isset($_SESSION['username']) ? 'true' : 'false';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
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
    <main>
        <section id="courses">
            <div class="container bg-white p-4 shadow-sm">
                <h1>What is Digital Marketing?</h1>
                <p>&emsp;&emsp;&emsp;Digital marketing, also known as online marketing, refers to the promotion of products, services, or brands through electronic media and the internet. It encompasses various strategies and techniques used to reach customers via digital channels, including search engines, social media, email, websites, and mobile apps. Unlike traditional marketing methods, digital marketing leverages technology to provide targeted, data-driven marketing efforts that can be measured and optimized in real time.</p>
                <h1>Why We Learn Digital Marketing?</h1>
                        <h1>&emsp;&emsp;1. High Demand for Digital Marketing Professionals</h1>
                        <div class="box"></div>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;As businesses increasingly transition to online platforms, the demand for skilled digital marketers has skyrocketed. Companies of all sizes are recognizing the importance of establishing a robust online presence to expand their reach and drive sales. This surge in demand has created a wealth of job opportunities in the digital marketing field, spanning across industries and geographical locations.</p>
                        <h1>&emsp;&emsp;2. Diverse Career Opportunities</h1>
                        <div class="box">
                            <img src="images/digital_marketing/diversity.jpg" alt="diversity" width="150" height="130" class="right">
                        </div>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Digital marketing encompasses a vast array of specializations, offering professionals the flexibility to explore various avenues within the field. From search engine optimization (SEO) to content marketing, social media management, email marketing, analytics, and more, there's a diverse range of career paths to pursue. This diversity enables individuals to tailor their career trajectory based on their interests, strengths, and aspirations, fostering a fulfilling and dynamic professional journey.</p>

                        <h1>&emsp;&emsp;3. Measurable Results and ROI</h1>
                        <div class="box"></div>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;One of the significant advantages of digital marketing is its ability to provide tangible, measurable results in real-time. Through advanced analytics tools and tracking mechanisms, marketers can gauge the effectiveness of their campaigns, monitor key performance indicators (KPIs), and calculate return on investment (ROI) with precision. This data-driven approach empowers marketers to refine their strategies, allocate resources effectively, and demonstrate the value of their efforts to stakeholders, fostering accountability and informed decision-making.</p>

                        <h1>&emsp;&emsp;4. Cost-Effective Marketing</h1>
                        <div class="box">
                            <img src="images/digital_marketing/CEM.jpg" alt="CEM" width="150" height="130" class="right">
                        </div>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Compared to traditional marketing channels, digital marketing often offers a more cost-effective alternative, particularly for small and medium-sized businesses with limited budgets. With targeted advertising options, precise audience segmentation, and the ability to optimize campaigns on the fly, digital marketing allows businesses to maximize their marketing dollars and achieve higher returns on investment. Strategies such as social media marketing and email campaigns offer affordable yet impactful means of reaching and engaging with target audiences, leveling the playing field for businesses of all sizes.</p>

                        <h1>&emsp;&emsp;5. Flexibility and Creativity</h1>
                        <div class="box"></div>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Digital marketing provides a fertile ground for creativity and innovation, offering marketers unparalleled flexibility in crafting compelling campaigns and captivating content. From visually stunning social media posts to interactive email newsletters and engaging website experiences, digital marketers have the freedom to experiment with various formats, platforms, and storytelling techniques to captivate and inspire audiences. This creative freedom not only fuels innovation but also fosters a culture of continuous learning and adaptation, as marketers strive to stay ahead in an ever-evolving digital landscape.</p>

                <h1>Future Scopes of Learning Digital Marketing</h1>
                        <h1>&emsp;&emsp;1. Growth of E-Commerce</h1>
                        <div class="box">
                            <img src="images/digital_marketing/e-comerce.jpg" alt="e-commerce" width="200" height="130" class="right">
                        </div>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;With the exponential growth of e-commerce, digital marketing skills are poised to become indispensable for businesses seeking to thrive in the online marketplace. Mastery of digital marketing techniques will be essential for driving website traffic, increasing online sales, and enhancing the overall customer experience, as businesses vie for visibility and market share in a competitive landscape.</p>

                        <h1>&emsp;&emsp;2. Advancements in Technology</h1>
                        <div class="box"></div>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;The rapid pace of technological innovation, including developments in artificial intelligence, machine learning, and automation, is reshaping the digital marketing landscape. Future marketers will need to stay abreast of these technological advancements, leveraging emerging tools and techniques to deliver personalized, data-driven marketing campaigns that resonate with target audiences on a deeper level.</p>

                        <h1>&emsp;&emsp;3. Expanding Social Media Platforms</h1>
                        <div class="box">
                            <img src="images/digital_marketing/social-media.jpg" alt="social-media" width="200" height="130" class="right">
                        </div>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;As new social media platforms emerge and existing ones continue to evolve, digital marketers must adapt their strategies to harness the full potential of these dynamic channels. Understanding the nuances of each platform, identifying emerging trends, and engaging with audiences authentically will be critical for driving meaningful interactions and driving conversions in an increasingly social-centric digital ecosystem.</p>

                        <h1>&emsp;&emsp;4. Global Reach and Remote Work</h1>
                        <div class="box"></div>
                        <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Digital marketing transcends geographical boundaries, enabling businesses to connect with audiences worldwide and operate on a global scale. The rise of remote work further amplifies the appeal of digital marketing as a career choice, offering professionals the flexibility to work from anywhere while tapping into a wealth of opportunities in the digital realm. As businesses embrace remote-friendly practices and digital communication platforms, the demand for skilled digital marketers who can navigate the complexities of the global marketplace will continue to soar.</p>

                <h1>Conclusion</h1>
                <p>&emsp;&emsp;&emsp;&emsp;Digital marketing is an ever-evolving field that plays a critical role in the modern business landscape. Learning digital marketing equips individuals with valuable skills to meet the high demand for digital marketing professionals and opens up diverse career opportunities. As technology continues to advance and the digital economy expands, the importance of digital marketing will only grow, making it a future-proof career choice. Whether you're a business owner, a marketing professional, or someone looking to switch careers, mastering digital marketing will empower you to navigate the digital world effectively and achieve your goals.</p>
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
