<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dname = "login"; //database name is FAQ
	
	// Create connection/connection object
	$conn = new mysqli($servername, $username, $password, $dname);
	
	// Check connection
	if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>
