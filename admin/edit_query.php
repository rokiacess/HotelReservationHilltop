<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_form_edit'])){
		$additional_charges = $_POST['additional_charges'];
		$deposite_amount = $_POST['deposite_amount'];
		$total_bill = $_POST['total_bill'];
		$sub_total = $_POST['sub_total'];
		$status = $_POST['status'];
		$status_bill = $_POST['status_bill'];
		$discount_amount = $_POST['discount_amount'];
		$additional_charges = $_POST['additional_charges'];
		$vat = $_POST['vat'];
		$query = $conn->query("SELECT * FROM `transaction` WHERE `room_no` = '$room_no' && `status` = 'Check In'") or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+8 HOURS"));
		if($row > 0){
			echo "<script>alert('Room not available')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
			/* $total = $fetch2['price'] * $days;
			$total2 = 800 * $additional_chargess;
			$total3 = $total + $total2;
			$total4 = $fetch2['price'] * $days / 2;
			$total5 = $fetch3['bill'] - $discount_amount;
			$total6 = $total4 - $total5; */
			$checkout = date("Y-m-d", strtotime($fetch['checkin']."+".$days."DAYS"));
			$conn->query("UPDATE `transaction` SET `additional_charges` = '$additional_charges', `discount_amount` = '$discount_amount',`vat` = '$vat', `sub_total` = '$total_bill', `deposite_amount` = '$deposite_amount', `status_bill` = '$status_bill', `status` = '$status', `checkin_time` = '$time', `checkout` = '$checkout' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
			header("location:checkin.php");
		}
	}
?>