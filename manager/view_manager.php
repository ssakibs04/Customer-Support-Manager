<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "customer_support_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $manager_id = $_GET['id'];

    // Prepare SELECT query
    $sql = "SELECT * FROM managers WHERE manager_id = $manager_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $manager = mysqli_fetch_assoc($result);
    } else {
        echo "Manager not found";
        exit();
    }
} else {
    echo "Invalid request";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Manager</title>
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
        <h2>View Manager</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $manager['NAME']; ?>" readonly>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $manager['email']; ?>" readonly>
            <div class="btn-container">
            <a href="manager_management.php" class="btn-back">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
