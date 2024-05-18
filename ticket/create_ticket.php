<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ticket_number = $_POST['ticket_number'];
    $status = $_POST['status'];

    $sql = "INSERT INTO tickets (ticket_number, status) VALUES ('$ticket_number', '$status')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ticketing_system.php");
        exit();
    } else {
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
    <link rel="stylesheet" href="../ticket/style.css">
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
    <div class="container">
        <h2>Create New Ticket</h2>
        <form method="POST" action="create_ticket.php">
            <label for="ticket_number">Ticket Number:</label>
            <input type="text" id="ticket_number" name="ticket_number" required>
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="Open">Open</option>
                <option value="In Progress">In Progress</option>
                <option value="Closed">Closed</option>
            </select>
            <button type="submit">Create Ticket</button>
        </form>
    </div>
</body>
</html>
