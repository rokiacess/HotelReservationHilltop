<?php
session_start();

require_once "db.php";

if(isset($_SESSION['user_id'])!="") {
    header("Location: Home.php");
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
<style>
.modal {
  display: none; 
  position: fixed;
  z-index: 1; 
  padding-top: 10px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4); 
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
</style>
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
			<!--dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd-->
			<a class="nav-link" onclick="document.getElementById('myModal').style.display='block'" href="#"><i class="fas fa-bell"></i></a>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="i2UZ9Xef"></script>
                <a href="https://www.facebook.com/hilltoppoolsresort"><i class="fab fa-facebook-f"></i></a>
                <a href="http://www.instagram.com/sissyrokia"><i class="fab fa-instagram"></i></a>
                <a href="https://youtu.be/BY_m7s3nJcQ"><i class="fab fa-youtube"></i></a>
            </div>  
            <div>
				
            </div>
        </div>
    </nav>

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>

        <!------------------------ Site Title ---------------------->

        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3>HILLTOP POOL</h3>
                <button class="btn"><a href="reservation.php">BOOK NOW</a></button>
            </div>
        </section>

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Villas  ----------------- -->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./photo/pn1.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>PANO VERDE</h3>
                                <button class="btn btn-blog">LOOKS</button>
                                <span>Good for 24pax</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="./photo/b1.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>BUENA BISTA</h3>
                                <button class="btn btn-blog">LOOKS</button>
                                <span>Good for 10pax</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="./photo/pv2.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>PANO VILLA</h3>
                                <button class="btn btn-blog">LOOKS</button>
                                <span>Private Pool</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./photo/1.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>PANORAMA</h3>
                                <button class="btn btn-blog">LOOKS</button>
                                <span>ROOMS</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------x---------- Carousel --------x-------- -->

        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./assets/hilltop3.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14, 2019</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="https://janinaspot.wordpress.com/2015/05/03/hilltop-pools-antipolo-getaway/">HILLTOP POOLS ANTIPOLO GETAWAY!</a>
                            <p>April is my birthday month and I always make it a point to have my family and friends 
							get together for food and some fun under the sun. This year I wanted to go again to Tanay but 
							opted for a private swimming pool in Antipolo. I researched for private pools from Montalban to Antipolo 
							but most were booked already until May. Good thing I went across Hilltop Pools through another blogger so 
							I immediately contacted them.
                            </p>
                            <button><a href ="https://janinaspot.wordpress.com/2015/05/03/hilltop-pools-antipolo-getaway/"> More &nbsp; <i class="fas fa-arrow-right"></i></a></button>
                        </div>
                    </div>
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h2>Villas</h2>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="#">Pano verde</a>
                                <span>(05)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="#">Buena Vesta</a>
                                <span>(02)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="#">Panovilla</a>
                                <span>(07)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="#">Panorama</a>
                                <span>(01)</span>
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">Karaoke</a>
                                <span>(08)</span>
                            </li>
                        </ul>
                    </div> 
                    <!-----------------------popular post-----------------------------> 
                    <div class="popular-post">
                        <h2>Popular Post</h2>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/hilltop4.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                        2019</span>
                                    <span>2 Commets</span>
                                </div>
                            </div>
                            
              <!-----------------------newsletter----------------------------->          
                    <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                        <h2>Newsletter</h2>
                        <div class="form-element">
                            <input type="text" class="input-element" placeholder="Email">
                            <button class="btn form-btn">Subscribe</button>
                        </div>
                    </di>
            </div>
        </section>

        <!-- -----------x---------- Site Content -------------x------------>

    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->


    <!-- --------------------------- Footer ---------------------------------------- -->

    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p style="color:white"> Enjoy the convenience of a get-away without really getting away. 
                  Located in the hills of Antipolo, Hilltop Pools is only 25 kms from Makati.</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p style="color:white">Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <p style="color:white">Let us be Social</p>
                <div>
                <a href="https://www.facebook.com/hilltoppoolsresort"><i class="fab fa-facebook-f"></i></a>
                <a href="http://www.instagram.com/sissyrokia"><i class="fab fa-instagram"></i></a>
                <a href=""></a><i class="fab fa-twitter"></i></a>
                <a href="https://youtu.be/BY_m7s3nJcQ"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2019 All rights reserved | made by
                <a href="https://youtu.be/BY_m7s3nJcQ" target="_black">Hilltop Poop Resort <i class="fab fa-youtube"></i>
                    Channel</a>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    <!-- -------------x------------- Footer --------------------x------------------- -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
   <div class="modal-header">
    <font size="6" class="d"><B>List Booked Rooms</B></font><font onclick="closed()" class="close">&times;</font>
	</div>
	
	 <div class="modal-body">
         <table style="width:100%">
  <tr>
    <td><b>Rooms</b></td>
    <td><b>Check IN</b></td>
    <td><b>Check Out</b></td>
    <td><b>day</b></td>
    <td><b>Bill</b></td>
    <td><b>Print</b></td>
  </tr>
  <?php
require_once "db.php";
    $id="111";//$_POST['search']; change to guest_id 
    $sql="SELECT room.room_type,transaction.transaction_id,transaction.checkin,transaction.checkout,transaction.day,transaction.bill
    FROM transaction INNER JOIN room ON transaction.room_id = room.room_id WHERE transaction.guest_id = '$id';" ;
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    while($row=mysqli_fetch_array($result))
{
	
 echo '<tr><td>'.$row['room_type'].'</td>';
 echo '<td>'.$row['checkin'].'</td>';
 echo '<td>'.$row['checkout'].'</td>';
 echo '<td>'.$row['day'].'</td>';
 echo '<td>'.$row['bill'].'</td>';
 $sample = $row['transaction_id'];
 echo '<td><a href="print.php?tran='.$sample.'" >Print</a></td></tr>';
}
    }

?>
</table>
	   </div>
		
		
		<div class="modal-footer">
		
        </div>
  </div>
</div>
<script>
function closed()
{
	document.getElementById('myModal').style.display='none';
}
</script>
    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
</body>

</html>