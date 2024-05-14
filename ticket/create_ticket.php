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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $assigned_to = $_POST['assigned_to'];

    // Prepare insert query
    $sql = "INSERT INTO tickets (title, description, STATUS, assigned_to) VALUES ('$title', '$description', '$status', '$assigned_to')";

    // Execute insert query
    if (mysqli_query($conn, $sql)) {
        // If insertion successful, redirect to ticketing_system.php or any other page
        header("Location: ticketing_system.php");
        exit();
    } else {
        // If insertion fails, display error message
        echo "Error creating ticket: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
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
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        .btn-container {
            margin-top: 20px;
            text-align: right;
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
        <h2>Create New Ticket</h2>
        <form method="POST" action="create_ticket.php">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="Open">Open</option>
                <option value="In Progress">In Progress</option>
                <option value="Closed">Closed</option>
            </select>
            <label for="assigned_to">Assigned To:</label>
            <input type="text" id="assigned_to" name="assigned_to" required>
            <div class="btn-container">
                <button type="submit">Create Ticket</button>
            </div>
        </form>
    </div>
</body>
</html>
