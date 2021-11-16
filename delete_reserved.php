<?php
	require_once 'admin/connect.php';
	$conn->query("DELETE FROM `transaction` WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
	header("location:reply_serve.php");
?>