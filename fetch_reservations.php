<?php
include 'db_connect.php';

header('Content-Type: application/json');

$sql = "SELECT id, name, email, phone, guests, venue, selected_date, price FROM bookings";
$result = $conn->query($sql);

$reservations = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reservations[] = $row;
    }
} else {
    http_response_code(404);
    echo json_encode(array("message" => "No reservations found."));
    exit();
}

$conn->close();

echo json_encode($reservations);
?>
