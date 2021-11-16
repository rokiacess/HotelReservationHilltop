<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Booking Form for Hilltop</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/css/smart-forms.css">
    <link rel="stylesheet" href="path/to/css/font-awesome.min.css">      
  </head>
  <body>
  
    <!-- OUR BOOKING FORM MARKUP -->
    <div style = "margin-left:0;" class = "container">
      <div class = "panel panel-default">
        <div class = "panel-body">
          <strong><h3>MAKE A RESERVATION</h3></strong>
          <?php
            require_once 'admin/connect.php';
            $query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
            while($fetch = $query->fetch_array()){
          ?>
            <div class = "well" style = "height:300px; width:100%;">
              <div style = "float:left;">
                <img src = "assets/<?php echo $fetch['assets']?>" height = "250" width = "350"/>
              </div>
              <div style = "float:left; margin-left:10px;">
                <h3><?php echo $fetch['room_type']?></h3>
                <h4 style = "color:#00ff00;"><?php echo "Price: ₱. ".$fetch['price'].".00"?></h4>
                <br /><br /><br /><br /><br /><br />
                <a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
              </div>
            </div>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
    <br />
    <br />
  </body>
  <script src = "js/jquery.js"></script>
  <script src = "js/bootstrap.js"></script>	
  </html>;''