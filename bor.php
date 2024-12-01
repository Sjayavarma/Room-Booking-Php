<section>
    <div class="container">
        <div class="booking-box">
            <div class="head-box">
                <h6>Rooms &amp; Suites</h6>
                <h4>Hotel Booking</h4>
            </div>
            <div class="booking-inner clearfix">
                <form action="" method="POST" class="form1 clearfix">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" name="Name" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" name="Email" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label>Phone</label>
                            <input type="text" name="Phone" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label>Location</label>
                            <input type="text" name="Country" placeholder="" required>
                        </div>
                        <div class="head-box">
                            <h4>RESERVATION</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="input1_wrapper">
                                <label>Check in</label>
                                <div class="input1_inner">
                                    <input name="cin" type="date" class="form-control" placeholder="Check in" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input1_wrapper">
                                <label>Check out</label>
                                <div class="input1_inner">
                                    <input name="cout" type="date" class="form-control" placeholder="Check out" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="select1_wrapper">
                                <label>Bedding</label>
                                <div class="select1_inner">
                                    <select name="room_type" class="select2" style="width: 100%" required>
                                        <option value="" selected>Bedding Type</option>
                                        <option value="Couple">Couple</option>
                                        <option value="Family">Family</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="select1_wrapper">
                                <label>No of Rooms</label>
                                <div class="select1_inner">
                                    <select name="NoofRoom" class="select2" style="width: 100%" required>
                                        <option value="" selected>No of Rooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Meal</label>
                            <div class="select1_wrapper">
                                <div class="select1_inner">
                                    <select name="Meal" class="select2" style="width: 100%" required>
                                        <option value="" selected>Meal</option>
                                        <option value="Room only">Room only</option>
                                        <option value="Breakfast">Breakfast</option>
                                        <option value="Half Board">Half Board</option>
                                        <option value="Full Board">Full Board</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="guestdetailsubmit" class="btn-form1-submit mt-15">Check Availability</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
  
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["guestdetailsubmit"])) {
    include 'config.php';

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Country = $_POST['Country'];
    $Phone = $_POST['Phone'];
    $RoomType = $_POST['room_type'];
    $NoofRoom = $_POST['NoofRoom'];
    $Meal = $_POST['Meal'];
    $cin = $_POST['cin'];
    $cout = $_POST['cout'];

    // Calculate the number of days between check-in and check-out
    $date1 = new DateTime($cin);
    $date2 = new DateTime($cout);
    $interval = $date1->diff($date2);
    $nodays = $interval->days;

    // Retrieve price for the selected room type
    $stmt = $conn->prepare("SELECT price FROM rooms WHERE room_type =?");
    $stmt->bind_param("s", $RoomType);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $price = $row['price'];
    } else {
        echo "<p>Price not found for selected room type</p>";
       
    }

    // Insert booking details into the database
    $sta = "NotConfirm";
    $sql = "INSERT INTO roombook (Name, Email, Country, Phone, RoomType, price, NoofRoom, Meal, cin, cout, stat, nodays) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo "<p>Error preparing SQL statement: ". htmlspecialchars($conn->error). "</p>";
       
    }
    $stmt->bind_param("sssssiissssi", $Name, $Email, $Country, $Phone, $RoomType, $price, $NoofRoom, $Meal, $cin, $cout, $sta, $nodays);
    if (!$stmt->execute()) {
        echo "<p>Error executing SQL statement: ". htmlspecialchars($stmt->error). "</p>";
  
    }
     echo '<script language="javascript">';
echo 'alert("Registrato correttamente!"); location.href="booking successful.php?email=' . urlencode($Email) . '"';
echo '</script>';

  
}
?>

 


 
