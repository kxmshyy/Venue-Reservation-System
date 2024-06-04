<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #ddd;
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            width: 200px;
            height: 100vh;
            background-color: #234F1E;
            color: white;
            padding: 20px;
            box-sizing: border-box;
            position: fixed;
            transition: transform 0.3s ease;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
            font-size: 21px;
            display: flex;
            align-items: center;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        hr {
            border: none;
            height: 1px;
            background-color: #347d2d;
        }

        .main {
            flex-grow: 1;
            padding: 20px;
            box-sizing: border-box;
            margin-left: 200px;
            transition: margin-left 0.3s ease;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        header .user {
            font-size: 18px;
            color: #234F1E;
        }

        .account-button {
            background-color: #234F1E;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            position: relative;
        }

        .account-dropdown {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1;
        }

        .account-dropdown a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #234F1E;
            border-bottom: 1px solid #ddd;
        }

        .account-dropdown a:hover {
            background-color: #f0f0f0;
        }

        .account-dropdown a:last-child {
            border-bottom: none;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .card {
            border: 1px solid #234F1E;
            border-radius: 50px;
            padding: 40px;
            text-align: center;
            width: 350px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
            text-decoration: none;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
        }

        .card h3 {
            font-size: 39px;
            text-align: center;
            color: #234F1E;
            text-decoration: none;
        }

        .card p {
            font-size: 86px;
            margin: 0;
            color: #347d2d;
            text-decoration: none;
        }

        .dashboard-title {
            font-size: 44px;
            margin: 10px 0;
            font-family: Arial Black;
            color: #234F1E;
        }

        header hr {
            width: 1260%;
            border: none;
            height: 2px;
            background-color: #347d2d;
        }

        .hamburger {
            display: none;
            font-size: 30px;
            cursor: pointer;
            margin-left: 100%;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                margin-top: 0;
                height: 100%;
            }

            .main {
                margin-left: 0;
            }

            .hamburger {
                display: block;
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .content {
                flex-direction: column;
                align-items: center;
            }
        }

        .badge {
    background-color: #013220;
    color: white;
    padding: 0.2em 0.6em;
    font-size: 0.55em;
    border-radius:
    0.100em;
}

    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <ul>
            <li><i class="fas fa-tachometer-alt"></i><a style="text-decoration: none;" href="Admin.php">Dashboard</a></li>
            <hr>
            <li><i class="fas fa-calendar-alt"></i><a style="text-decoration: none;" href="adminreservation.php">Calendar of Reservations</a></li>
            <hr>
            <li>
    <i class="fas fa-inbox"></i>
    <a style="text-decoration: none;" href="notif.php">Notification</a>
    <span id="notificationCount" class="badge bg-primary" style="margin-left: 10px;"></span>
</li>

            <hr>
        </ul>
    </div>
    <div class="main">
        <header>
            <div class="hamburger" id="hamburger">&#9776;</div>
            <div class="user-dropdown">
                <div style="padding-left: 1125%;">
                <button class="account-button">Admin</button>
                </div>
                <hr>
                <div class="account-dropdown">
                    <a href="#account">Logged in as: Admin</a>
                    <a href="logout.php">Sign Out</a>
                </div>
            </div>
        </header>
        <div class="dashboard-title">Admin Dashboard</div>
        <div class="content">
            
            <a href="pending.php" class="card">
                <h3>Pending Reservations</h3>
                
            </a>
            <a href="approved.php" class="card">
                <h3>Approved Reservations</h3>
                
            </a>
            
        </div>
    </div>
    <script>
    document.querySelector('.account-button').addEventListener('click', function() {
        var dropdown = document.querySelector('.account-dropdown');
        dropdown.style.display = dropdown.style.display === 'none' || dropdown.style.display === '' ? 'block' : 'none';
    });

    window.onclick = function(event) {
        if (!event.target.matches('.account-button')) {
            var dropdowns = document.getElementsByClassName('account-dropdown');
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.style.display === 'block') {
                    openDropdown.style.display = 'none';
                }
            }
        }
    };

    document.getElementById('hamburger').addEventListener('click', function() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('show');
    });

    function loadNotificationCount() {
    fetch('get_unread.php')
        .then(response => response.json())
        .then(data => {
            const notificationCount = data.unread_count;
            const notificationBadge = document.getElementById('notificationCount');
            if (notificationCount === 0) {
                notificationBadge.style.display = 'none';
            } else {
                notificationBadge.style.display = 'inline-block';
                notificationBadge.textContent = notificationCount;
            }
        })
        .catch(error => console.error('Error fetching notification count:', error));
}

    function loadReservationCount() {
        fetch('get_total_reservations.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('reservationCount').textContent = data.count;
            })
            .catch(error => console.error('Error fetching reservation count:', error));
    }

    function loadPendingCount() {
        fetch('get_pending_reservations.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('pendingCount').textContent = data.count;
            })
            .catch(error => console.error('Error fetching pending reservations:', error));
    }

    function loadApprovedCount() {
        fetch('get_approved_reservations.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('approvedCount').textContent = data.count;
            })
            .catch(error => console.error('Error fetching approved reservations:', error));
    }

    function loadCancelledCount() {
        fetch('get_cancelled_reservations.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('cancelledCount').textContent = data.count;
            })
            .catch(error => console.error('Error fetching cancelled reservations:', error));
    }

    window.onload = function() {
        loadNotificationCount();
        loadReservationCount();
        loadPendingCount();
        loadApprovedCount();
        loadCancelledCount();

        // Optionally refresh the notification count every 30 seconds
        setInterval(loadNotificationCount, 30000);
    };
</script>

</body>
</html>
