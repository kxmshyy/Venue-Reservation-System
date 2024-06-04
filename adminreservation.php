<?php
session_start();
include 'db_connect.php';

// Handle form submission to update available dates
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date'];
    $status = isset($_POST['cancel']) ? 'available' : 'taken'; // Set the status based on action

    // Check if the date already exists in the table
    $sql = "SELECT * FROM available_dates WHERE date = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $date);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Update the existing date
        $sql = "UPDATE available_dates SET status = ? WHERE date = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $status, $date);
    } else {
        // Insert the new date
        $sql = "INSERT INTO available_dates (date, status) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $date, $status);
    }

    if ($stmt->execute()) {
        // Date status updated successfully
    } else {
        // Error updating date status
    }

    $stmt->close();
}

// Fetch all dates that are taken for display
$sql = "SELECT * FROM available_dates WHERE status = 'taken' ORDER BY date";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Dates</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: -40px;
            height: 80px;
            background-color: #103510;
            color: white;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .container {
            padding: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="date"] {
            width: 100%;
            padding: 6px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #133b0b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
        }

        input[type="submit"]:hover {
            background-color: #317e1f;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #103510;
            color: white;
        }

        .cancel-button {
            background-color: #ff6666;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
        }

        .cancel-button:hover {
            background-color: #ff4d4d;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1 style="padding-left: 25px; font-size: 35px; ">Admin Panel</h1>
        </div>
        <nav>
            <ul>
                <li><a style="font-size: 16px;" href="Admin.php">Dashboard</a></li>
                <li><a style="font-size: 16px;" href="adminreservation.php">Calendar</a></li>
                <li><a style="font-size: 16px;" href="Pending.php">Pending Reservations</a></li>
                <li><a style="font-size: 16px;" href="Approved.php">Approved Reservations</a></li>
                <li><a style="font-size: 16px;" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2>Manage Dates</h2>
        <form method="post" action="adminreservation.php">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            <input type="submit" value="Mark Date as Taken">
        </form>
        <h3>All Taken Dates</h3>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo ucfirst($row['status']); ?></td>
                    <td>
                        <form method="post" action="adminreservation.php" style="display:inline;">
                            <input type="hidden" name="date" value="<?php echo $row['date']; ?>">
                            <input type="hidden" name="cancel" value="1">
                            <input type="submit" class="cancel-button" value="Cancel">
                        </form>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$conn->close();
?>
