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
    <link rel="stylesheet" href="./css/about.css">

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
                <script async defer crossorigin="anonymous" 
                src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="i2UZ9Xef"></script>
                <a href="https://www.facebook.com/hilltoppoolsresort"><i class="fab fa-facebook-f"></i></a>
                <a href="http://www.instagram.com/sissyrokia"><i class="fab fa-instagram"></i></a>
                <a href="https://youtu.be/BY_m7s3nJcQ"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->
    <!-------------------------------About Site---------------------------------------------------->
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./assets/0.jpg" width="1000" height="400">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./assets/b4.jpg" width="1000" height="400">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./assets/resort.jpg" width="1000" height="400">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
            <h1 style="text-align:center">About Us </h1>
            <p style="color:black" style="text-align:center">Enjoy the convenience of a get-away without really getting away. Located in the hills of Antipolo, 
            Hilltop Pools is only 25 kms from Makati.<br>
           <br> * Ideal for family get-togethers, company functions and parties. Packages to suit small and big groups.<br>
            * Clean facilities, pool maintained to impeccable standards.<br>
            * Air Conditioned rooms with clean beddings.<br>
            * Catering provided as requested.<br>
            * Friendly and efficient staff on stand-by to see your needs.<br>
            * Scenic view.</p> <br>
          <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.9708615394634!2d121.1628538793863!3d14.60073578985234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b8b69ea1b5a3%3A0x68dedf73a079ca7a!2sHilltop%20Pools!5e0!3m2!1sen!2sph!4v1610611282211!5m2!1sen!2sph" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
</body>
</html>