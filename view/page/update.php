<?php
	include '../../src/server/config.php';
	$id = $_GET['id'];
	$sql = "UPDATE `form` SET `status` = 1 WHERE `id` = $id";
	$conn->query($sql);
	//chuyen lai trang ban dau
	 
	header("Location:http://localhost/ahihi/view/page/duyetphieuchi.php");

?>