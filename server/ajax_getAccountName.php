<?php
	include "config.php";

	$data = $_REQUEST['id'];
	$data = substr($data, 1);
// var_dump($data);
	$sql = "SELECT name from account_type where id='".$data."'"; 
	$result = $conn->query($sql);
	// return mysqli_fetch_array($result);

	// var_dump( mysqli_fetch_array($result));
print_r(mysqli_fetch_array($result)['name'])
?>