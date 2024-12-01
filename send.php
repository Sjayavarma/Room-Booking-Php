<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['location'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Set to 2 for debugging, 0 for production
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = '12b26jayavarmas@gmail.com'; // Your Gmail address
        $mail->Password = 'fppumrztigduhgsd'; // Your Gmail app password
        $mail->SMTPSecure = 'ssl'; // SSL security
        $mail->Port = 465; // SSL port

        // Recipients
        $mail->setFrom('12b26jayavarmas@gmail.com', 'jai'); // Sender's email and name
        $mail->addAddress($email, $name); // Recipient's email and name

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";
        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

        // Send email
        if ($mail->send()) {
            echo '<script>alert("Message has been sent successfully!");window.location.href="contact.html";</script>';
        } else {
            echo '<script>alert("Message could not be sent. Please try again later.");window.location.href="contact.html";</script>';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
