<?php
session_start();
if(isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
$registered=0;$userexist=0;$messgae="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "credential";
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $dateofbirth = $_POST["dateofbirth"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql="SELECT * FROM signup WHERE username='$username'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $userexist=1;
            $message = "User already exists. Please click the login.";
        }
        else{
            $sql = "INSERT INTO signup (fname, lname, dob, username, password)
            VALUES ('$firstname', '$lastname', '$dateofbirth', '$username', '$password')";
            if ($conn->query($sql) === TRUE) {
                $registered=1;
                $message="Account created. Please click login...";
            } else {
                $message= "Error occured. Please try after some time.";
            }
        }
    }
    $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
        input[type=text], select, input[type=password], input[type=date] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100%;
            background-color: #6affec;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: aqua;
            color: grey;
        }
        div {
            border-radius: 5px;
            width: 50%;
            padding: 20px;
            margin: auto;
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
                    <li class="nav-item"><a class="nav-link text-white" href="login.php" target="_blank">Login</a></li>
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
    <h3 style="text-align: center; font-size: 30px;">Sign Up</h3>
    <div>
    <div id="userExistMessage" style="color: aqua ; display: <?php echo ($registered == 1) ? 'block' : 'none'; ?>"><?php echo $message; ?></div>
        <form id="signupForm" method="post" action="signup.php">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="First name" required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Last name" required>

            <label for="dob">Date of birth</label>
            <input type="date" id="dob" name="dateofbirth" required>

            <label for="username">Username</label>
            <input type="text" id="uname" name="username" placeholder="name" required>

            <label for="pass">Password</label>
            <input type="password" id="pass" name="password" placeholder="password" required>

            <input type="submit" value="Create account">
        </form>
        <div id="userExistMessage" style="color: red; display: <?php echo ($userexist == 1) ? 'block' : 'none'; ?>"><?php echo $message; ?></div>
    </div>
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

