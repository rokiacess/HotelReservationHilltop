<?php
	require_once 'connect.php';
		$guest_id = $_GET['guest_id'];
		$transaction_id = $_GET['transaction_id'];
		$query = $conn->query("SELECT * FROM `archive` WHERE guest_id ='$guest_id'") or die(mysqli_error());
		$search = $query->num_rows;
        If($search > 0)
		{
			echo "<script>alert('Guest ID $guest_id is already archived.'); window.location = 'archive.php';</script>";
		}
		else
		{
		$query2 = $conn->query("SELECT * FROM `guest` WHERE guest_id ='$guest_id'") or die(mysqli_error());
		$fetch = $query2->fetch_array();
		$firstname = $fetch['firstname'];
		$lastname  = $fetch['lastname'];
		$day = $fetch['day'];
		$guest_total = $fetch['guest_total'];
		$payment_method = $fetch['payment_method'];
 
		$insert = mysqli_query($conn, "INSERT INTO `archive` VALUES('','$guest_id','$firstname','$lastname', '$day', '$guest_total', '$payment_method','2021-11-02')") or die(mysqli_error($conn));
		$conn->query("UPDATE `transaction` set status='Archive' WHERE transaction_id ='$transaction_id'") or die(mysqli_error());
		header("location: archive.php");
		}
?>
