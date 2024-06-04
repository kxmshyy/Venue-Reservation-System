<?php
include 'db_connect.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];
    $role = $_POST['role']; // New field to determine if it's admin or user registration

    if ($role == 'admin') {
        // Admin registration process
        $sql = "INSERT INTO admins (admin_name, admin_password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name, $password);
    } else {
        // User registration process
        $sql = "INSERT INTO users (name, password, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $password, $email);
    }

    if ($stmt->execute() === TRUE) {
        $message = "Registration successful.";
    } else {
        $message = "Error: " . $stmt->error;
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
    <title>The Pavilion - The Hausland Pampanga</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 3.2%;
            align-items: center;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: -50%;
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
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .contentss {
            padding-top: 100px;
        }

        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 60px;
            position: relative;
        }

        .main-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('homeepage.jpg') no-repeat center center/cover;
            filter: brightness(60%);
            z-index: -1;
        }

        .welcome-message {
            position: absolute;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
        }

        .welcome-message h2 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            width: 100%;
            font-size: 40px;
            margin-bottom: 20px;
        }

        .welcome-message p {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .book-now {
            background-color: #15400e;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: #fff;
            padding: 15px 30px;
            font-size: 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .book-now span {
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #fffb00;
            font-size: 13px;
        }

        .book-now:hover {
            background-color: #337a26;
        }

        .form-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            align-items: center;
            margin-bottom: 5px;
            width: 100%;
        }

        .form-container input {
            width: 94%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #15400e;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
            margin-left: 0px;
        }

        .form-container button:hover {
            background-color: #337a26;
        }

        .form-container .form-link {
            text-align: center;
            margin-top: 10px;
        }

        .form-container .form-link a {
            color: #15400e;
            text-decoration: none;
        }

        .form-container .form-link a:hover {
            text-decoration: underline;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            color: green;
        }

        .error-message {
            text-align: center;
            margin-top: 20px;
            color: red;
        }
    </style>
</head>
<body style="background: url('homeepage.jpg') fixed no-repeat center center/cover; ">
    <header>
        <div class="logo">
            <img src="sublogoss.png" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about-section">About Us</a></li>
                <li><a href="index.php#gallery-section">Gallery</a></li>
                <li><a href="index.php#contact-section">Contact Us</a></li>
                <li><a href="login.php">Login/Register</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="form-container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Register</button>
            <div class="form-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
        <?php if (!empty($message)) { ?>
            <div class="<?php echo strpos($message, 'successful') !== false ? 'message' : 'error-message'; ?>">
                <?php echo $message; ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>
