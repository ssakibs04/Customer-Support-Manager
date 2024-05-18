<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "customer_support_db";
// Query to retrieve chat history
$sql = "SELECT * FROM chat_history ORDER BY timestamp DESC";
$result = mysqli_query($conn, $sql);

// Check if there are any chat messages
if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display chat messages
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Sender: " . $row['sender'] . "<br>";
        echo "Message: " . $row['message'] . "<br>";
        echo "Timestamp: " . $row['timestamp'] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No chat messages found";
}
?>
