<?php
include('db_connect.php'); // Include your database connection file

// Fetch notifications
$query = "SELECT * FROM notifications ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)): ?>
    <!-- Apply appropriate CSS class based on notification status -->
    <li class="list-group-item <?php echo ($row['status'] == 'unread') ? 'unread' : 'read'; ?>">
        <?php echo $row['message']; ?>
        <span class="badge bg-black"><?php echo $row['created_at']; ?></span>
    </li>
<?php endwhile; ?>
