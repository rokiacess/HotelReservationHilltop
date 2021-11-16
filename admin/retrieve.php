<?php
	require_once 'connect.php';
		$guest_id = $_GET['guest_id'];
		$archive_id = $_GET['archive_id'];
		$conn->query("UPDATE `transaction` set status='Check In' WHERE guest_id ='$guest_id'") or die(mysqli_error());
		$conn->query("DELETE FROM `Archive` WHERE archive_id ='$archive_id'") or die(mysqli_error());
		header("location: reserve.php");
?>
