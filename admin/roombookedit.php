<?php

$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Fetch room data
$id = $_GET['id'];

$sql = "SELECT Name, Email, Country, Phone, cin, cout, no_of_days, stat, RoomType, NoofRoom, Meal, price FROM roombook WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

// Bind the result columns to variables
$stmt->bind_result($Name, $Email, $Country, $Phone, $cin, $cout, $noofday, $stat, $RoomType, $NoofRoom, $Meal, $price);
$stmt->fetch(); // Fetch the data into the bound variables
$stmt->close();

if (isset($_POST['guestdetailedit'])) {
    $EditName = $_POST['Name'];
    $EditEmail = $_POST['Email'];
    $EditCountry = $_POST['Country'];
    $EditPhone = $_POST['Phone'];
    $EditRoomType = $_POST['RoomType'];
    $EditNoofRoom = $_POST['NoofRoom'];
    $EditMeal = $_POST['Meal'];
    $Editcin = $_POST['cin'];
    $Editcout = $_POST['cout'];

    // Validation for empty fields
    if (empty($EditName) || empty($EditEmail)) {
        echo "<script>alert('Fill in the proper details');</script>";
    } else {
        // Retrieve price for the selected room type
        $stmt = $conn->prepare("SELECT price FROM rooms WHERE room_type = ?");
        $stmt->bind_param("s", $EditRoomType);
        $stmt->execute();
        $stmt->bind_result($price); // Bind the result to the $price variable
        $stmt->fetch();
        $stmt->close();

        if (empty($price)) {
            echo "<script>alert('Price not found for selected room type');</script>";
            exit;
        }

        // Update query using prepared statements
        $query = "UPDATE roombook SET 
            Name = ?, 
            Email = ?, 
            Country = ?, 
            Phone = ?, 
            RoomType = ?, 
            NoofRoom = ?, 
            Meal = ?, 
            cin = ?, 
            price = ?, 
            stat = 'NotConfirm', 
            cout = ?, 
            no_of_days = DATEDIFF(?, ?) 
            WHERE id = ?";

        $stmt = $conn->prepare($query);

        if (!$stmt) {
            echo "<script>alert('Error preparing statement');</script>";
            echo "Error preparing statement: " . $conn->error;
            exit;
        }

        $stmt->bind_param("ssssssssssssi", $EditName, $EditEmail, $EditCountry, $EditPhone, $EditRoomType, $EditNoofRoom, $EditMeal, $Editcin, $price, $Editcout, $Editcout, $Editcin, $id);

        if (!$stmt->execute()) {
            echo "<script>alert('Error updating record: " . addslashes($stmt->error) . "');</script>";
        } else {
            echo "<script>alert('Reservation updated successfully!'); window.location.href = 'roombook.php';</script>";
        }

        $stmt->close();
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./css/roombook.css">
    <style>
        #editpanel{
            position: fixed;
            z-index: 1000;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            background-color: #00000079;
        }
        #editpanel .guestdetailpanelform{
            height: 620px;
            width: 1170px;
            background-color: #ccdff4;
            border-radius: 10px;
            position: relative;
            top: 20px;
            animation: guestinfoform .3s ease;
        }
    </style>
    <title>Edit Reservation</title>
</head>
<body>
    <div id="editpanel">
        <form method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>EDIT RESERVATION</h3>
                <a href="./roombook.php"><i class="fa-solid fa-circle-xmark"></i></a>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest information</h4>
                    <input type="text" name="Name" placeholder="Enter Full name" value="<?php echo $Name; ?>">
                    <input type="email" name="Email" placeholder="Enter Email" value="<?php echo $Email; ?>">
                    <input type="text" name="Country" placeholder="Enter Country" value="<?php echo $Country; ?>">
                    <input type="text" name="Phone" placeholder="Enter Phone number" value="<?php echo $Phone; ?>">
                </div>
                <div class="line"></div>
                <div class="reservationinfo">
                    <h4>Reservation information</h4>
                    <select name="RoomType" class="selectinput" required>
                        <option value="" selected>Bedding Type</option>
                        <option value="Couple">Couple</option>
                        <option value="Family">Family</option>
                    </select>
                    <select name="NoofRoom" class="selectinput">
                        <option value selected>No of Room</option>
                        <option value="1">1</option>
                    </select>
                    <select name="Meal" class="selectinput">
                        <option value selected>Meal</option>
                        <option value="Room only">Room only</option>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Half Board">Half Board</option>
                        <option value="Full Board">Full Board</option>
                    </select>
                    <div class="datesection">
                        <span>
                            <label for="cin"> Check-In</label>
                            <input name="cin" type="date" value="<?php echo $cin; ?>">
                        </span>
                        <span>
                            <label for="cin"> Check-Out</label>
                            <input name="cout" type="date" value="<?php echo $cout; ?>">
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailedit">Edit</button>
            </div>
        </form>
    </div>
</body>
</html>
