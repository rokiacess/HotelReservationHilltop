<!-- <form action="#" method="post">
    <input type="text" name="email" id="email" placeholder="Emaiil dito tol">
</form> -->


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if(isset($_POST['send']))
{
    $email = $_POST['email'];
    $mail = new PHPMailer;
    $mail->isSMTP(); 
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port = 587; 
    $mail->SMTPSecure = 'tls'; 
    $mail->SMTPAuth = true;
    $mail->Username = "candrewtorres19@gmail.com"; // wag palitan
    $mail->Password = "sgjtuabbwtjzwqxb"; // wag palitan
    $mail->setFrom("securesally@gmail.com", "Hilltop Pool Resort");
    $mail->addAddress($email,"NAME" );
    $mail->Subject = 'Booking Confirmation';
    $mail->msgHTML("You're Booking is Confirmed. Please wait for the Payment Confirmation"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    $mail->AltBody = 'HTML messaging not supported';
    // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

    if(!$mail->send()){
        echo "Mailer Error: " . $mail->ErrorInfo;
    }else{
        echo "Message sent!";
    }
}

?>