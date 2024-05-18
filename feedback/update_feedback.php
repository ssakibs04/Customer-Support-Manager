<?php
include '../config.php';

$feedback_id = $_GET['id'];

// Fetch feedback details
$sql = "SELECT * FROM user_feedback WHERE feedback_id='$feedback_id'";
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $feedback_text = $_POST['feedback'];
    $rating = $_POST['rating'];

    // Update query
    $sql = "UPDATE user_feedback SET customer_name='$customer_name', feedback='$feedback_text', rating='$rating' WHERE feedback_id='$feedback_id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: user_feedback.php");
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
    <title>Update Feedback</title>
    <link rel="stylesheet" href="../feedback/style.css">
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
        <h2>Update Feedback</h2>
        <form method="POST" action="update_feedback.php?id=<?php echo $feedback['feedback_id']; ?>">
            <label for="customer_name">Customer Name:</label>
            <input type="text" id="customer_name" name="customer_name" value="<?php echo $feedback['customer_name']; ?>" required>
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" required><?php echo $feedback['feedback']; ?></textarea>
            <label for="rating">Rating:</label>
            <select id="rating" name="rating">
                <option value="1" <?php if ($feedback['rating'] == 1) echo 'selected'; ?>>1</option>
                <option value="2" <?php if ($feedback['rating'] == 2) echo 'selected'; ?>>2</option>
                <option value="3" <?php if ($feedback['rating'] == 3) echo 'selected'; ?>>3</option>
                <option value="4" <?php if ($feedback['rating'] == 4) echo 'selected'; ?>>4</option>
                <option value="5" <?php if ($feedback['rating'] == 5) echo 'selected'; ?>>5</option>
            </select>
            <button type="submit">Update Feedback</button>
        </form>
    </div>
</body>
</html>
