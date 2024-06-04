<?php
include 'db_connect.php';

$sql = "SELECT * FROM bookings WHERE status = 'cancelled'";
$result = $conn->query($sql);
$reservations = [];

while($row = $result->fetch_assoc()) {
    $reservations[] = $row;
}

echo json_encode($reservations);
$conn->close();
?>
