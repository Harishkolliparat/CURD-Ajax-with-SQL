<?php
	$servername = "localhost";
	$username = "pklist";
	$password = "Chitra@3692";
	$dbname = "test";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>