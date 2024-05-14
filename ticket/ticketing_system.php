<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketing System</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
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
        }

        .create-btn:hover {
            background-color: #0056b3;
        }

        .view-btn, .update-btn, .delete-btn {
            padding: 6px 10px;
            margin-right: 5px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 3px;
            text-decoration: none;
        }

        .update-btn {
            background-color: #007bff;
        }

        .delete-btn {
            background-color: #dc3545;
        }

        .view-btn:hover, .update-btn:hover, .delete-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ticketing System</h2>

        <!-- Button to create a new ticket -->
        <a href="create_ticket.php" class="create-btn">Create New Ticket</a>

        <!-- Display all tickets -->
        <h3>All Tickets</h3>
        <table>
            <tr>
                <th>Ticket ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Assigned To</th>
                <th>Actions</th>
            </tr>
            <!-- This part will be dynamically generated with PHP -->
        </table>
    </div>
</body>
</html>
