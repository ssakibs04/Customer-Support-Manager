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

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #2c3e50;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: 0.3s;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar a:last-child {
            border-bottom: none;
        }

        .sidebar a:hover {
            background-color: #44526c;
        }

        .container {
            margin-left: 250px; /* Same as the width of the sidebar */
            padding: 20px;
        }

        h2 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .create-btn {
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .create-btn:hover {
            background-color: #0056b3;
        }
    </style>
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
        <h2>User Feedback</h2>


        <!-- Display all feedback -->
        <table>
            <tr>
                <th>Feedback ID</th>
                <th>Customer Name</th>
                <th>Feedback</th>
                <th>Rating</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Alice</td>
                <td>Great service! Will definitely recommend.</td>
                <td>5</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Bob</td>
                <td>Could improve on response time.</td>
                <td>3</td>
            </tr>
            <!-- Add more rows as needed -->
        </table>
    </div>
</body>
</html>
