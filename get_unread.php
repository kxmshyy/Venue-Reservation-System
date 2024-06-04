<?php
include('db_connect.php'); // Include your database connection file

// Fetch count of unread notifications
$count_query = "SELECT COUNT(*) AS unread_count FROM notifications WHERE status = 'unread'";
$count_result = mysqli_query($conn, $count_query);
$count_row = mysqli_fetch_assoc($count_result);
$unread_count = $count_row['unread_count'];

// Return the count as a JSON response
echo json_encode(['unread_count' => $unread_count]);
?>
