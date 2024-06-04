<?php
header('Content-Type: application/json');

// Database connection parameters
$host = 'localhost';
$db   = 'bookings_db';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the reservation ID from the POST request
        $id = $_POST['id'];

        // Update the status to 'Approved'
        $stmt = $pdo->prepare('UPDATE bookings SET status = "Approved" WHERE id = :id');
        $stmt->execute(['id' => $id]);

        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>
