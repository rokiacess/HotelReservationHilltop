<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hilltopresorthotel.reservation@gmail.com';                     //SMTP username
    $mail->Password   = 'hilltop@reservation';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('hilltopresorthotel.reservation@gmail.com');     //Add a recipient

    //Content
    $mail->isHTML(true);                          //Set email format to HTML
    $mail->Subject = 'Form Submission: '. $_POST['subject'];
    $mail->Body    = 'Name: '. $_POST['name']. '<br>Email: '. $_POST['email']. '<br>Message: '. $_POST['message'];

    $mail->send();
    echo 'Thank you for contacting us '. $_POST['name']. ', We will back to you shortly';
}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HILLTOP POOL RESORT & HOTEL</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="./css/contact.css">

</head>
<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="Index.html" class="text-gray">HILLTOP POOL RESORT & HOTEL</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="Index.php">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="Gallery.php">Gallery</a>
                    </li>
                    <li class="nav-link">
                        <a href="About.php">About</a>
                    </li>
                    <li class="nav-link">
                        <a href="Villa.php">Villa</a>
                    </li>
                    <li class="nav-link">
                        <a href="Contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="Resortandpolicy.php">Terms and Conditions</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" 
                src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="i2UZ9Xef"></script>
                <a href="https://www.facebook.com/hilltoppoolsresort"><i class="fab fa-facebook-f"></i></a>
                <a href="http://www.instagram.com/sissyrokia"><i class="fab fa-instagram"></i></a>
                <a href="https://youtu.be/BY_m7s3nJcQ"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->
    <section class="contact" id="contact">
        <div class="cont">
            <h2 class="contactText">Contact Us</h2>
        </div>
        <div class="contactForm">
            <h2>Message Us</h2>
            <form action="" method='POST'>
            <div class="inputBox">
            <input name="name" type="text" minlength="3" maxlength="43" required patter="[a-zA-Z0-9]+" placeholder="Name">
            </div>
            <div class="inputBox">
            <input name="email" type="email" minlength="5" maxlength="43" required =" " placeholder="Email">
            </div>
            <div class="inputBox">
            <input name="subject" type="text" minlength="3" maxlength="43" required patter="[a-zA-Z]+" placeholder="Subject">
            </div>
            <div class="inputBox">
            <textarea name="message" required rows="5" placeholder="Enter your message here..." maxlength="250"></textarea><br>
            </div>
            <div class="inputBox">
                <input type="submit" name="submit" value="Submit">
            </div>
        </div>
</form>
    </section>
</body>
</html>