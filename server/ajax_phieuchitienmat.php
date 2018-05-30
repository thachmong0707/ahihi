<?php
	include "config.php";

	$data = $_REQUEST;

	var_dump($data);
	print_r($data['id']);
	print_r($data['name']);
	print_r($data['company']);
	print_r($data['address']);
?>