<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the username and password match
    $sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if there is a matching row
    if (mysqli_num_rows($result) == 1) {
        // Redirect to the dashboard if login is successful
        header("Location: dashboard.php");
        exit();
    } else {
        // Redirect back to the login page with an error message if login fails
        header("Location: login.php?error=1");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .login-form {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .login-form form {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #0056b3;
        }

        .image {
            flex: 1;
            background-image: url('images/railway_background.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="image"></div>
    </div>
</body>
</html>
