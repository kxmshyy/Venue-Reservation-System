<?php
include('db_connect.php'); // Include your database connection file

// Mark all notifications as read
if(isset($_POST['mark_as_read'])) {
    $update_query = "UPDATE notifications SET status = 'read' WHERE status = 'unread'";
    mysqli_query($conn, $update_query);
}

// Fetch notifications with status (unread/read)
$query = "SELECT * FROM notifications ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Notifications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        nav ul li a:hover {
            color: white;
            text-decoration: none;
        }

        .logo h1 {
            margin: 0;
            padding-left: 25px;
            font-weight: bold;
            font-size: 40px;
        }

        /* Style for unread notifications */
        .unread {
            background-color: darkgreen;
            color: white;
        }

        /* Style for read notifications */
        .read {
            background-color: white;
            color: darkgreen;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Notification</h1>
        </div>
        <nav>
            <ul>
                <li><a style="font-size: 17px;" href="Admin.php">Dashboard</a></li>
                <li><a style="font-size: 17px;" href="adminreservation.php">Calendar</a></li>
                <li><a style="font-size: 17px;" href="Pending.php">Pending Reservations</a></li>
                <li><a style="font-size: 17px;" href="Approved.php">Approved Reservations</a></li>
                <li><a style="font-size: 17px;" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <form style="margin-left: 20px; margin-top: 20px; " method="POST" action="">
        <button style=" border-color: #103510; border-width: 3px; border-radius: 50px; background-color: transparent; color: #103510; font-weight: bold; " type="submit" name="mark_as_read" class="btn btn-primary ">Mark all as read</button>
    </form>
    <div class="container">       
        <ul style="margin-left: -50px;" class="list-group mt-3">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <li class="list-group-item <?php echo ($row['status'] == 'unread') ? 'unread' : 'read'; ?>">
                    <?php echo $row['message']; ?>
                    <span class="badge bg-black"><?php echo $row['created_at']; ?></span>
                </li>
            <?php endwhile; ?>
        </ul>   
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            function fetchNotifications() {
                $.ajax({
                    url: 'fetch_notif.php',
                    method: 'GET',
                    success: function(data) {
                        $('.list-group').html(data);
                    }
                });
            }

            // Fetch notifications every 30 seconds
            setInterval(fetchNotifications, 30000);

            // Initial fetch
            fetchNotifications();
        });
    </script>
</body>
</html>
