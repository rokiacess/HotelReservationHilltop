<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
	use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['add_form'])){
$email = $_POST['email'];
		$mail = new PHPMailer;
		$mail->isSMTP(); 
		$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
		$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
		$mail->Port = 587; 
		$mail->SMTPSecure = 'tls'; 
		$mail->SMTPAuth = true;
		$mail->Username = "hilltopresorthotel.reservation@gmail.com"; // wag palitan
		$mail->Password = "vhvdhubofjjlworx"; // wag palitan
		$mail->setFrom("securesally@gmail.com", "Hilltop Pool Resort");
		$mail->addAddress($email,"firstname" );
		$mail->Subject = 'Booking Confirmation';
		$mail->msgHTML("You're Booking is Confirmed. Please wait for the Payment Email Confirmation"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
		$mail->AltBody = 'HTML messaging not supported';
		$mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
	
		if(!$mail->send()){
			echo "Mailer Error: " . $mail->ErrorInfo;
		}else{
			echo "Message sent!";
		}
	}
	?>
<html lang = "en">
	<head>
		<title>Hilltop Pool Resort & Hotel</title>
		<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/styles.css" />
		
	</head>
	<style>
			 input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button{
      -webkit-appearance:none;
    }
    input[type="number"]{
      -moz-appearance:textfield;
    }
</style>
<body>
	<nav style = "background-color:#0a0202;" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" style = "color:white">HillTop Pool Resort & Hotel Reservation</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style = "color:white"><i class = "glyphicon glyphicon-user" style = "color:white"></i>  <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills" style = "background-color:#212020;">
			<li><a href = "home.php">Home</a></li>
			<li><a href = "account.php">Accounts</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Villa</a></li>
					
		</ul>		
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Fill up form</div>
				<?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
				<br />
				<div style = "float:left; margin-left:20px; margin-right:10px;">
					<img src = "photo/<?php echo $fetch['photo']?>" height = "230px" width = "240px">
					</div>
				<form method = "POST" enctype = "multipart/form-data" action = "save_form.php?transaction_id=<?php echo $fetch['transaction_id']?>">
				<table class="table">
				<div class="form-row">
					<div class="col-md-3 mb-2">
						<label>Name</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['firstname']." ".$fetch['lastname']?>" class = "form-control" size = "20" disabled disabled = "disabled"/>
					</div>
					<div class="col-md-3 mb-2">
						<label>Email</label>
						<br />
						<input type="text" value = "<?php echo $fetch['email']?>" class = "form-control" name="email" size = "30" disabled = "disabled"/> 
					</div>
					<div class="col-md-3 mb-2">
						<label>Payment Method</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['payment_method']?>" class = "form-control" size = "6" disabled = "disabled"/>
					</div>
				</div>
<br />
				<div class="form-row">
					<div class="col-md-3 mb-2">
						<label>Discount</label>
						<br />
						<input type="text" value = "<?php echo $fetch['discount']?>" class = "form-control" disabled = "disabled"/>
					</div>
					<div class="col-md-3 mb-2">
						<label>Number Of Guest</label>
						<br />
						<input type = "number" min = "0" max = "10" value = "<?php echo $fetch['guest_total']?>" class = "form-control"  disabled = "disabled"/>
					</div>
					<div class="col-md-3 mb-2">
						<label>Room Type</label>
						<br />
						<input type = "text" value = "<?php echo $fetch['room_type']?>" class = "form-control" disabled = "disabled"/>
					</div>
				</div>
				<div class="form-row">
				<div class="col-md-3 mb-2">
						<label>Status</label>
						<br />
							<select class = "form-control" name = "status">
								<option value = ""><?php echo $fetch['status']?></option>
								<option value = "Canceled">Canceled</option>
								<option value = "Check In">Check In</option>
							</select>
						</div>
					</div>
					<div class="col-md-3 mb-2">
						<label>Price</label>
						<br />
						<input type = "text" min = "0" max = "10" value = "<?php echo $fetch['price']?>" class = "form-control"  disabled = "disabled"/>
					</div>
					<div class="col-md-3 mb-2">
						<label>Room No</label>
						<br />
						<input type = "number" min = "0" max = "5" name = "room_no" class = "form-control" required = "required"/>
					</div>
					<div class="col-md-3 mb-2">
						<label>Days</label>
						<br />
						<input type = "number" value = "<?php echo $fetch['day']?>" min = "0" max = "12" name = "days" class = "form-control" required = "required"/>
					</div>
					</div>
					<br style = "clear:both;"/>
					<br />
					<button name = "add_form" class = "btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<br />
	<br />
	
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>