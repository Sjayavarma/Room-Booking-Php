<?php

$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <!-- loading bar -->
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="css/flash.css">
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Fridayinn - Admin</title>
</head>

<body>
    <!-- mobile view -->
    <div id="mobileview">
        <h5>Admin panel doesn't show in mobile view</h4>
    </div>
  
    <!-- nav bar -->
    <nav class="uppernav">
        <div class="logo">
            <img class="bluebirdlogo" src="../img/friday inn 2.png" alt="logo">
            
        </div>
        <div class="logout">
        <a href="adminlogout.php"><button class="btn btn-primary">Logout</button></a>
        </div>
    </nav>
    <nav class="sidenav">
        <ul>
            <li class="pagebtn active"><img src="../img/icon/dashboard.png">&nbsp&nbsp&nbsp Dashboard</li>
            <li class="pagebtn"><img src="../img/icon/bed.png">&nbsp&nbsp&nbsp Room Booking</li>
            <li class="pagebtn"><img src="../img/icon/wallet.png">&nbsp&nbsp&nbsp Payment</li>            
            <li class="pagebtn"><img src="../img/icon/bedroom.png">&nbsp&nbsp&nbsp Rooms</li>
            <li class="pagebtn"><img src="../img/icon/staff.png">&nbsp&nbsp&nbsp Staff</li>
        </ul>
    </nav>

    <!-- main section -->
    <div class="mainscreen">
        <iframe class="frames frame1 active" src="./dashboard.php" frameborder="0"></iframe>
        <iframe class="frames frame2" src="./roombook.php" frameborder="0"></iframe>
        <iframe class="frames frame3" src="./payment.php" frameborder="0"></iframe>
        <iframe class="frames frame4" src="./room.php" frameborder="0"></iframe>
        <iframe class="frames frame4" src="./staff.php" frameborder="0"></iframe>
    </div>
</body>
<style>
    /* admin.css */

/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Header */
header {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}

header .logo img {
    height: 40px;
}

header .user-menu a {
    color: #fff;
    margin-left: 15px;
    text-decoration: none;
}

/* Sidebar */
aside {
    background-color: #2c3e50;
    color: #fff;
    width: 250px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    padding: 20px;
}

aside nav ul {
    list-style: none;
}

aside nav ul li {
    margin-bottom: 15px;
}

aside nav ul li a {
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: center;
}

aside nav ul li a i {
    margin-right: 10px;
}

/* Main Content */
main {
    margin-left: 250px;
    padding: 20px;
}

main h1 {
    margin-bottom: 20px;
}

/* Footer */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: calc(100% - 250px);
    margin-left: 250px;
}

</style>
<script src="./javascript/script.js"></script>

</html>
