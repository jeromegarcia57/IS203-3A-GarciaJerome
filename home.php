<?php
    include("session.php");

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    } else {
        $username = "Guest"; // Default message if no username is set
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #74ebd5, #9face6); /* New gradient background */
        }

        .container {
            width: 100%;
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        .icon-bar {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 15px;
        }

        .icon-bar a {
            text-align: center;
            padding: 10px;
            background-color: #0288d1; /* Button background */
            border-radius: 50%;
            color: white;
            font-size: 20px;
            text-decoration: none;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s;
        }

        .icon-bar a:hover {
            background-color: #0277bd;
        }

        .icon-bar a.active {
            background-color: #01579b;
        }

        footer {
            margin-top: 20px;
            color: #aaa;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Welcome message -->
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>You have successfully logged in.</p>

    <!-- Navigation bar with icons -->
    <div class="icon-bar">
        <a class="active" href="home.php"><i class="fa fa-home"></i></a> 
        <a href="users.php"><i class="fa fa-user"></i></a> 
        <a href="registration.php"><i class="fa fa-registered"></i></a>
        <a href="print_all.php" target="_blank"><i class="fa fa-print"></i></a>
        <a href="logout.php"><i class="fa fa-power-off"></i></a> 
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Your Company. All Rights Reserved.
    </footer>
</div>

</body>
</html>
