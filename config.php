<?php
	$servername = "Localhost";
	$username = "root";
	$password = "";
	$dbname = "cart";
	
	//create connecton
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	//check connection
	if ($conn->connect_error)
	{
		die("Connection failed:" . $conn->connect_error);
	}
	
	echo "<script> alert('Connected successfully') </script>";
	
?>