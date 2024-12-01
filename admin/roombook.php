<?php
session_start();

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./css/roombook.css">
    <title>FridayInn - Admin</title>
</head>

<body>
    <!-- guestdetailpanel -->

    <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="adduserclose()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Guest information</h4>
                    <input type="text" name="Name" placeholder="Enter Full name" required>
                    <input type="email" name="Email" placeholder="Enter Email" required>
                    <input type="text" name="Country" placeholder="Enter Country" required>
                    <input type="text" name="Phone" placeholder="Enter Phoneno" required>
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Reservation information</h4>
                    <select name="RoomType" class="selectinput">
                        <option value="" selected>Type Of Room</option>
                        <option value="Couple">Couple ROOM</option>
                        <option value="Family">Family ROOM</option>
                        <option value="Friend">Friend HOUSE</option>
                    </select>
                    
                    <select name="NoofRoom" class="selectinput">
                        <option value="" selected>No of Room</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option> 
                    </select>
                    <select name="Meal" class="selectinput">
                        <option value="" selected>Meal</option>
                        <option value="Room only">Room only</option>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Half Board">Half Board</option>
                        <option value="Full Board">Full Board</option>
                    </select>
                    <div class="datesection">
                        <span>
                            <label for="cin"> Check-In</label>
                            <input name="cin" type="date">
                        </span>
                        <span>
                            <label for="cout"> Check-Out</label>
                            <input name="cout" type="date">
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </form>

        <!-- ==== room book php ====-->
        <?php
        if (isset($_POST['guestdetailsubmit'])) {
            // Fetch form data
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Country = $_POST['Country'];
            $Phone = $_POST['Phone'];
            $RoomType = $_POST['RoomType'];
            $NoofRoom = $_POST['NoofRoom'];
            $Meal = $_POST['Meal'];
            $cin = $_POST['cin'];
            $cout = $_POST['cout'];

            // Calculate the number of days between check-in and check-out
            $date1 = new DateTime($cin);
            $date2 = new DateTime($cout);
            $interval = $date1->diff($date2);
            $nodays = $interval->days;

            // Validation for empty fields
            if (empty($Name) || empty($Email) || empty($Country) || empty($cin) || empty($cout)) {
                echo "<script>
                    swal({
                        title: 'Please fill in all the required details',
                        icon: 'error',
                    });
                </script>";
            } else {
                // Retrieve price for the selected room type
                $stmt = $conn->prepare("SELECT price FROM rooms WHERE room_type = ?");
                if ($stmt) {
                    $stmt->bind_param("s", $RoomType);
                    $stmt->execute();
                    $stmt->bind_result($price);
                    $stmt->fetch();
                    $stmt->close();

                    if (empty($price)) {
                        echo "<script>
                            swal({
                                title: 'Price not found for the selected room type',
                                icon: 'error',
                            });
                        </script>";
                        exit;
                    }
                } else {
                    echo "<script>
                        swal({
                            title: 'Failed to prepare statement (Room Type)',
                            text: '" . addslashes($conn->error) . "',
                            icon: 'error',
                        });
                    </script>";
                    exit;
                }

                $sta = "NotConfirm";

                // SQL query to insert data into the roombook table
                $sql = "INSERT INTO roombook (Name, Email, Country, Phone, RoomType, NoofRoom, Meal, cin, cout, stat, no_of_days, price) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                if ($stmt) {
                    $stmt->bind_param("ssssssssssis", $Name, $Email, $Country, $Phone, $RoomType, $NoofRoom, $Meal, $cin, $cout, $sta, $nodays, $price);
                    $result = $stmt->execute();

                    if ($result) {
                        echo "<script>
                            swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
                    } else {
                        // Output SQL error for debugging
                        $error_message = $stmt->error;
                        echo "<script>
                            swal({
                                title: 'Something went wrong',
                                text: '" . addslashes($error_message) . "',
                                icon: 'error',
                            });
                        </script>";
                    }

                    $stmt->close();
                } else {
                    echo "<script>
                        swal({
                            title: 'Failed to prepare statement (Insert)',
                            text: '" . addslashes($conn->error) . "',
                            icon: 'error',
                        });
                    </script>";
                }
            }
        }
        ?>

 


    </div>

    
    <!-- ================================================= -->
    <div class="searchsection">
        <input type="text" name="search_bar" id="search_bar" placeholder="search..." onkeyup="searchFun()">
        <button class="adduser" id="adduser" onclick="adduseropen()"><i class="fa-solid fa-bookmark"></i> Add</button>
        <form action="./exportdata.php" method="post">
            <button class="exportexcel" id="exportexcel" name="exportexcel" type="submit"><i class="fa-solid fa-file-arrow-down"></i></button>
        </form>
    </div>

    <div class="roombooktable" class="table-responsive-xl">
        <?php
            $roombooktablesql = "SELECT * FROM roombook";
            $roombookresult = mysqli_query($conn, $roombooktablesql);
            $nums = mysqli_num_rows($roombookresult);
        ?>
        <table class="table table-bordered" id="table-data">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Country</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Type of Room</th>
                  
                    <th scope="col">No of Room</th>
                    <th scope="col">Meal</th>
                    <th scope="col">Check-In</th>
                    <th scope="col">Check-Out</th>
                    <th scope="col">No of Day</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="action">Action</th>
                    <!-- <th>Delete</th> -->
                </tr>
            </thead>

            <tbody>
            <?php
            while ($res = mysqli_fetch_array($roombookresult)) {
            ?>
                <tr>
                    <td><?php echo $res['id'] ?></td>
                    <td><?php echo $res['Name'] ?></td>
                    <td><?php echo $res['Email'] ?></td>
                    <td><?php echo $res['Country'] ?></td>
                    <td><?php echo $res['Phone'] ?></td>
                    <td><?php echo $res['RoomType'] ?></td>
                     
                    <td><?php echo $res['NoofRoom'] ?></td>
                    <td><?php echo $res['Meal'] ?></td>
                    <td><?php echo $res['cin'] ?></td>
                    <td><?php echo $res['cout'] ?></td>
                    <td><?php echo $res['no_of_days'] ?></td>
                    <td><?php echo $res['stat'] ?></td>
                    <td class="action">
                        <?php
                            if($res['stat'] == "Confirm")
                            {
                                echo " ";
                            }
                            else
                            {
                                echo "<a href='roomconfirm.php?id=". $res['id'] ."'><button class='btn btn-success'>Confirm</button></a>";
                            }
                        ?>
                        <a href="roombookedit.php?id=<?php echo $res['id'] ?>"><button class="btn btn-primary">Edit</button></a>

 <a href="roombookdelete.php?id=<?php echo htmlspecialchars($res['id']); ?>" onclick="return confirm('Are you sure you want to delete this record?');">
    <button class="btn btn-danger">Delete</button>
</a>
                         
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
<script src="./javascript/roombook.js"></script>



</html>
