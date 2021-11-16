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
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
  <body>
  
    <!-- OUR BOOKING FORM MARKUP -->

        <div class = "panel-body">
          <div class="myDiv">
        <strong><center><h3 style="font-size:50px;font-family:Georgia;">MAKE A RESERVATION</h3></strong>
        </div>
        <br/>
          <?php
            require_once 'admin/connect.php';
            $query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
            while($fetch = $query->fetch_array()){
          ?>
         <br />
      <div class="col-6 col-md-4">
         <div class="card md-4 border-dark" style = "margin-left:20px;">
         <img src = "photo/<?php echo $fetch['photo']?>" >
            <div class="card-body">
               <h2 class="card-title"><?php echo $fetch['room_type']?></h2>
               <h4 style = "background-color:rgba(255, 223, 211);"><?php echo "Price: ₱ ".$fetch['price'].".00"?></h4>
               <h3 class="card-text"><?php echo $fetch['description']?></h3>
               <a style = "margin-left:20px;size:20px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
            </div>
         </div>
            </div>
          <?php
            }
          ?>

    <br />
    <br />
  </body>
  <script src = "js/jquery.js"></script>
  <script src = "js/bootstrap.js"></script>	
  </html>