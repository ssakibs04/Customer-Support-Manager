<?php
include '../config.php';

// Fetch all complaints from the database
$sql = "SELECT * FROM complaints";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints Ticketing System</title>
    <link rel="stylesheet" href="../complaints/style.css">
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
    <div class="content">
        <div class="container">
            <h2>Complaints Ticketing System</h2>
            <a href="create_complaint.php" class="create-btn">Create New Complaint</a>
            <table>
                <tr>
                    <th>Complaint ID</th>
                    <th>Customer Name</th>
                    <th>Complaint</th>
                    <th>Status</th>
                    <th>Resolved By<br>(Manager ID)</th>
                    <th>Resolution Notes</th>
                    <th>Actions</th>
                </tr>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['complaint_id'] . "</td>";
                        echo "<td>" . $row['customer_name'] . "</td>";
                        echo "<td>" . $row['complaint'] . "</td>";
                        echo "<td>" . $row['STATUS'] . "</td>";  
                        echo "<td>" . $row['resolved_by'] . "</td>";
                        echo "<td>" . $row['resolution_notes'] . "</td>";
                        echo "<td>
                            <a href='update_complaint.php?id=" . $row['complaint_id'] . "' class='update-btn'>Update</a>
                            </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No complaints found</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
