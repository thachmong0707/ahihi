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

		//get cusID from form
		$formId = 1;
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
   //          if ($conn->query($sql) === TRUE) {
			//     echo "New record created successfully";
			// } else {
			//     echo "Error: " . $sql . "<br>" . $conn->error;
			// }
		// print_r($oneObj[0]);
		// print_r($oneObj[1]);
		// print_r($oneObj[2]);
		// print_r($oneObj[3]);
		// print_r($oneObj[4]);
		// print_r($oneObj[5]);
		// print_r($oneObj[6]);
		// print_r($oneObj[7]);
	}
?>