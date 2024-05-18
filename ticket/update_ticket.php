<?php
include '../config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Update the ticket status in the database
    $sql = "UPDATE tickets SET status='$status' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ticketing_system.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Fetch the ticket details
$id = $_GET['id'];
$sql = "SELECT * FROM tickets WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$ticket = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Update Ticket Status</title>
    <link rel="stylesheet" href="../ticket/style.css">
</head>
<body>
    <div class="container">
        <h2>Update Ticket Status</h2>
        <form method="POST" action="update_ticket.php">
            <input type="hidden" name="id" value="<?php echo $ticket['id']; ?>">
            <label for="ticket_number">Ticket Number:</label>
            <input type="text" id="ticket_number" name="ticket_number" value="<?php echo $ticket['ticket_number']; ?>" disabled>
            <label for="status">Status:</label>
            <select id="status" name="status">
                <option value="Open" <?php if ($ticket['status'] == 'Open') echo 'selected'; ?>>Open</option>
                <option value="In Progress" <?php if ($ticket['status'] == 'In Progress') echo 'selected'; ?>>In Progress</option>
                <option value="Closed" <?php if ($ticket['status'] == 'Closed') echo 'selected'; ?>>Closed</option>
            </select>
            <button type="submit">Update Status</button>
        </form>
    </div>
</body>
</html>
