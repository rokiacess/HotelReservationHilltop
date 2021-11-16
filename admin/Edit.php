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
        <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
        <link rel = "stylesheet" type = "text/css" href = "../css/styles.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
		<script src="https://use.fontawesome.com/afd882c9d6.js"></script>
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
        <?php
                $q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
                $f_p = $q_p->fetch_array();
                $q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_error());
                $f_ci = $q_ci->fetch_array();
            ?>
            <div class = "panel-body">
                <a class = "btn btn-success" href = "reserve.php"><span class = "badge"><?php echo $f_p['total']?></span> Pendings</a>
                <a class = "btn btn-info" href ="checkin.php"><span class = "badge"><?php echo $f_ci['total']?></span> Check In</a>
                <a class = "btn btn-warning" href = "checkout.php"><i class = "glyphicon glyphicon-eye-open"></i> Check Out</a>
                <br />
            <div class = "panel-body">
                <?php
                    $query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
                    $fetch = $query->fetch_array();
                ?>
                <form  class="form-horizontal" method = "POST" enctype = "multipart/form-data" action = "edit_query.php?transaction_id=<?php echo $fetch['transaction_id']?>">
                <section class="content">
    
      <div class="row">
        <div class="col-md-12">
        <h1 align="center">Payments</h1>
          <div class="box box-primary">
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
     <div><h3>Guest Information</h3></div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label" >Firstname</label>
                        <div class="col-md-8">
                            <input type = "text" value = "<?php echo $fetch['firstname']?>" class = "form-control input-sm" disabled disabled = "disabled"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label" >Lastname</label>
                        <div class="col-md-8">
                            <input type = "text" value = "<?php echo $fetch['lastname']?>" class = "form-control input-sm" disabled disabled = "disabled"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Email</label>
                        <div class="col-md-8">
                        <input type = "text" value = "<?php echo $fetch['email']?>" class = "form-control input-sm" disabled = "disabled"/>
                        </div>
                    </div>
                </div>
        <div><h3>Reservation Details</h3></div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Mode of Payment</label>
                        <div class="col-md-8">
                        <input type = "text" value = "<?php echo $fetch['payment_method']?>" class = "form-control input-sm" disabled = "disabled"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">status</label>
                        <div class="col-md-8">
                        <select class = "form-control input-sm" name = "status">
								<option value = ""><?php echo $fetch['status']?></option>
								<option value = "Canceled">Canceled</option>
								<option value = "Check In">Check In</option>
                                <option value = "Check Out">Check Out</option>
							</select>
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Discount</label>
                        <div class="col-md-8">
                        <input type = "text" value = "<?php if($fetch['discount'] == "0"){ echo "None";} else {echo $fetch['discount'];}?>" class = "form-control input-sm" disabled = "disabled"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Price</label>
                        <div class="col-md-8">
                        <input type = "text" min = "0" max = "10" value = "<?php echo $fetch['price']?>" class = "form-control"  disabled = "disabled"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Room No</label>
                        <div class="col-md-3">
                            <input type = "number" min = "0" max = "5" name = "room_no" value = "<?php echo $fetch['room_no']?>" class = "form-control" disabled = "disabled"/>
                        </div>
                        <label class="col-md-1 control-label">Days</label>
                        <div class="col-md-2">
                            <input type = "number" value = "<?php echo $fetch['day']?>" min = "0" max = "12" name = "days" class = "form-control" disabled = "disabled"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Additional Charges</label>
                        <div class="col-md-8">
                        <input type = "text" class="form-control" value = "<?php echo $fetch['Additional']?>" rows="2" disabled = "disabled"/>
                        </div>
                    </div>
                </div> 

            <div><h3>Payment Details</h3></div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Total Amount</label>
                        <div class="col-md-2">
                            <input type = "number" name = "bill" id = "bill" value = "<?php echo $fetch['bill']?>" class = "form-control" Readonly />
                        </div>
                        <label class="col-md-1 control-label">Payment Recieved</label>
                        <div class="col-md-2">
                            <input type = "number" name = "deposite_amount" id = "deposite_amount" class = "form-control" OnKeyUp="getTotalBill()" />
                        </div>
                        <label class="col-md-1 control-label">Balance Due</label>
                        <div class="col-md-2">
                            <input type = "number"  name="total_bill" id = "status_bill" class = "form-control" Readonly/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Discount</label>
                        <div class="col-md-2">
                            <input type = "number" name = "discount_amount" id = "discount_amount"  class = "form-control" onKeyUp="getTotalBill()"/>
                        </div>
                        <!--<label class="col-md-1 control-label">VAT</label>
                        <div class="col-md-2">
                            <input type = "number" name="vat" id="vat" value = "12"  class = "form-control" Readonly/>
                        </div>-->
                        <label class="col-md-1 control-label">Additional Charges</label>
                        <div class="col-md-2">
                        <input type = "number"  name="additional_charges" id="additional_charges" value = "<?php echo $POST['additional_charges']?>" class = "form-control" OnKeyUp="getTotalBill()" />
                        </div>
                        <label class="col-md-1 control-label">status Bill</label>
                        <div class="col-md-2">
                            <select class = "form-control" name = "status_bill" class = "form-control">
								<option value = "">No Payment Yet</option>
								<option value = "Half Paid">Half Paid</option>
								<option value = "Not Paid">Not Paid</option>
                                <option value = "Not Paid">Fully Paid</option>
                                <option value = "Not Paid">Refunded</option>
							</select>
                        </div>
                    </div>
                </div>
                <div><h3>Additional Matters</h3></div>
                <div align="center">
                    <table class="table table-striped" border="2" style ="width:800px;">
                        <thead >
                             <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Pillow</td>
                                <td>250</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                                <td>Mattress</td>
                                <td>500</td>
                            </tr>
                            <th scope="row">3</th>
                                <td>Towels</td>
                                <td>100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pull-right"> 
                        <div class="btn-group">
                        <button name = "add_form_edit" class = "btn btn-primary"><i class = "glyphicon glyphicon-save"></i> Save</button>
                        </div>
                        <a type="button" class="btn btn-success"href="print.php?transaction_id=<?php echo $fetch['transaction_id']?>"><i class = "glyphicon glyphicon-print" title = "Print"></i> Print</a>
                        <a type="button" class="btn btn-info"href="viewreceipt.php?transaction_id=<?php echo $fetch['transaction_id']?>"><i class = "fas fa-receipt" title = "View Receipt"></i>View Receipt</a>
                    </div>
                   
                </form>
            </div>
        </div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script>
        function getTotalBill()
		{
			var numVal1 = Number(document.getElementById("bill").value);
			var numVal2 = Number(document.getElementById("deposite_amount").value);
			var numVal3 = Number(document.getElementById("discount_amount").value) / 100;
			var numVal5 = Number(document.getElementById("additional_charges").value);
			var biillVal = (numVal1 - (numVal1 * numVal3)) + numVal5;
			var totalValue = biillVal - numVal2;
			document.getElementById("status_bill").value = totalValue;
		}	
    </script>   
</html>
