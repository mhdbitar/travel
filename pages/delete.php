<?php
	$connection = mysqli_connect("localhost", "root", "", "travels");
	$id = $_GET['id'];

	$sql = "DELETE FROM tours WHERE id = '$id'";
	$result = mysqli_query($connection, $sql);

	header('location: admin.php');
?>