<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback</title>
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

        .feedback-entry {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .feedback-entry:last-child {
            border-bottom: none;
        }

        .feedback-info {
            font-weight: bold;
        }

        .feedback-rating {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Feedback</h2>

        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "customer_support_db"; // Replace with your actual database name

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch feedback data from the database
        $sql = "SELECT * FROM feedback";
        $result = mysqli_query($conn, $sql);

        // Check if the query executed successfully
        if ($result && mysqli_num_rows($result) > 0) {
            // Display feedback entries
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="feedback-entry">
                    <div class="feedback-info">Feedback ID: <?php echo $row['feedback_id']; ?></div>
                    <div class="feedback-info">Customer Name: <?php echo $row['customer_name']; ?></div>
                    <div class="feedback-info">Feedback: <?php echo $row['feedback']; ?></div>
                    <div class="feedback-rating">Rating: <?php echo $row['rating']; ?></div>
                </div>
                <?php
            }
        } else {
            echo "No feedback entries found.";
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
