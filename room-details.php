<?php


session_start();



?>

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
    <!-- Room Page Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/img/IMG-20240524-WA0001.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/img/IMG-20240520-WA0015.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/img/IMG-20240520-WA0020.jpg"></div>
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Room Content -->
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <!-- project content -->
            <div class="row">
                <div class="col-md-12"> 
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-subtitle">Luxury Hotel</div>
                    <div class="section-title">friends Rooms</div>
                </div>
                <div class="col-md-8">
                    <p class="mb-30">The "Friends Room" at FridayInn Hotel is a cozy, thoughtfully designed space perfect for small groups of friends seeking comfort and relaxation.</p>
                    <p class="mb-30">Interdum et malesu they adamale fames ac anteipsu pimsine faucibus curabitur arcu site feugiat in tortor in, volutpat sollicitudin libero. Hotel non lorem acer suscipit bibendum vulla facilisi nedeuter nunc volutpa mollis sapien velet conseyer turpeutionyer masin libero sempe mollis.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Check-in</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-in from 9:00 AM - anytime</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Early check-in subject to availability</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Check-out</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-out before noon</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Express check-out</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <h6>Special check-in instructions</h6>
                            <p>Guests will receive an email 5 days before arrival with check-in instructions; front desk staff will greet guests on arrival For more details, please contact the property using the information on the booking confirmation.</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Pets</h6>
                            <p>Pets not allowed</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Children and extra beds</h6>
                            <p>Children are welcome Kids stay free! Children stay free when using existing bedding; children may not be eligible for complimentary breakfast Rollaway/extra beds are available for $ 10 per day.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h6>Amenities</h6>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-group"></span> </div>
                            <div class="page-list-text">
                                <p>1-2 Persons</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-wifi"></span> </div>
                            <div class="page-list-text">
                                <p>Free Wifi</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-clock-1"></span> </div>
                            <div class="page-list-text">
                                <p>200 sqft room</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-breakfast"></span> </div>
                            <div class="page-list-text">
                                <p>Breakfast</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-towel"></span> </div>
                            <div class="page-list-text">
                                <p>Towels</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-swimming"></span> </div>
                            <div class="page-list-text">
                                <p>Swimming Pool</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
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
                                    <input name="cin" type="date" class="form-control input" placeholder="Check in" required >
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input1_wrapper">
                                <label>Check out</label>
                                <div class="input1_inner">
                                    <input name="cout" type="date" class="form-control input" placeholder="Check out" required>
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
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Initialize your connection (Make sure $conn is defined somewhere)
$conn = mysqli_connect('localhost:3307', 'root', '', 'fridayin_hotel');

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
    
    // Check if $conn is valid and not closed
    if ($conn) {
        $result = $conn->query($price_query);

        if ($result && $result->num_rows > 0) {
            // Fetch the price
            $row = $result->fetch_assoc();
            $price = $row['price'];

            // Insert into roombook table
            $sql = "INSERT INTO roombook (name, email, phone, country, cin, cout, Roomtype, NoofRoom, meal, price, no_of_days) 
                    VALUES ('$name', '$email', '$phone', '$country', '$cin', '$cout', '$room_type', '$NoofRoom', '$meal', '$price', '$no_of_days')";

            if ($conn->query($sql) === TRUE) {
                // Get the ID of the inserted record
                $id = $conn->insert_id;

                // Redirect with the ID parameter
                echo '<script language="javascript">';
                echo 'alert("Registered successfully!"); location.href="booking successful.php?id=' . urlencode($id) . '"';
                echo '</script>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: No such room type found";
        }

        // Close the connection after all queries are done
        $conn->close();
    } else {
        echo "Connection error: " . mysqli_connect_error();
    }
}
?>
 <!-- Similiar Room -->
    <section class="rooms1 section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Luxury Hotel</span></div>
                    <div class="section-title"><span>Similar Rooms</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/img/new3.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">Day / Night</a></h6>
                                <h5><a href="room-details.html">Couple Room</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/img/new.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">Day / Night</a></h6>
                                <h5><a href="room-details.html">Family Room</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/img/new1.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">Day / Night</a></h6>
                                <h5><a href="room-details.html">Double Room</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/img/new2.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">Day / Night</a></h6>
                                <h5><a href="room-details.html">Family Room</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/img/new1.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">Day / Night</a></h6>
                                <h5><a href="room-details.html">Couple Room</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/img/new.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">Day / Night</a></h6>
                                <h5><a href="room-details.html">Wellness Room</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->


   
    <!-- Footer -->
    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="footer-column footer-about">
                <h3 class="footer-title">About Hotel</h3>
                <p class="footer-about-text">
                  Experience the charm and tranquility of Pondicherry at Friday
                  Inn Guest House, your perfect retreat for a memorable stay.
                  Nestled in the heart of this beautiful coastal town, our guest
                  house offers a unique blend of comfort, convenience, and
                  hospitality that will make your visit truly special.
                </p>

                <div class="footer-language">
                  <i class="lni ti-world"></i>
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
                <p class="footer-contact-text">
                  No.18, kattamanikuppam street,Solaithandavam nagar,<br />Solai
                  Nagar,Muthialpet, Puducherry, 605003
                </p>
                <div class="footer-contact-info">
                  <p class="footer-contact-phone">
                    <span class="flaticon-call"></span>+91 638 065 4686
                  </p>
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
                <p class="footer-bottom-copy-right">
                  © Copyright 2024 by <a href="9003678972">thinkbrandz</a>
                </p>
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