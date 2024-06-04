<?php include("get_pending_reservations.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Approved Reservations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Approved Reservations</h1>
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

    
    <h1 class="text-center text-white bg-success col-md-12 py-2">APPROVED LIST</h1>

    <table style="width: 84%; text-align: center; margin-left: 8%; " class="table table-bordered col-md-12">
        <thead>
            <tr>
                <th style="text-align: center;" scope="col">ID</th>
                <th style="text-align: center;" scope="col">Name</th>
                <th style="text-align: center;" scope="col">Email</th>
                <th style="text-align: center;" scope="col">Phone</th>
                <th style="text-align: center;" scope="col">Guests</th>
                <th style="text-align: center;" scope="col">Venue</th>
                <th style="text-align: center;" scope="col">Selected Date</th>
                <th style="text-align: center;" scope="col">Status</th>
            </tr>
        </thead>
        <?php 
        $query = "SELECT * FROM bookings WHERE status = 'approved' ORDER BY id ASC";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($result)) { ?>
            <tbody>
                <tr>
                    <th style="text-align: center;" scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['guests']; ?></td>
                    <td><?php echo $row['venue']; ?></td>
                    <td><?php echo $row['selected_date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</body>
</html>
