<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html>
<head>
<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
<style>
.myDiv {
  background-color: lightblue;
  text-align: center;
  padding-top:3px;
  height:50px;
}
.mod
{
	width:140px;
}
.info
{
	width:170px;
}
@media print { 
    @page { 
        margin-top: 0; 
        margin-bottom: 0; 
    } 
    body { 
        padding-top: 72px; 
        padding-bottom: 72px ; 
    } 
} 
</style>
</head>
<body>
<?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
<img id='barcode' src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $fetch['firstname']." ".$fetch['middlename']." ".$fetch['lastname'].",".$fetch['payment_method'].",".$fetch['room_type'].",".$fetch['room_no'].",".$fetch['bill'].",".$fetch['status_bill'].",".$fetch['discount'].",".$fetch['deposite_amount'].",".$fetch['additional_charges']?>&amp;size=100x100" 
	style="float:right" Title=<?php echo $fetch['firstname']." ".$fetch['middlename']." ".$fetch['lastname'].",".$fetch['payment_method'].",".$fetch['room_type'].",".$fetch['room_no'].",".$fetch['bill'].",".$fetch['status_bill'].",".$fetch['discount'].",".$fetch['deposite_amount'].",".$fetch['additional_charges']?> 
	width="100" height="100" />
  
<h2><?php echo $fetch['firstname']." ".$fetch['middlename']." ".$fetch['lastname']?></h2>
<div class="myDiv">
  <h2>Hilltop Pool Resort & Hotel</h2>
</div>
<p>&nbsp;&nbsp;<?php echo date("M d, Y")?></p>
<p>&nbsp;&nbsp;Good Day!</p>
<p><center>Thank you for booking with us, here are the complete details of your reservations.</p></center>
<p>Please retain this for your reference</p>
<br>
  <table style="width:560px">
  <tr>
    <td class="mod">Date of Booking:</td>
    <td class="info"><?php echo date("M d, Y")?></td>
  </tr>
  <tr>
    <td class="mod">Check-in Date:</td>
    <td class="info"><?php echo date("M d, Y", strtotime($fetch['checkin']))."    ".date("h:i A", strtotime($fetch['checkin_time']))?></td>
  </tr>
  <tr>
    <td class="mod">Check-out Date:</td>
    <td class="info"><?php echo date("M d, Y", strtotime($fetch['checkout']))."   ".date("h:i A", strtotime($fetch['checkout_time']))?></td>
  </tr>
  <tr>
    <td class="mod">Hotel Address:</td>
    <td class="info">26 Aquarius St. Bancom Subdivision,&nbsp; Gulod Malaya, 1850 San Mateo, Rizal Philippines</td>
  </tr>
  <tr>
    <td class="mod">Hotel Email:</td>
    <td class="info">hilltopresorthotel@gmail.com</td>
  </tr>
  <tr>
    <td class="mod">Hotel Phone:</td>
    <td class="info">123456789</td>
  </tr><br>
  <table>
  <br>
  <table style="width:560px">
  <tr>
    <td class="mod">Guest Name:</td>
    <td class="info"><?php echo $fetch['firstname']." ".$fetch['middlename']." ".$fetch['lastname']?></td>
  </tr>
  <tr>
    <td class="mod">Guest Email:</td>
    <td class="info"><?php echo $fetch['email']?></td>
  </tr>
  <tr>
    <td class="mod">Guest Contact Number:</td>
    <td class="info"><?php echo $fetch['contactno']?></td>
  </tr>
  </table>
  <table style="width:560px">
  <tr>
    <td class="mod">Villa:</td>
    <td class="info"><?php echo $fetch['room_type']?></td>
  </tr>
  <tr>
    <td class="mod">Villa Room Number:</td>
    <td class="info">20<?php echo $fetch['room_no']?></td>
  </tr>
  <tr>
    <td class="mod">Number of Guest</td>
    <td class="info"><?php echo $fetch['guest_total']?></td>
  </tr>
  <tr>
    <td class="mod">Mode Of Payment</td>
    <td class="info"><?php echo $fetch['payment_method']?></td>
  </tr>
  <!---<tr>
    <td class="mod">Additional Charges:</td>
    <td class="info">₱.<?php echo $fetch['extra_expenses']?></td>
  </tr>---->
  <br> <br>
  <tr>
    <td class="mod">Discount:</td>
    <td class="info">₱.<?php echo $fetch['discount']?></td>
  </tr>
  <tr>
    <td class="mod">Deposit Amount:</td>
    <td class="info">₱.<?php echo $fetch['deposite_amount']?></td>
  </tr>
  <tr>
    <td class="mod">Additional Charges:</td>
    <td class="info">₱.<?php echo $fetch['additional_charges']?></td>
  </tr>
  <tr>
    <td class="mod">Total Amount:</td>
    <td class="info">₱.<?php echo $fetch['bill']?></td>
  </tr>
  </table>
  <br>
  <p>Payment Policy:</p>
  <p>All bookings must be guaranteed at the time of reservation by cash or advance deposit.</p>
  <p>We hope you find everything in order, please e-mail or call us should you have questions or clarifications</p>
  <p>Thank you!</p>
<?php
?>
<script>
window.print();
window.onafterprint = function(){
   window.location.replace('checkin.php');
}
</script>
</body>
</html>