<?php
header('Content-Type: application/json');
include 'db_connect.php';

// Fetch reservations from the database
$query = "SELECT * FROM bookings";
$result = mysqli_query($connection, $query);

$reservations = [];
while ($row = mysqli_fetch_assoc($result)) {
    $reservations[] = $row;
}

echo json_encode($reservations);

mysqli_close($connection);
?>
