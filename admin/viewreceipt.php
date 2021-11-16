<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
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

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <style>
.card {
    margin-bottom: 1.5rem
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #c8ced3;
    border-radius: .25rem
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #f0f3f5;
    border-bottom: 1px solid #c8ced3
}
.footer {
    background-color: #eeeeeea8
}

.footer span {
    font-size: 12px
}


</style>
<body>
<?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
                
<div class="container-fluid">
    <div id="ui-view" data-select2-id="ui-view">
        <div>
            <div class="card">
            <div class="card-header" style="background-color:black;color:white;"><strong><center>Invoice</div></strong>
                <div class="card-body">
                <div class="row mb-4">
                    <img src="photo/<?php echo $fetch['photo']?>" height = "200px" width = "250px" class="rounded" alt="Rooms">
                        <div class="col-sm-4">
                            <h6 class="mb-3">Details:</h6>
                            <div><b>Name:</b> <?php echo $fetch['firstname']." ".$fetch['middlename']." ".$fetch['lastname']?></div>
                            <div><b>Date of Booking:</b> <?php echo date("M d, Y")?></div>
                            <div><b>Check-in Date:</b> <?php echo date("M d, Y", strtotime($fetch['checkin']))."    ".date("h:i A", strtotime($fetch['checkin_time']))?></div>
                            <div><b>Check-out Date:</b> <?php echo date("M d, Y", strtotime($fetch['checkout']))."   ".date("h:i A", strtotime($fetch['checkout_time']))?></div>
                        </div>
                        <div class="col-sm-2" style="float:right">
                            <h6 class="mb-3">Pay Here</h6>
                            <div><b>Mode Of Payment:</b> <?php echo $fetch['payment_method']?></div>
                            <div><b>Name:</b> HillTop</div>
                            <div><b>Number:</b> 09365733973</div>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Villa</th>
                                    <th>Room</th>
                                    <th>Mode Of Payment</th>
                                    <th>Days</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="left"><?php echo $fetch['firstname']." ".$fetch['middlename']." ".$fetch['lastname']?></td>
                                    <td class="left"><?php echo $fetch['room_type']?></td>
                                    <td class="left">20<?php echo $fetch['room_no']?></td>
                                    <td class="center"><?php echo $fetch['payment_method']?></td>
                                    <td class="right"><?php echo $fetch['days']?></td>
                                    <td class="right">₱. <?php echo $fetch['bill']?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"style="color:grey">Hotel Address:</br>26 Aquarius St. Bancom Subdivision,&nbsp; Gulod Malaya, 1850 San Mateo, Rizal Philippines</br>
                        </br>Payment Policy:</br>All bookings must be guaranteed at the time of reservation by cash or advance deposit.</br></br>
                        Would you Like to Cancel, Just Click <a href="https://forms.gle/24E3XqPGZnDKFygFA"> CANCEL</a> and fill up the form and submit it.
                    </br></br>We hope you find everything in order, please e-mail or call us should you have questions or clarifications</div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                    
                                    <tr>
                                        <td class="left">
                                            <strong>Additional Charges</strong>
                                        </td>
                                        <td class="right">₱. <?php echo $fetch['additional_charges']?></td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Advance Deposit</strong>
                                        </td>
                                        <td class="right">₱. <?php echo $fetch['deposite_amount']?></td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Discount (20%)</strong>
                                        </td>
                                        <td class="right"><?php if($fetch['discount'] == "0"){ echo "None";} else {echo $fetch['discount'];}?></td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Sub Total</strong>
                                        </td>
                                        <td class="right">₱. <?php echo $fetch['sub_total']?></td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Amount To Pay</strong>
                                        </td>
                                        <td class="right">
                                            <strong>₱. <?php echo $fetch['bill']?></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">
                        <i class="fa fa-print"></i> Print</a>
                        <a class="btn btn-sm btn-info float-right mr-1 d-print-none" href="checkin.php" data-abc="true">
                        <i class="fa fa-save"></i> Back</a>
                        
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between footer p-3"> <span>Need Help? <a href="mailto:hilltopresorthotel.reservation@gmail.com?subject=Concern"> Email Us</a></span> <span><?php echo date("M d, Y")?></span> </div>
            </div>
            
        </div>
    </div>
</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>

</html>