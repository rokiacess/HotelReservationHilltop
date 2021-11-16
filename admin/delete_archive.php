<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `archive` WHERE `archive_id` = '$_REQUEST[archive_id]'") or die(mysqli_error());
	header("location:reserve.php");
?>