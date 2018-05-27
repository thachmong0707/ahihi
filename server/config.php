<?php
	// mysqli_set_charset($conn, 'UTF-8');
	// $SERVER = "localhost";
	$SERVER = "localhost";
	$USERNAME = "root";
	$PASSWORD = "";
	$DBNAME = "curency";
	// Create connection
	$conn = new mysqli($SERVER, $USERNAME, $PASSWORD, $DBNAME);
	mysqli_set_charset($conn, 'UTF8');
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>
