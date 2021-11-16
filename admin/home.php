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
		<link rel = "stylesheet" type = "text/css"/>
        
		<style>
	body{
background:#eee;    
}

.card-box {
    position: relative;
    color: #fff;
    padding: 20px 10px 40px;
    margin: 20px 0px;
}
.card-box:hover {
    text-decoration: none;
    color: #f1f1f1;
}
.card-box:hover .icon i {
    font-size: 100px;
    transition: 1s;
    -webkit-transition: 1s;
}
.card-box .inner {
    padding: 5px 10px 0 10px;
}
.card-box h3 {
    font-size: 27px;
    font-weight: bold;
    margin: 0 0 8px 0;
    white-space: nowrap;
    padding: 0;
    text-align: left;
}
.card-box p {
    font-size: 15px;
}
.card-box .icon {
    position: absolute;
    top: auto;
    bottom: 5px;
    right: 5px;
    z-index: 0;
    font-size: 72px;
    color: rgba(0, 0, 0, 0.15);
}
.card-box .card-box-footer {
    position: absolute;
    left: 0px;
    bottom: 0px;
    text-align: center;
    padding: 3px 0;
    color: rgba(255, 255, 255, 0.8);
    background: rgba(0, 0, 0, 0.1);
    width: 100%;
    text-decoration: none;
}
.card-box:hover .card-box-footer {
    background: rgba(0, 0, 0, 0.3);
}
.bg-blue {
    background-color: #00c0ef !important;
}
.bg-green {
    background-color: #00a65a !important;
}
.bg-orange {
    background-color: #f39c12 !important;
}
.bg-red {
    background-color: #d9534f !important;
} 
/*------------------------------------dashboard style--------------------------------------------------*/

.inbox-widget .inbox-item .inbox-item-text {
    color: black;
    display: block;
    font-size: 14px;
    margin: 0
}

.inbox-widget .inbox-item .inbox-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 12px
}

.comment-list .comment-box-item {
    position: relative
}

.comment-list .comment-box-item .commnet-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 2px
}

.comment-list .comment-box-item .commnet-item-msg {
    color: #313a46;
    display: block;
    margin: 10px 0;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px
}

.comment-list .comment-box-item .commnet-item-user {
    color: #98a6ad;
    display: block;
    font-size: 14px;
    margin: 0
}

.comment-list a+a {
    margin-top: 15px;
    display: block
}

.ribbon-box .ribbon-primary {
    background: #2d7bf4;
}

.ribbon-box .ribbon {
    position: relative;
    float: left;
    clear: both;
    padding: 5px 12px 5px 12px;
    margin-left: -30px;
    margin-bottom: 15px;
    font-family: Rubik,sans-serif;
    -webkit-box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    -o-box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    color: #fff;
    font-size: 13px;
}
.text-custom {
    color: #02c0ce!important;
}

.badge-custom {
    background: #02c0ce;
    color: #fff;
}
.badge {
    font-family: Rubik,sans-serif;
    -webkit-box-shadow: 0 0 24px 0 rgba(0,0,0,.06), 0 1px 0 0 rgba(0,0,0,.02);
    box-shadow: 0 0 24px 0 rgba(0,0,0,.06), 0 1px 0 0 rgba(0,0,0,.02);
    padding: .35em .5em;
    font-weight: 500;
}
.text-muted {
    color: #98a6ad!important;
}

.font-13 {
    font-size: 13px!important;
}

#table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000000;
  color: white;
}
#customer th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #B22222;
  color: white;
}
#table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customer td, #customer th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customer tr:nth-child(even){background-color: #f2f2f2;}

#customer tr:hover {background-color: #ddd;}

</style>
	</head>
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
		<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$r_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Canceled'") or die(mysqli_error());
				$m_p = $r_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
				$q1_ci1 = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check Out'") or die(mysqli_error());
				$f1_ci1 = $q1_ci1->fetch_array();
			?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-5">
            <div class="card-box bg-blue">
                <div class="inner">
                    <h3><?php echo $f_p['total']?></h3>
                    <p> Pendings </p>
                </div>
                <div class="icon">
                    <i class="fa fa-clock on fa-spinner" aria-hidden="true"></i>
                </div>
                <a href="reserve.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-5">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3><?php echo $f_ci['total']?></h3>
                    <p> Check In </p>
                </div>
                <div class="icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                <a href="checkin.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-5">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3><?php echo $f1_ci1['total']?></h3>
                    <p> Check Out </p>
                </div>
                <div class="icon">
				<i class="fa fa-hotel" aria-hidden="true"></i>
                </div>
                <a href="checkout.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-5">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3><?php echo $m_p['total']?></h3>
                    <p> Canceled </p>
                </div>
                <div class="icon">
				<i class="fa fa-ban" aria-hidden="true"></i>
                </div>
                <a href="cancel.php" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!------ dashboard view ------>
<div class="content">
    <div class="container">
        <h3 class="text-primary">Pending</h3>
                    <table id = "table" class = "table table-striped"><thead>
									<th>Name</th>
                                    <th>Room Type</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th><center>Action</th>
                            </thead>
                            <tbody>
							<?php
                            $query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `status` = 'Pending'") or die(mysqli_error());
                            while($fetch = $query->fetch_array()){
                        ?>
                                <tr>
                                    <td><?php echo $fetch['firstname']?></td>
                                    <td><?php echo $fetch['room_type']?></td>
                                    <td><?php echo $fetch['price']?></td>
                                    <td><?php echo $fetch['status']?></td>
                                    <td><center><a class = "btn btn-danger" onclick = "confirmationDelete(); return false;" href = "delete_pending.php?transaction_id=<?php echo $fetch['transaction_id']?>"><i class = "glyphicon glyphicon-trash" title="Discard"></i></a>
                                    <a class="btn btn-info"href="reserve.php?transaction_id=<?php echo $fetch['transaction_id']?>"><i class = "fa fa-eye" title="view"></i></a></td>
                                </tr>
                                <?php
                            }
                        ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
<div class="content">
    <div class="container">
                   <h3 class="text-primary">Canceled</h3>
                    <table id = "customer" class = "table table-striped"><thead>
									<th>Name</th>
                                    <th>Room Type</th>
                                    <th>Price</th>
                                    <th>Status</th>
                            </thead>
                            <tbody>
							<?php
                            $query = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `status` = 'Canceled'") or die(mysqli_error());
                            while($fetch = $query->fetch_array()){
                        ?>
                                <tr>
                                    <td><?php echo $fetch['firstname']?></td>
                                    <td><?php echo $fetch['room_type']?></td>
                                    <td><?php echo $fetch['price']?></td>
                                    <td><?php echo $fetch['status']?></td>
                                    </tr>
                                <?php
                            }
                        ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>