<?php
    require_once 'admin/connect.php';
    if(ISSET($_POST['add_guest'])){
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $contactno = $_POST['contactno'];
        $day = $_POST['day'];
        $guest_total = $_POST['guest_total'];
        $checkin = $_POST['date'];
        $payment_method = $_POST['payment_method'];
        $discount = $_POST['discount'];
        $IDno = $_POST['IDno'];
        $PVcode = $_POST['PVcode'];
		$Additional = $_POST['Additional'];
        $query = $conn->query("SELECT * FROM `guest` WHERE `email` = '$email' OR `contactno` = '$contactno' ") or die(mysqli_error());
		$search = $query->num_rows;
        If($search > 1)
		{
			echo "<script>alert('Info is already made.')</script>";
		}
		else
		{
			$conn->query("INSERT INTO `guest` (firstname, middlename, lastname, address, email, contactno, day, guest_total, payment_method, discount, IDno, PVcode, Additional) VALUES('$firstname', '$middlename', '$lastname', '$address', '$email','$contactno','$day','$guest_total','$payment_method','$discount','$IDno','$PVcode','$Additional')") or die(mysqli_error());
			$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$_REQUEST[room_id]' && `status` = 'Pending'") or die(mysqli_error());
			$row = $query2->num_rows;
			$query3 = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `email` = '$email' && `contactno` = '$contactno' && `day` = '$day' && `guest_total` = '$guest_total' && `payment_method` = '$payment_method'  && `discount` = '$discount'  && `IDno` = '$IDno'  && `PVcode` = '$PVcode'  && `Additional` = '$Additional'") or die(mysqli_error());
			$fetch = $query3->fetch_array();
			if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){	
					echo "<script>alert('Must be present date')</script>";
				}else{
					if($row > 0){
						echo "<div class = 'container p-3 mb-2 bg-light text-dark'>
									<label style = 'color:#ff0000;'>Not Available Date</label><br />";
								$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
								while($f_date = $q_date->fetch_array()){
									echo "<ul>
											<li>	
												<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</label>	
											</li>
										</ul>";
								}
							"</div>";
					}else{	
							if($guest_id = $fetch['guest_id']){
								$room_id = $_REQUEST['room_id'];
								$conn->query("INSERT INTO `transaction`(guest_id, room_id, status, checkin) VALUES('$guest_id', '$room_id', 'Pending', '$checkin')") or die(mysqli_error());
								header('location:reply_reserve.php');
							}else{
								echo "<script>alert('Error Javascript Exception!')</script>";
							}
					}	
				}
		}			
	}	
?>