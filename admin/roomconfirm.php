<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');
$id = $_GET['id'];

// Start a transaction
mysqli_begin_transaction($conn);

try {
    // Confirm the room booking
    $update_sql = "UPDATE roombook SET stat = 'Confirm' WHERE id = ?";
    $stmt = $conn->prepare($update_sql);

    if ($stmt === false) {
        throw new Exception("Prepare failed for update_sql: " . $conn->error);
    }

    $stmt->bind_param("i", $id);

    if (!$stmt->execute()) {
        throw new Exception("Execute failed for update_sql: " . $stmt->error);
    }

    // Fetch booking details to store in the payment table
    $select_sql = "SELECT Name, RoomType, cin, cout, no_of_days, NoofRoom, Phone, price FROM roombook WHERE id = ?";
    $stmt = $conn->prepare($select_sql);

    if ($stmt === false) {
        throw new Exception("Prepare failed for select_sql: " . $conn->error);
    }

    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Bind the results to variables
    $stmt->bind_result($name, $roomType, $cin, $cout, $no_of_days, $noofRoom, $phone, $price);

    // Fetch the data
    if ($stmt->fetch()) {
        // Calculate the total price
        $total_price = $price * $no_of_days * $noofRoom;

        $booking = [
            'Name' => $name,
            'RoomType' => $roomType,
            'cin' => $cin,
            'cout' => $cout,
            'no_of_days' => $no_of_days,
            'NoofRoom' => $noofRoom,
            'Phone' => $phone,
            'price' => $total_price, // Use the calculated price
        ];
    } else {
        throw new Exception("No booking found with id: " . $id);
    }

    $stmt->close();

    // Store payment details in the payment table
    $insert_sql = "INSERT INTO payment (booking_id, Name, RoomType, check_in, check_out, no_of_days, no_of_rooms, Phone, amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insert_sql);

    if ($stmt === false) {
        throw new Exception("Prepare failed for insert_sql: " . $conn->error);
    }

    $stmt->bind_param(
        "issssiiid",
        $id,
        $booking['Name'],
        $booking['RoomType'],
        $booking['cin'],
        $booking['cout'],
        $booking['no_of_days'],
        $booking['NoofRoom'],
        $booking['Phone'],
        $booking['price']
    );

    if (!$stmt->execute()) {
        throw new Exception("Execute failed for insert_sql: " . $stmt->error);
    }

    // Commit transaction
    mysqli_commit($conn);
    echo "<script>alert('Room booking confirmed and payment details stored successfully!'); window.location.href='roombook.php';</script>";

} catch (Exception $e) {
    // Rollback the transaction in case of an error
    mysqli_rollback($conn);
    echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href='roombook.php';</script>";
}

// Close the statement and connection
$stmt->close();
mysqli_close($conn);
?>
