<?php
	// $SERVER = "localhost";
	$SERVER = "localhost";
	$USERNAME = "root";
	$PASSWORD = "";
	$DBNAME = "ahihi";

	// Create connection
	$conn = new mysqli($SERVER, $USERNAME, $PASSWORD, $DBNAME);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>
