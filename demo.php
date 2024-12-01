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
$servername = "localhost";
$username = "fridayin_hotel";
$password = "Friday@123";
$dbname = "fridayin_hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $country = $_POST['Country'];
    $cin = $_POST['cin'];
    $cout = $_POST['cout'];
    $room_type = $_POST['room_type'];
    $NoofRoom = $_POST['NoofRoom'];
    $meal = $_POST['Meal'];

    // Calculate the number of days between check-in and check-out
    $checkin_date = new DateTime($cin);
    $checkout_date = new DateTime($cout);
    $interval = $checkin_date->diff($checkout_date);
    $no_of_days = $interval->days;

    // Fetch room price from rooms table based on room_type
    $price_query = "SELECT price FROM rooms WHERE room_type = '$room_type'";
    $result = $conn->query($price_query);

    if ($result->num_rows > 0) {
        // Fetch the price
        $row = $result->fetch_assoc();
        $price = $row['price'];

        // Insert into roombook table
        $sql = "INSERT INTO roombook (name, email, phone, country, cin, cout, Roomtype, NoofRoom, meal, price, no_of_days) 
                VALUES ('$name', '$email', '$phone', '$country', '$cin', '$cout', '$room_type', '$NoofRoom', '$meal', '$price', '$no_of_days')";

        if ($conn->query($sql) === TRUE) {
              echo '<script language="javascript">';
    echo 'alert("Registered successfully!"); location.href="booking_successful.php?email=' . urlencode($email) . '"';
    echo '</script>';

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: No such room type found";
    }

    $conn->close();
}
?>
