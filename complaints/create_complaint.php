<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $complaint = $_POST['complaint'];
    $status = $_POST['status'];
    $resolved_by = $_POST['resolved_by'];
    $resolution_notes = $_POST['resolution_notes'];

    $sql = "INSERT INTO complaints (customer_name, complaint, STATUS, resolved_by, resolution_notes) 
            VALUES ('$customer_name', '$complaint', '$status', '$resolved_by', '$resolution_notes')";

    if (mysqli_query($conn, $sql)) {
        header("Location: complaint_ticketing.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Complaint</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="sidebar">
        <div class="header">Railway Customer Support</div>
        <a href="../manager/manager_management.php">Managers</a>
        <a href="../ticket/ticketing_system.php">Ticketing System</a>
        <a href="../live_chat_support.php">Live Chat Support</a>
        <a href="../automated_responses.php">Automated Responses</a>
        <?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $complaint = $_POST['complaint'];
    $status = $_POST['status'];
    $resolved_by = $_POST['resolved_by'];
    $resolution_notes = $_POST['resolution_notes'];

    $sql = "INSERT INTO complaints (customer_name, complaint, STATUS, resolved_by, resolution_notes) 
            VALUES ('$customer_name', '$complaint', '$status', '$resolved_by', '$resolution_notes')";

    if (mysqli_query($conn, $sql)) {
        header("Location: complaint_ticketing.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Complaint</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="sidebar">
        <div class="header">Railway Customer Support</div>
        <a href="../manager/manager_management.php">Managers</a>
        <a href="../ticket/ticketing_system.php">Ticketing System</a>
        <a href="../live_chat_support.php">Live Chat Support</a>
        <a href="../automated_responses.php">Automated Responses</a>
        <?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $complaint = $_POST['complaint'];
    $status = $_POST['status'];
    $resolved_by = $_POST['resolved_by'];
    $resolution_notes = $_POST['resolution_notes'];

    $sql = "INSERT INTO complaints (customer_name, complaint, STATUS, resolved_by, resolution_notes) 
            VALUES ('$customer_name', '$complaint', '$status', '$resolved_by', '$resolution_notes')";

    if (mysqli_query($conn, $sql)) {
        header("Location: complaint_ticketing.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Customer Support</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="sidebar">
        <div class="header">Railway Customer Support</div>
        <a href="../manager/manager_management.php">Managers</a>
        <a href="../complaints/complaint_ticketing.php">Complaint Tracking</a>
        <a href="../feedback/user_feedback.php">User Feedback</a>
        <a href="../ticket/ticketing_system.php">Ticketing System</a>
        <a href="../live_chat_support.php">Live Chat Support</a>
        <a href="../automated_responses.php">Automated Responses</a>
        <a href="../multi_channel_support.php">Multi-Channel Support</a>
        <form action="../logout.php" method="post">
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
    </div>
    <div class="content">
        <div class="container">
            <h2>Create New Complaint</h2>
            <form method="POST" action="create_complaint.php">
                <label for="customer_name">Customer Name:</label>
                <input type="text" id="customer_name" name="customer_name" required>
                <label for="complaint">Complaint:</label>
                <textarea id="complaint" name="complaint" required></textarea>
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="Pending">Pending</option>
                    <option value="Resolved">Resolved</option>
                </select>
                <label for="resolved_by">Resolved By:</label>
                <input type="text" id="resolved_by" name="resolved_by">
                <label for="resolution_notes">Resolution Notes:</label>
                <textarea id="resolution_notes" name="resolution_notes"></textarea>
                <div class="btn-container">
                    <button type="submit">Create Complaint</button>
                </div>
            </form>
            </div>
    </div>
</body>
</html>
</html>
        <a href="../feedback/user_feedback.php">User Feedback</a>
        <a href="../multi_channel_support.php">Multi-Channel Support</a>
        <form action="../logout.php" method="post">
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
    <div class="content">
        <div class="container">
            <h2>Create New Complaint</h2>
            <form method="POST" action="create_complaint.php">
                <label for="customer_name">Customer Name:</label>
                <input type="text" id="customer_name" name="customer_name" required>
                <label for="complaint">Complaint:</label>
                <textarea id="complaint" name="complaint" required></textarea>
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="Pending">Pending</option>
                    <option value="Resolved">Resolved</option>
                </select>
                <label for="resolved_by">Resolved By:</label>
                <input type="text" id="resolved_by" name="resolved_by">
                <label for="resolution_notes">Resolution Notes:</label>
                <textarea id="resolution_notes" name="resolution_notes"></textarea>
                <div class="btn-container">
                    <button type="submit">Create Complaint</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
        <a href="../feedback/user_feedback.php">User Feedback</a>
        <a href="../multi_channel_support.php">Multi-Channel Support</a>
        <form action="../logout.php" method="post">
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
    <div class="content">
        <div class="container">
            <h2>Create New Complaint</h2>
            <form method="POST" action="create_complaint.php">
                <label for="customer_name">Customer Name:</label>
                <input type="text" id="customer_name" name="customer_name" required>
                <label for="complaint">Complaint:</label>
                <textarea id="complaint" name="complaint" required></textarea>
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="Pending">Pending</option>
                    <option value="Resolved">Resolved</option>
                </select>
                <label for="resolved_by">Resolved By:</label>
                <input type="text" id="resolved_by" name="resolved_by">
                <label for="resolution_notes">Resolution Notes:</label>
                <textarea id="resolution_notes" name="resolution_notes"></textarea>
                <div class="btn-container">
                    <button type="submit">Create Complaint</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
