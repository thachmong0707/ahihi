<?php
	include "config.php";

	$data = $_REQUEST;

	for ($i=1; $i <= count($data)/8 ; $i++) { 
		$oneObj=[];
		for ($j=0; $j < 8; $j++) { 
			$nameKey = 'table_tr' . $i . 'td' . $j;

			$value = $data[$nameKey];
			array_push($oneObj, $value);
			
		}
		// var_dump($oneObj[0]);

$sql_Id = "SELECT Max(id) FROM form";
$res = $conn->query($sql_Id);
if ($res->num_rows > 0){
	$formId = mysqli_fetch_array($res)[0];
	// print_r($formId);
}
else {
	 $conn->error;
}
		//get cusID from form
        $accountType =$oneObj[0] ;
        $accountType = substr($accountType, 1);;
        // var_dump($accountType);
        $money = $oneObj[4];
        $moneyVND = $oneObj[5];
		$dateCreated = date("y-m-d");
        $contractType = 1;
        $customerId = $oneObj[7];


// print_r($formId);
// print_r($accountType);
// print_r($money);
// print_r($moneyVND);
// print_r($dateCreated);


        $sql = "INSERT INTO form_detail
            VALUES ( '".$formId."', '".$accountType."', '".$money."', '".$moneyVND."', '".$dateCreated."', '".$contractType."', '".$customerId."')";
            $conn->query($sql);
	}

	
	print_r($formId);
?>