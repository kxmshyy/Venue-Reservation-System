<?php
session_start();
include 'db_connect.php';

// Fetch taken dates
$sql = "SELECT date FROM available_dates WHERE status = 'taken'";
$result = $conn->query($sql);

$takenDates = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $takenDates[] = $row['date'];
    }
} else {
    echo "Error fetching taken dates: " . $conn->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $guests = $_POST['guests'];
    $venue = $_POST['venue'];
    $selected_date = date('Y-m-d', strtotime($_POST['selected_date']));

    $sql = "INSERT INTO bookings (name, email, phone, guests, venue, selected_date) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssiss", $name, $email, $phone, $guests, $venue, $selected_date);

    if ($stmt->execute()) {
        // Insert notification
        $insert_notification = "INSERT INTO notifications (message) VALUES ('New reservation made by $name')";
        mysqli_query($conn, $insert_notification);

        // Redirect to confirmation page
        $booking_id = $stmt->insert_id;
        header("Location: confirmation.php?booking_id=" . $booking_id);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <style>
        /* Your existing styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: -50px;
            background-color: #103510;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .logo img {
            width: 200px;
            height: 80px;
            border-radius: 10px;
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

        .contents {
            padding-top: 120px;
            display: flex;
            justify-content: center;
        }

        .containers {
            width: 1000px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        #calendar-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 20px;
        }

        #calendar {
            width: 400px;
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #carousel {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        #prevMonth,
        #nextMonth {
            background-color: #537f47;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        #prevMonth:hover,
        #nextMonth:hover {
            background-color: #89cd76;
        }

        #monthYearDisplay {
            font-size: 18px;
            font-weight: bold;
        }

        #calendarBody {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .day {
            text-align: center;
            border: 1px solid #ccc;
            padding: 10px;
            box-sizing: border-box;
            cursor: pointer;
        }

        .day.selected {
            background-color: #58bb39; /* Selected dates */
            color: #fff;
        }

        .day.taken {
            background-color: #ffcccc; /* Taken dates */
        }

        .day.unavailable {
            background-color: #e0e0e0; /* Past dates */
            cursor: not-allowed;
        }

        .day.available:hover {
            background-color: #b2faa7; /* Available dates */
        }

        #bookingForm {
            display: flex;
            flex-direction: column;
            margin-left: 20px;
        }

        #bookingForm label {
            display: block;
            margin-bottom: 5px;
        }

        #bookingForm input[type="text"],
        #bookingForm input[type="email"],
        #bookingForm input[type="tel"],
        #bookingForm input[type="number"],
        #bookingForm select {
            width: 100%;
            padding: 6px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 13px;
        }

        #bookingForm input[type="submit"] {
            width: 100%;
            background-color: #133b0b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
        }

        #bookingForm input[type="submit"]:hover {
            background-color: #317e1f;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="sublogoss.png" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="home.php#about-section">About Us</a></li>
                <li><a href="home.php#gallery-section">Gallery</a></li>
                <li><a href="home.php#contact-section">Contact Us</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="contents">
        <div class="containers">
            <h2>Booking Form</h2>
            <div id="calendar-container">
                <div id="calendar">
                    <div id="carousel">
                        <button id="prevMonth">Previous Month</button>
                        <div id="monthYearDisplay"></div>
                        <button id="nextMonth">Next Month</button>
                    </div>
                    <div id="calendarBody"></div>
                </div>
                <!-- Booking form -->
                <div id="bookingForm">
                    <form id="reservationForm" action="booking.php" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" required>
                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" required>
                        <label for="guests">Number of Guests:</label>
                        <input type="number" id="guests" name="guests" required>
                        <label for="venue">Choose your Pavilion:</label>
                        <select id="venue" name="venue">
                            <option value="The Pavilion - Pampanga">The Pavilion - Pampanga</option>
                            <option value="The Pavilion - Bataan">The Pavilion - Bataan</option>
                            <option value="The Pavilion - Mabalacat">The Pavilion - Mabalacat</option>
                            <option value="The Pavilion - Subic">The Pavilion - Subic</option>
                            <option value="The Pavilion - Timog Residences">The Pavilion - Timog Residences</option>
                            <option value="The Pavilion - Mansfield Residences">The Pavilion - Mansfield Residences</option>
                        </select>
                        <input type="hidden" id="selected_date" name="selected_date">
                        <input type="submit" value="CONTINUE">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarBody = document.getElementById('calendarBody');
            const monthYearDisplay = document.getElementById('monthYearDisplay');
            const prevMonthButton = document.getElementById('prevMonth');
            const nextMonthButton = document.getElementById('nextMonth');

            const takenDates = <?php echo json_encode($takenDates); ?>;

            function isDateTaken(year, month, day) {
                const dateToCheck = new Date(Date.UTC(year, month, day));
                const dateStringToCheck = dateToCheck.toISOString().split('T')[0];

                return takenDates.includes(dateStringToCheck);
            }

            function isDatePast(year, month, day) {
                const today = new Date();
                const dateToCheck = new Date(year, month, day);

                return dateToCheck < today.setHours(0, 0, 0, 0);
            }

            function renderCalendar(year, month) {
                calendarBody.innerHTML = '';
                const date = new Date(year, month);

                monthYearDisplay.textContent = date.toLocaleString('en-us', { month: 'long', year: 'numeric' });

                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const firstDay = new Date(year, month, 1).getDay();

                for (let i = 0; i < firstDay; i++) {
                    const placeholder = document.createElement('div');
                    placeholder.className = 'day';
                    calendarBody.appendChild(placeholder);
                }

                for (let day = 1; day <= daysInMonth; day++) {
                    const dayElement = document.createElement('div');
                    dayElement.className = 'day';
                    dayElement.textContent = day;

                    if (isDatePast(year, month, day) || isDateTaken(year, month, day)) {
                        dayElement.classList.add('taken');
                        dayElement.classList.add('unavailable');
                    } else {
                        dayElement.classList.add('available');
                        dayElement.addEventListener('click', function() {
                            document.querySelectorAll('.day').forEach(function(day) {
                                day.classList.remove('selected');
                            });

                            dayElement.classList.add('selected');
                            document.getElementById('selected_date').value = `${year}-${month + 1}-${day}`;
                        });
                    }

                    calendarBody.appendChild(dayElement);
                }
            }

            const currentDate = new Date();
            renderCalendar(currentDate.getFullYear(), currentDate.getMonth());

            prevMonthButton.addEventListener('click', function() {
                currentDate.setMonth(currentDate.getMonth() - 1);
                renderCalendar(currentDate.getFullYear(), currentDate.getMonth());
            });

            nextMonthButton.addEventListener('click', function() {
                currentDate.setMonth(currentDate.getMonth() + 1);
                renderCalendar(currentDate.getFullYear(), currentDate.getMonth());
            });

            const bookingForm = document.getElementById('reservationForm');

            bookingForm.addEventListener('submit', function(event) {
                const selectedDateElement = document.querySelector('.day.selected');
                if (!selectedDateElement) {
                    alert("Please select a date.");
                    event.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
