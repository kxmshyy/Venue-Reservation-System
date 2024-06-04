<?php
// Include database configuration file
include 'db_connect.php';

// Get booking ID from URL
$booking_id = $_GET['booking_id'];

$stmt = $conn->prepare("SELECT * FROM bookings WHERE id = ?");
$stmt->bind_param("i", $booking_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $booking = $result->fetch_assoc();
} else {
    echo "No booking found.";
    exit();
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking is Successful!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .content {
            padding: 20px;
        }
        h1 {
            color: #333;
            font-size: 24px;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        strong {
            color: #333;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #f4f4f4;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            font-size: 14px;
            color: #666;
        }
        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Reservation Submmited Succesfully!</h1>
        </div>
        <div class="content">
            <h1 style="color: #4CAF50;">Reservation is now Under Review</h1>
            <h5 style="color: #4CAF50; font-style: italic;">We will notify you via email within 24 hours using the Gmail account you provided.</h5>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($booking['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($booking['email']); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($booking['phone']); ?></p>
            
            <p><strong>Guests:</strong> <?php echo htmlspecialchars($booking['guests']); ?></p>
            <p><strong>Venue:</strong> <?php echo htmlspecialchars($booking['venue']); ?></p>
            <p><strong>Selected Date:</strong> <?php echo htmlspecialchars($booking['selected_date']); ?></p>
        </div>
        <div class="footer">
            <p>Thank you for your booking! For any queries, please contact us at <a href="mailto:thehauslandph@gmail.com">thehauslandph@gmail.com</a>.</p>
        </div>
    </div>
</body>
</html>
