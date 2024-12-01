<?php
session_start();
$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Fridayinn GuestHouse - Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" crossorigin="anonymous"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/roombook.css">
</head>
<body>
    <div class="searchsection">
        <input type="text" name="search_bar" id="search_bar" placeholder="search..." onkeyup="searchFun()">
    </div>

    <div class="roombooktable table-responsive-xl">
        <?php
        $paymenttablesql = "SELECT * FROM payment";
        $paymentresult = mysqli_query($conn, $paymenttablesql);

        $nums = mysqli_num_rows($paymentresult);
        ?>
        <table class="table table-bordered" id="table-data">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Check-In</th>
                    <th scope="col">Check-Out</th>
                    <th scope="col">No of Days</th>
                    <th scope="col">No of Rooms</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Total Bill</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
            <?php while ($res = mysqli_fetch_array($paymentresult)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($res['id']); ?></td>
                    <td><?php echo htmlspecialchars($res['Name']); ?></td>
                    <td><?php echo htmlspecialchars($res['RoomType']); ?></td>
                    <td><?php echo htmlspecialchars($res['check_in']); ?></td>
                    <td><?php echo htmlspecialchars($res['check_out']); ?></td>
                    <td><?php echo htmlspecialchars($res['no_of_days']); ?></td>
                    <td><?php echo htmlspecialchars($res['no_of_rooms']); ?></td>
                    <td><?php echo htmlspecialchars($res['Phone']); ?></td>
                    <td><?php echo htmlspecialchars($res['amount']); ?></td>
                    <td class="action">
                        <!-- <a href="invoiceprint.php?id=<?php echo htmlspecialchars($res['id']); ?>"><button class="btn btn-primary"><i class="fa-solid fa-print"></i> Print</button></a> -->
                       <a href="paymantdelete.php?id=<?php echo htmlspecialchars($res['id']); ?>" onclick="return confirm('Are you sure you want to delete this record?');">
    <button class="btn btn-danger">Delete</button>
</a>

                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        const searchFun = () => {
            let filter = document.getElementById('search_bar').value.toUpperCase();
            let myTable = document.getElementById("table-data");
            let tr = myTable.getElementsByTagName('tr');

            for (var i = 0; i < tr.length; i++) {
                let td = tr[i].getElementsByTagName('td')[1];
                if (td) {
                    let textValue = td.textContent || td.innerHTML;
                    if (textValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>
