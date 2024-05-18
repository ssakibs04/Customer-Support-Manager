<?php
include '../config.php';

if (isset($_GET['id'])) {
    $complaint_id = $_GET['id'];

    // Fetch the existing complaint details
    $sql = "SELECT * FROM complaints WHERE complaint_id = $complaint_id";
    $result = mysqli_query($conn, $sql);
    $complaint = mysqli_fetch_assoc($result);

    if (!$complaint) {
        die("Complaint not found.");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $complaint_id = $_POST['complaint_id'];
    $customer_name = $_POST['customer_name'];
    $complaint_text = $_POST['complaint'];
    $status = $_POST['status'];
    $resolved_by = $_POST['resolved_by'];
    $resolution_notes = $_POST['resolution_notes'];

    $sql = "UPDATE complaints SET customer_name='$customer_name', complaint='$complaint_text', STATUS='$status', resolved_by='$resolved_by', resolution_notes='$resolution_notes' WHERE complaint_id=$complaint_id";

    if (mysqli_query($conn, $sql)) {
        header("Location: complaint_ticketing.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Complaint</title>
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
            <h2>Update Complaint</h2>
            <form method="POST" action="update_complaint.php">
                <input type="hidden" name="complaint_id" value="<?php echo $complaint['complaint_id']; ?>">
                <label for="customer_name">Customer Name:</label>
                <input type="text" id="customer_name" name="customer_name" value="<?php echo $complaint['customer_name']; ?>" required>
                <label for="complaint">Complaint:</label>
                <textarea id="complaint" name="complaint" required><?php echo $complaint['complaint']; ?></textarea>
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="Pending" <?php echo ($complaint['STATUS'] == 'Pending') ? 'selected' : ''; ?>>Pending</option>
                    <option value="Resolved" <?php echo ($complaint['STATUS'] == 'Resolved') ? 'selected' : ''; ?>>Resolved</option>
                </select>
                <label for="resolved_by">Resolved By:</label>
                <input type="text" id="resolved_by" name="resolved_by" value="<?php echo $complaint['resolved_by']; ?>">
                <label for="resolution_notes">Resolution Notes:</label>
                <textarea id="resolution_notes" name="resolution_notes"><?php echo $complaint['resolution_notes']; ?></textarea>
                <div class="btn-container">
                    <button type="submit">Update Complaint</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
