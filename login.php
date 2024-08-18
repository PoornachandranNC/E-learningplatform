<?php
session_start();
$logged = 1;
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "credential";
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "SELECT fname, lname FROM signup WHERE username=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($first_name, $last_name);
        $stmt->fetch();
        
        $_SESSION["username"] = $username;
        $_SESSION["first_name"] = $first_name;
        $_SESSION["last_name"] = $last_name;

        header("Location: index.php");
        exit();
    } else {
        $logged = 0;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <ul class="nav">
                <li class="nav-item"><a class="nav-link text-white" href="index.php" target="_blank">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="signup.php" target="_blank">Sign Up</a></li>
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
            <h2>Login</h2>
            <div id="userExistMessage" style="color: red; display: <?php echo ($logged == 0) ? 'block' : 'none'; ?>"><?php echo "Invalid Credentials!"; ?></div>
            <form id="login" method="post" action="login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
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
</body>
</html>
