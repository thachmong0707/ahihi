<?php
	include "config.php";


	$data = $_REQUEST;

	// var_dump($data);
			$customerId= $_REQUEST['customerId'];
            $name = $_REQUEST['name'];
            $company= $_REQUEST['company'];
            $address = $_REQUEST['address'];

            $formId = $_REQUEST["formId"];
            $dateCreate  = date("m-d-y");;
            $content  = $_REQUEST["content"];
            $totalMoney  = $_REQUEST["totalMoney"];
            $moneyString  = $_REQUEST["moneyString"];
            $formType  = 2;
            $accountType  = $_REQUEST["accountType"];
            $receipt  = $_REQUEST["receipt"];
            $userId = $_REQUEST["userId"];
            $warehouseId =$_REQUEST['warehouseId'];
            $moneyTypeId =$_REQUEST['moneyTypeId'];


//check customer
    $sql = "SELECT id FROM users where id ='". $customerId."'";
      // echo $sql;
      $res = $conn->query($sql);;
          if ($res->num_rows > 0){
              $main_sql = "INSERT INTO form(form_id, date_create, content, total_money, total_money_text, form_type, account_type, receipt, user, customer, warehouse, money_type, status) 
				VALUES ('".$formId."', '".$dateCreate."', '".$content."', '".$totalMoney."', '".$moneyString."', '".$formType."', '".$accountType."', '".$receipt."', '".$userId."', '".$customerId."', '".$warehouseId."', '".$moneyTypeId."', 2)";
				$result = $conn->query($main_sql);
				if ($result->num_rows > 0){
		            var_dump('sucess'); 
		          }	
		          else {
		          	var_dump('fail'); 
		          }
          }
          else {
              
          }

// 	$sql = "INSERT INTO form(id, form_id, date_create, content, total_money, total_money_text, form_type, account_type, receipt, user, customer, warehouse, money_type, status) 
// VALUES (3, 'CTM0125-16-96', CURRENT_TIMESTAMP, 'đòi nợ', 10000000, 'mười triệu', 2, '1111', 'chung tu goc', 1,1,1,1,2)";
    // echo $sql;

// $sql = "INSERT INTO form(form_id, date_create, content, total_money, total_money_text, form_type, account_type, receipt, user, customer, warehouse, money_type, status) 
// VALUES ('CTM0125-16-96', CURRENT_TIMESTAMP, 'đòi nợ', 10000000, 'mười triệu', 2, '1111', 'chung tu goc', 1,1,1,1,2)";





    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
?>