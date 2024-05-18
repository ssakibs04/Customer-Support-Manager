<?php
include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing System</title>
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
        <h2>Ticketing System</h2>
        <a href="create_ticket.php" class="create-btn">Create New Ticket</a>
        <h3>All Tickets</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Ticket Number</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php
            $sql = "SELECT * FROM tickets";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($ticket = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $ticket['id'] . "</td>";
                    echo "<td>" . $ticket['ticket_number'] . "</td>";
                    echo "<td>" . $ticket['status'] . "</td>";
                    echo "<td>";
                    echo "<a href='update_ticket.php?id=" . $ticket['id'] . "' class='update-btn'>Update Status</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No tickets found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
