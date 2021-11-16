<!DOCTYPE html>
<?php
    require_once 'validate.php';
    require 'name.php';
?>
<html lang="en">
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
				<a class = "btn btn-success" href = "reserve.php"><span class = "badge"><?php echo $f_p['total']?></span> Pendings</a>
				<a class = "btn btn-danger" href="cancel.php"><span class = "badge"><?php echo $m_p['total']?></span> Canceled</a>
				<a class = "btn btn-info" href = "checkin.php"><span class = "badge"><?php echo $f_ci['total']?></span> Check In</a>
				<a class = "btn btn-warning" href = "checkout.php"><i class = "glyphicon glyphicon-eye-open"></i> Check Out</a>
				<br /><br />
		<h3 class="text-primary">Archive Data</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<table id = "table" class = "table table-striped" action="save">
			<thead>
				<tr>
					<th>Name</th>
					<th>Day</th>
					<th>Guest</th>
					<th>Mode Of Payment</th>
                    <th>Date</th>
					<th>Retrieve</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'connect.php';
 
					$query = mysqli_query($conn, "SELECT * FROM `archive`") or die(mysqli_error($conn));
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['firstname']?></td>
					<td><?php echo $fetch['day']?></td>
					<td><?php echo $fetch['guest_total']?></td>
                    <td><?php echo $fetch['payment_method']?></td>
					<td><?php echo $fetch['date_archived']?></td>
					<td><a class = "btn btn-primary" href="retrieve.php?guest_id=<?php echo $fetch['guest_id']?>&archive_id=<?php echo $fetch['archive_id']?>">Retrieve</a> 
					<a class = "btn btn-danger" onclick = "confirmationDelete(); return false;" href = "delete_archive.php?archive_id=<?php echo $fetch['archive_id']?>"><i class = "glyphicon glyphicon-trash" title=" Discard"></i></a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<!----<a href="reserve.php" class="btn btn-info">Back</a>----->
			</div>
		</div>
	</div>
</body>	
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>
</html>