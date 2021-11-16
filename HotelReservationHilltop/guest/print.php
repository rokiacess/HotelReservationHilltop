<!DOCTYPE html>
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
require_once "db.php";
$id = $_GET['tran'];
$sql="SELECT guest.firstname,guest.middlename,guest.lastname,guest.email,contactno,guest_total, transaction.checkin,checkout,checkin_time,checkout_time,room_id,guest_total,room_no, transaction.day,transaction.bill,COUNT(guest.guest_id) AS Total_Guest
FROM transaction INNER JOIN guest ON transaction.guest_id = guest.guest_id WHERE transaction.transaction_id = '$id';";
$id = $_GET['tran'];
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{while($row=mysqli_fetch_array($result))
{
?>
<h2><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']?></h2>
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
    <td class="info"><?php echo date("M d, Y", strtotime($row['checkin']))."    ".date("h:i A", strtotime($row['checkin_time']))?></td>
  </tr>
  <tr>
    <td class="mod">Check-out Date:</td>
    <td class="info"><?php echo date("M d, Y", strtotime($row['checkout']))."   ".date("h:i A", strtotime($row['checkout_time']))?></td>
  </tr>
  <tr>
    <td class="mod">Hotel Address:</td>
    <td class="info">26 Aquarius St. Bancom Subdivision,&nbsp; Gulod Malaya, 1850 San Mateo, Rizal Philippines</td>
  </tr>
  <tr>
    <td class="mod">Hotel Email:</td>
    <td class="info">hilltopresorthotel.reservation@gmail.com</td>
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
    <td class="info"><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']?></td>
  </tr>
  <tr>
    <td class="mod">Guest Email:</td>
    <td class="info"><?php echo $row['email']?></td>
  </tr>
  <tr>
    <td class="mod">Guest Contact Number:</td>
    <td class="info"><?php echo $row['contactno']?></td>
  </tr>
  </table>
  <table style="width:560px">
  <tr>
    <td class="mod">Villa:</td>
    <td class="info">Panovilla</td>
  </tr>
  <tr>
    <td class="mod">Villa Room Number:</td>
    <td class="info"><?php echo $row['room_no']?></td>
  </tr>
  <tr>
    <td class="mod">Number of Guest</td>
    <td class="info"><?php echo $row['guest_total']?></td>
  </tr>
  <tr>
    <td class="mod">Total Amount:</td>
    <td class="info">₱<?php echo $row['bill']?></td>
  </tr>
  </table>
  <br>
  <p>Payment Policy:</p>
  <p>All bookings must be guaranteed at the time of reservation by cash or advance deposit.</p>
  <p>We hope you find everything in order, please e-mail or call us should you have questions or clarifications</p>
  <p>Thank you!</p>
<?php
}
}
?>
<script>
window.print();
window.onafterprint = function(){
   window.location.replace('Home.php');
}
</script>
</body>
</html>