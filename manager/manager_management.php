
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

// Function to fetch all managers
function getAllManagers($conn) {
    $sql = "SELECT * FROM managers";
    $result = mysqli_query($conn, $sql);
    $managers = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $managers[] = $row;
    }
    return $managers;
}

// Get all managers
$managers = getAllManagers($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        h2 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .action-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 5px 10px;
            cursor: pointer;
            text-decoration: none;
            margin-right: 5px;
        }

        .action-btn:hover {
            background-color: #0056b3;
        }
        .update-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.update-btn:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    
    <div class="container">
        <h2>Manager Management</h2>

        <!-- Button to redirect to create manager form -->
        <a href="create_manager.php" class="action-btn">Create New Manager</a>

        <!-- Display all managers -->
        <h3>All Managers</h3>
        <table>
            <tr>
                <th>Manager ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($managers as $manager) { ?>
                <tr>
                    <td><?php echo $manager['manager_id']; ?></td>
                    <td><?php echo $manager['NAME']; ?></td>
                    <td><?php echo $manager['email']; ?></td>
                    <td>
                        <a href="view_manager.php?id=<?php echo $manager['manager_id']; ?>" class="action-btn">View</a>
                        <a href="update_manager.php?manager_id=<?php echo $manager['manager_id']; ?>" class="update-btn">Update</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
