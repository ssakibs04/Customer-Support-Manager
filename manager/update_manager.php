<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "customer_support_db"; // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if manager_id is provided in the URL
if (isset($_GET['manager_id'])) {
    $manager_id = $_GET['manager_id'];

    // Fetch manager data from the database
    $sql = "SELECT * FROM managers WHERE manager_id = $manager_id";
    $result = mysqli_query($conn, $sql);

    // Check if manager data is found
    if (mysqli_num_rows($result) > 0) {
        $manager = mysqli_fetch_assoc($result);
    } else {
        echo "Manager not found";
        exit();
    }
} else {
    echo "Manager ID not provided";
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare update query
    $sql = "UPDATE managers SET NAME='$name', email='$email', PASSWORD='$password' WHERE manager_id=$manager_id";

    // Execute update query
    if (mysqli_query($conn, $sql)) {
        // If update successful, redirect to manager_management.php
        header("Location: manager_management.php");
        exit();
    } else {
        // If update fails, display error message
        echo "Error updating manager: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        h2 {
            margin-top: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .btn-container {
            margin-top: 20px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Manager</h2>
        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($manager['NAME']) ? $manager['NAME'] : ''; ?>">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($manager['email']) ? $manager['email'] : ''; ?>">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo isset($manager['PASSWORD']) ? $manager['PASSWORD'] : ''; ?>">
            <div class="btn-container">
                <button type="submit">Update</button>
                <a href="manager_management.php" class="btn-back">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
