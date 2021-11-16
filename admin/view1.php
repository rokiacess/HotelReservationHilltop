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
		<style>

</style>
	</head>
<body>

<nav style = "background-color:#0a0202;" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" style = "font-color:#fff">HillTop Pool Resort & Hotel Reservation</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
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
			<li  class = "active"><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Villa</a></li>
					
		</ul>		
	</div>
	<br />
	<div class = "container-fluid">	
		<div class = "panel panel-default">
			<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$r_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Canceled'") or die(mysqli_error());
				$m_p = $r_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
			?>
			<div class = "panel-body">
				<a class = "btn btn-success disabled"><span class = "badge"><?php echo $f_p['total']?></span> Pendings</a>
				<a class = "btn btn-info" href = "checkin.php"><span class = "badge"><?php echo $f_ci['total']?></span> Check In</a>
				<a class = "btn btn-warning" href = "checkout.php"><i class = "glyphicon glyphicon-eye-open"></i> Check Out</a>
				<br />
				<br />
<h1 align="center">Reservation Details</h1>
<form class="form-horizontal" action="" method="post" >
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
    <?php
					$query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
					$fetch = $query->fetch_array();
				?>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
     <div><h2>Guest Information</h2></div>
                <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label" for="name">NAME:</label>
                        <div class="col-md-8">
                          <input name="" type="hidden">
                          <input name="name" value="<?php echo $fetch['firstname']." ".$fetch['lastname']?>"class="form-control input-sm" disabled = "disabled" />
                        </div>
                      </div>
                    </div>  
                      <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label">EMAIL:</label>
                        <div class="col-md-8">
                          <input name="last" type="text" value="<?php echo $fetch['email']?>" class="form-control input-sm" id="last" disabled = "disabled" />
                        </div>
                      </div>
                    </div> 
                     <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label">ADDRESS:</label>
                        <div class="col-md-8">
                          <input name="address" type="text" value="<?php echo $fetch['address']?>" class="form-control input-sm" id="address" disabled = "disabled"/>
                        </div>
                      </div>
                    </div> 
     <div><h2>Reservation Details</h2></div>
                    <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label">Check In Date:</label>
                        <div class="col-md-8">
                        <div class="input-group " >  
                        <div class="input-group-addon"> 
                              <i class="fa fa-calendar"></i>
                            </div>
                        <input name="checkin"  value="<?php echo $fetch['checkin']?>" class="form-control input-sm" disabled = "disabled">
                        </div>     
                         </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label">Mode Of Payment:</label>
                        <div class="col-md-8">
                          <input name="status" type="text" value="<?php echo $fetch['payment_method']?>" class="form-control input-sm" disabled = "disabled"/>
                        </div>
                      </div>
                    </div> 
                    
                    <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label">Room:</label>
                        <div class="col-md-8">
                          <input name="status" type="text" value="<?php echo $fetch['room_type']?>" class="form-control input-sm" disabled = "disabled"/>
                        </div>
                      </div>
                    </div> 

                    <div class="form-group">
                      <div class="col-md-10">
                        <label class="col-md-4 control-label">Status:</label>
                        <div class="col-md-8">
                          <input name="status" type="text" value="<?php echo $fetch['status']?>" class="form-control input-sm" disabled = "disabled"/>
                        </div>
                      </div>
                    </div> 
                     <!-- /.box-body -->
            <div class="box-footer no-padding"> 
                <div class="pull-right"> 
                  <div class="btn-group">
                  <a class="btn btn-primary" href = "reserve.php">Back</a>
                     </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
  <br />
	<br />	
</body>
  </html>