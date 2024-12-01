<?php
session_start();
$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');

// Use prepared statements for secure database operations
if (isset($_POST['addroom'])) {
    $typeofroom = $_POST['troom'];
    $typeofbed = $_POST['bed'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO room (type, bedding) VALUES (?, ?)");
    $stmt->bind_param("ss", $typeofroom, $typeofbed);

    if ($stmt->execute()) {
        header("Location: room.php");
        exit(); // Ensure no further code is executed
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}


// Fetch rooms
$sql = "SELECT * FROM room";
$re = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fridayinn - Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/room.css">
</head>

<body>
    <div class="addroomsection">
        <form action="" method="POST">
            <div class="mb-3">
                   <br>
                <label for="troom" class="form-label">Type of Room:</label>
                <select name="troom" id="troom" class="form-control">
                  
                    <option value="">Select Room Type</option>
                    <option value="couple">Couple Room</option>
                    <option value="Family">Family Room</option>
                    <option value="Single">Single Room</option>
                </select>
            </div>

            <div class="mb-3">
                <br>
                    <label for="bed" class="form-label">Type of Bed:</label>
                <select name="bed" id="bed" class="form-control">
                    <option value="">Select Bed Type</option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success" name="addroom">Add Room</button>
        </form>
    </div>

    <div class="room">
        <?php
        while ($row = mysqli_fetch_assoc($re)) {
            $id = $row['type'];
            $class = '';
            switch ($id) {
                case 'Family':
                    $class = 'roomboxsuperior';
                    break;
                case 'couple':
                    $class = 'roomboxdelux';
                    break;
                case 'Single':
                    $class = 'roomboxguest';
                    break;
                default:
                    $class = 'roomboxsingle';
                    break;
            }
            echo "<div class='roombox $class'>
                    <div class='text-center'>
                        <i class='fa-solid fa-bed fa-4x mb-2'></i>
                        <h3>" . htmlspecialchars($row['type']) . "</h3>
                        <div class='mb-1'>" . htmlspecialchars($row['bedding']) . "</div>
                        <a href='roomdelete.php?id=" . urlencode($row['id']) . "'><button class='btn btn-danger'>Delete</button></a>
                    </div>
                </div>";
        }
        ?>
    </div>
    <style>
        /* room.css */
 

.room {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
}

.roombox {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    width: 250px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.roomboxsuperior {
    background-color: #f0f8ff;
}

.roomboxdelux {
    background-color: #ffe4e1;
}

.roomboxguest {
    background-color: #e6e6fa;
}

.roomboxsingle {
    background-color: #f5f5f5;
}

    </style>
</body>

</html>
