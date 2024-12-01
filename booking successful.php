<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>The Fridayinn GuestHouse</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
     <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <!--<div class="logo-wrapper">-->
            <!--    <a class="logo" href="index.html"> <img src="img/friday inn 2.png" class="logo-img" alt=""> </a>-->
                <!-- <a class="logo" href="index.html"> <h2>THE CAPPA <span>Luxury Hotel</span></h2> </a> -->
            <!--</div>-->
            <!-- Button -->
            <div class="logo-wrapper navbar-brand valign">
                <a href="index.html">
                    <div class="logo">
                        <img src="img/friday inn 2.png" class="logo-img" alt="">
                    </div>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav" style="margin-left: 160px;padding-top: 20px;">
                    <li class="nav-item "><a class="nav-link" href="index.html">Home </a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item "><a class="nav-link" href="rooms2.html">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="Tourist.html">Tourist spot</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
                </ul>
            </div>
             <button style="margin-left: 20px;margin-top: 20px;" type="submit"  class="butn-dark2"><span>Book Now</span></button>
        </div>
    </nav>
    
<?php
$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');// Include your database connection settings
session_start();

// Check if id parameter is set
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    // Prepare SQL query with a placeholder
    $stmt = $conn->prepare("SELECT cin, cout, email, name, phone, Roomtype, price, no_of_days, country FROM roombook WHERE id = ?");
    
    if ($stmt) {
        // Bind the id parameter to the placeholder
        $stmt->bind_param('i', $id); // Assuming 'id' is an integer
        
        // Execute query
        if ($stmt->execute()) {
            // Bind result variables
            $stmt->bind_result($cin, $cout, $email, $name, $phone, $Roomtype, $price, $no_of_days, $country);
            
            // Fetch result
            if ($stmt->fetch()) {
?>
<div class="container c-modal" style="margin-top: 150px;color:white;">
    <div style="background-color:#222;margin:30px;box-sizing:border-box;font-size:16px;color:color:white;">
        <h1 style="padding:40px;box-sizing:border-box;font-size:24px;color:#ffffff;background-color:#d3a71a;margin:0;">Hotel Reservation</h1>
        <p style="padding:40px 40px 20px 40px;margin:0;box-sizing:border-box;font-size:16px; color:white;">
            A guest has booked a reservation for <b><?= $cin ?></b> and will depart on <b><?= $cout ?></b>.</p>
        <h2 style="padding:20px 40px;margin:0;color:#394453;box-sizing:border-box;color:white;">Guest Details</h2>
        <div style="box-sizing:border-box;padding:0 40px 20px;">
            <table style="border-collapse:collapse;width:100%;">
                <tbody>
                    <tr>
                        <td style="padding:15px 0;text-decoration:underline;">Email</td>
                        <td style="text-align:right;"><?= $email ?></td>
                    </tr>
                    <tr>
                        <td style="padding:15px 0;text-decoration:underline;">Name</td>
                        <td style="text-align:right;"><?= $name ?></td>
                    </tr>
                    <tr>
                        <td style="padding:15px 0;text-decoration:underline;">Phone</td>
                        <td style="text-align:right;"><?= $phone ?></td>
                    </tr>
                    <tr>
                        <td style="padding:15px 0;text-decoration:underline;">Room Type</td>
                        <td style="text-align:right;"><?= $Roomtype ?></td>
                    </tr>
                    <tr>
                        <td style="padding:15px 0;text-decoration:underline;">Total Price</td>
                        <td style="text-align:right;"><?= $price * $no_of_days ?></td>
                    </tr>
                    <tr>
                        <td style="padding:15px 0;text-decoration:underline;">Country</td>
                        <td style="text-align:right;"><?= $country ?></td>
                    </tr>
                </tbody>
            </table>
            
            <!-- Payment Form -->
            
            <form method="POST" action="payscript.php">
            <input type="hidden" name="name" value="<?= $name ?>">
    <input type="hidden" name="total" value="<?= $price * $no_of_days ?>">
    <input type="hidden" name="Phone" value="<?= $phone ?>">
    <input type="hidden" name="location" value="<?= $country ?>">
    <input type="hidden" name="roombook_id" value="<?= $id ?>">
    <div class="text-center" style="padding-top:10px;color:white;">
    <button type="submit" class="butn-dark2" style="color:white;">Pay</button>
     </div>
    
</form>
 <div class="text-center" style="padding-top:10px;color:white;">
     
    <button type=" " onclick="location.href = 'thank.php';"class="butn-dark2">Direct payment at Hotel</button>
    </div>
        </div>
    </div>
</div>
<?php
            } else {
                echo "No records found for id: " . $id;
            }
        } else {
            echo "Execution error: " . $stmt->error;
        }
        
        // Close statement
        $stmt->close();
    } else {
        echo "Preparation error: " . $conn->error;
    }
} else {
    echo "Error - no id selected";
}
?>
</div>
		</div>
		</div>


   
     
    
          
        
  
        <!-- Footer -->
      <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-column footer-about">
                            <h3 class="footer-title">About Hotel</h3>
                            <p class="footer-about-text">Welcome to the best fridayinn hotel in Pondicherry. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.</p>

                            <div class="footer-language"> <i class="lni ti-world"></i>
                                <select onchange="location = this.value;">
                                    <option value="">English</option>
                                    <option value="">Tamil</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="footer-column footer-explore clearfix">
                            <h3 class="footer-title">Explore</h3>
                            <ul class="footer-explore-list list-unstyled">
                            <li><a href="">Home</a></li>
                                <li><a href="rooms2.html">Rooms</a></li>
                                <li><a href="restaurent.html">Restaurant</a></li>
                                <li><a href="about.html">About Hotel</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-column footer-contact">
                            <h3 class="footer-title">Contact</h3>
                            <p class="footer-contact-text">No.18, kattamanikuppam street,Solaithandavam nagar,<br>Solai Nagar,Muthialpet, Puducherry, 605003</p>
                            <div class="footer-contact-info">
                                <p class="footer-contact-phone"><span class="flaticon-call"></span>+91 638 065 4686p>
                                <p class="footer-contact-mail">booking@fridayinn.in</p>
                            </div>
                             <div class="footer-about-social-list">
                  <a href="https://www.instagram.com/fridayinn_pondy/"><i class="ti-instagram"></i></a>
                  <a href="https://www.facebook.com/profile.php?id=61559650692160"><i class="ti-facebook"></i></a>
                 
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right">© Copyright 2024 by <a href="#">think</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/custom.js"></script>
</body>

 </html>


