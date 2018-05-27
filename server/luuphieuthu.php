<?php
	include "config.php";
		$sql = "INSERT INTO form (form_id, date_create, content, total_money, total_money_text, form_type, account_type, receipt, user, customer, warehouse, money_type, status)
    	VALUES ('2', '24/05/2018', 'abc', 'abc', 12345, 12345, '12', 1, 1, 1, 1,1,1)";

     	if ($conn->query($sql) === TRUE) {
        	echo "Thêm dữ liệu thành công";
    	} else {
        	echo "Error: " . $sql . "<br>" . $connect->error;
    	}	
?>