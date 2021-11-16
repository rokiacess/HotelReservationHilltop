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
                <form  class="form-horizontal" method = "POST" enctype = "multipart/form-data" action = "Edit2_query.php?guest_id=<?php echo $fetch['guest_id']?>">
                <section class="content">
      <div class="row">
        <div class="col-md-12">
        <h1 align="center">Reservation Details</h1>
        <label style="color:grey; text-align:center;">(For Extension Only)</label>
          <div class="box box-primary">
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
     <div><h3>Guest Information</h3></div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label" >Firstname</label>
                        <div class="col-md-8">
                            <input type = "text" value = "<?php echo $fetch['firstname']?>" name ="firstname" class = "form-control input-sm" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label" >Lastname</label>
                        <div class="col-md-8">
                            <input type = "text" value = "<?php echo $fetch['lastname']?>" name ="lastname" class = "form-control input-sm" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Email</label>
                        <div class="col-md-8">
                        <input type = "text" value = "<?php echo $fetch['email']?>" class = "form-control input-sm" />
                        </div>
                    </div>
                </div>
         <!---<div><h3>Tranfer To another Guest</h3></div>
                   another guest
                    <label style = "color:grey">(when the reservation is named to other)</label>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Full Name</label>
                        <div class="col-md-8">
                        <input type = "text" name = "guestFullname" class = "form-control input-sm" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Guest Email</label>
                        <div class="col-md-8">
                            <input type = "text" name = "guestFullname" class = "form-control input-sm" />
                        </div>
                    </div>
                </div>----->
        <div><h3>Reservation Details</h3></div>
                <div class="form-group">
                    <div class="col-md-10">
                        <label class="col-md-4 control-label">Number Of Guest</label>
                        <div class="col-md-8">
                            <input type = "number" min = "0" max = "10" value = "<?php echo $fetch['guest_total']?>" class = "form-control input-sm"  disabled = "disabled"/>
                        </div>
                    </div>
                </div>
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
                        <label class="col-md-4 control-label">Room Type</label>
                        <div class="col-md-8">
                        <input type = "text" value = "<?php echo $fetch['room_type']?>" class = "form-control" disabled = "disabled"/>
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
                            <input type = "number" min = "0" max = "5" name = "room_no" value = "<?php echo $fetch['room_no']?>" class = "form-control" required = "required"/>
                        </div>
                        <label class="col-md-1 control-label">Days</label>
                        <div class="col-md-2">
                            <input type = "number" value = "<?php echo $fetch['day']?>" min = "0" max = "12" name = "days" class = "form-control" required = "required"/>
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
                <div class="pull-right"> 
                        <div class="btn-group">
                        <button name = "add_form3" class = "btn btn-primary"><i class = "glyphicon glyphicon-save"></i> Save</button>
                        </div>
                        <a class="btn btn-success"href="viewreceipt.php?transaction_id=<?php echo $fetch['transaction_id']?>"><i class = "glyphicon glyphicon-open-eye" title = "View Receipt"></i>View Receipt</a>
                        </div>
                </form>
            </div>
        </div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>  
</html>
