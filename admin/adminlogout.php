<?php
// Start the session
session_start();

// Destroy the session to log out the admin
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Set fullscreen background image */
        body {
            height: 100vh;
            background-image: url('https://cf.bstatic.com/xdata/images/hotel/max1024x768/561696278.jpg?k=0f7198cdb53d2b9212bff6a94df244500f22fbe2a14bb35944664f50d8415c65&o=&hp=1'); /* Replace with any online wallpaper URL */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
        }

        /* Message box styling */
        .message-box {
            background: rgba(0, 0, 0, 0.6); /* Transparent black background */
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .message-box h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .message-box p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .message-box a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .message-box a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>Logged Out Successfully</h1>
        <p>You have been logged out of the admin panel.</p>
        <a href="admin.php">Go to Login</a> <!-- Redirects to login page -->
    </div>
</body>
</html>
