<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Booking Form for Hilltop</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
    <meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />      
	</head>
  <body>
  
    <!-- OUR BOOKING FORM MARKUP -->

        <div class = "panel-body">
          <strong><h3 style="font-size:50px">MAKE A RESERVATION</h3></strong>
          <?php
            require_once 'admin/connect.php';
            $query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
            while($fetch = $query->fetch_array()){
          ?>
            <div class = "well" style = "height:300px; width:200%;">
						<div style = "float:left;">
              <img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "300"/>
						</div>
              <div style = "float:left; margin-left:10px;">
                <h3 style="font-size:20px" ><?php echo $fetch['room_type']?></h3>
                <h3 style="font-size:18px"><?php echo $fetch['description']?></h3>
                <h4 style = "background-color:rgba(255, 223, 211);"><?php echo "Price: ₱ ".$fetch['price'].".00"?></h4>
                <a style = "margin-left:20px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
              </div>
            </div>
          <?php
            }
          ?>
        </div>
    </div>
    <br />
    <br />
  </body>
  <script src = "js/jquery.js"></script>
  <script src = "js/bootstrap.js"></script>	
  </html>