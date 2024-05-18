<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "customer_support_db";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Customer Support</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="sidebar">
<div class="sidebar">
        <div class="header">Railway Customer Support</div>
        <a href="manager/manager_management.php">Managers</a>
        <a href="complaints/complaint_ticketing.php">Complaint Tracking</a>
        <a href="feedback/user_feedback.php">User Feedback</a>
        <a href="ticket/ticketing_system.php">Ticketing System</a>
        <a href="live_chat_support.php">Live Chat Support</a>
        <a href="automated_responses.php">Automated Responses</a>
        <a href="multi_channel_support.php">Multi-Channel Support</a>
        <form action="logout.php" method="post">
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
    <div class="content">
        <div class="dashboard">
            <h1>Railway Customer Support Dashboard</h1>
            <p>Welcome, railway employee!</p>
            <p>Here you can manage various aspects of customer support for the railway system.</p>
            <p>Use the menu on the left to navigate to different sections:</p>
            <ul>
                <li><strong>Station Managers:</strong> Manage station managers' information.</li>
                <li><strong>Ticketing System:</strong> Handle customer inquiries and issues.</li>
                <li><strong>Live Chat Support:</strong> Provide real-time assistance to customers.</li>
                <li><strong>Automated Responses:</strong> Set up automated responses for common issues.</li>
                <li><strong>Complaint Tracking:</strong> Monitor and address customer complaints.</li>
                <li><strong>User Feedback:</strong> View feedback from customers and take necessary actions.</li>
                <li><strong>Multi-Channel Support:</strong> Manage support across various communication channels.</li>
            </ul>
        </div>
    </div>
</body>
</html>
