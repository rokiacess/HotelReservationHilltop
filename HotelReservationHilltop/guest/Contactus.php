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
                        <a href="Home.php">Home</a>
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
                <a href=""></a><i class="fab fa-twitter"></i></a>
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
            <h2>For Inquiries</h2>
            <div class="inputBox">
                <input type="text" placeholder="Name">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Email">
            </div>
            <div class="inputBox">
                <textarea placeholder="Message"></textarea>
            </div>
            <div class="inputBox">
                <input type="submit" value="Send">
            </div>
        </div>
    </section>

    <script language=”JavaScript”>

var frmvalidator = new Validator(“contactform”); frmvalidator.addValidation(“name”,”req”,”Please provide your name”); frmvalidator.addValidation(“email”,”req”,”Please provide your email”); frmvalidator.addValidation(“email”,”email”, “Please enter a valid email address”); </script>
