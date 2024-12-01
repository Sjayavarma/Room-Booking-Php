<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>The Cappa Luxury Hotel</title>
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
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="img/img/IMG-20240524-WA0001.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Get in touch</h5>
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <style type="text/css">
.mb-60{
        background: #D3A71A;
        
    padding: 50px;
    border-radius: 40px;
}
    </style>
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-4 mb-60 text-white">
                    <h3>The Friday Inn</h3>
                    <p>FridayInn Hotel offers a comfortable and convenient stay with a range of rooms, including Friends, Family, and Couples Rooms. Located near attractions like Promenade Beach and Auroville, the hotel provides additional services such as meal plans, transportation, parking, and Wi-Fi. The booking portal, developed using Laravel and PHP, ensures a smooth booking experience with real-time availability and secure Razorpay payments. With responsive design and dynamic .</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:6380 654 686">6380 654 686</a>
                        </div>
                    </div>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>Email Info</p> <a href="mailto:booking@fridayinn.in">booking@fridayinn.in</a>
                        </div>
                    </div>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                        <div class="text">
                            <p>Address</p> No.18, kattamanikuppam street,Solaithandavam nagar,<br>Solai Nagar,Muthialpet, Puducherry, 605003
                        </div>
                    </div>
                </div>
                <div class="col-md-7 mb-30 offset-md-1">
                    <h3>Get in touch</h3>
                    <form method="post" >
                        <!-- form message -->
                       <!--  <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                            </div>
                        </div> -->
                        <!-- form elements -->
                        <div class="row">
                        <form method="post" action="send.php">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="location" type="text" placeholder="Subject *" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="butn-dark2"><span>Send Message</span></button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
            <?php
            include 'config.php';
 

// if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
// $name = $_POST['name'];
// $email = $_POST['email'];
// $contact = $_POST['phone'];
// $address = $_POST['message'];
// $location = $_POST['location'];
// if($name !=''||$email !=''){

// //Insert Query of SQL

// $query = "INSERT INTO message(name, mail, phone, message, location) VALUES ('$name', '$email', '$contact', '$address', '$location')";

//  $stmt = $conn->prepare($query);
//     if (!$stmt) {
//         echo "<p>Error preparing SQL statement: ". htmlspecialchars($conn->error). "</p>";
//         exit;
//     }
// }
// else{
// echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
// }
// }
// Closing Connection with Server



// Assuming you're getting these variables from a form POST
            if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$address = $_POST['message'];
$location = $_POST['location'];

// Prepare an insert statement
$query = "INSERT INTO message (name, mail, phone, message, location) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);

// Check if the statement was prepared successfully
if (!$stmt) {
    echo "<p>Error preparing SQL statement: " . htmlspecialchars($conn->error) . "</p>";
    exit;
}

// Bind the parameters
$stmt->bind_param("sssss", $name, $email, $contact, $address, $location);

// Execute the statement
if ($stmt->execute()) {
  echo '<script language="javascript">';
echo 'alert("Thank you for your request! ...");';
echo '</script>';
} else {
    echo "<p>Error executing SQL statement: " . htmlspecialchars($stmt->error) . "</p>";
}

// Close the statement and the connection
$stmt->close();
mysqli_close($conn);
// Closing Connection with Server
}
?>
            <!-- Map Section -->
            <div class="row">
    <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp" style="filter: none;">
    <div class="row">
    <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp" style="filter: none;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.5638943451485!2d79.8081826!3d11.9538978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5363a82d35e3d9%3A0x3a66cad193c0f20d!2sFriday%20Inn!5e0!3m2!1sen!2sin!4v1697464562731!5m2!1sen!2sin" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

    </div>
</div>

        </div>
    </section>
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
                                <p class="footer-contact-phone"><span class="flaticon-call"></span>+91 6380 654 686</p>
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
                            <p class="footer-bottom-copy-right">© Copyright 2024 by <a href="#">thinkbrandz</a></p>
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

<!-- Mirrored from duruthemes.com/demo/html/cappa/demo1-light/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2024 04:48:53 GMT -->
</html>