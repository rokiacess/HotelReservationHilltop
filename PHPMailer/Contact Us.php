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
		<meta charset="utf-8">
		<title>Contact Us</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

		<form action="" method='POST'>

			<label for="name"> Name</label>
				<input name="name" type="text" minlength="3" maxlength="43" required patter="[a-zA-Z0-9]+"><br>

			<label for="email"> Email</label>
				<input name="email" type="email" minlength="5" maxlength="43" required =" "><br>
		
			<label for="subject"> Subject</label>
				<input name="subject" type="text" minlength="3" maxlength="43" required patter="[a-zA-Z]+"><br>

			<label for="message"> Message</label>
				<textarea name="message" required rows="5" placeholder="Enter your message here..." maxlength="250"></textarea><br>

			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>