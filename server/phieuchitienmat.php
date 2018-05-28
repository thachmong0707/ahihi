<?php
	include "config.php";
if(isset($_POST['btn-save']) && ($_POST['btn-save']=='save')) {

    $content = ($_POST['content']);
    $total_money = $_POST['total_money'];



	$sql_getID = "select max(id) form form";
	$getID = $conn->query($sql_getID);

    $sql= "INSERT INTO form(id, form_id, date_create, content, total_money, total_money_text, form_type, 
account_type, receipt, 'user', customer, warehouse, money_type, status) 
VALUES (3, 'CTM0125-16-96', CURRENT_TIMESTAMP, 'đòi nợ', 10000000, 'mười triệu', 2, '1111', 'chung tu goc', 1,1,1,1,2)";
        // echo $sql;
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}    

// echo $content;

}   
?>