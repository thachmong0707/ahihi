<?php
include "config.php";


$data = $_REQUEST;

// var_dump($data);
$customerId = $_REQUEST['customerId'];
$name = $_REQUEST['name'];
$company = $_REQUEST['company'];
$address = $_REQUEST['address'];

$formId = $_REQUEST["formId"];
$dateCreate = date("y-m-d");;
$content = $_REQUEST["content"];
$totalMoney = $_REQUEST["totalMoney"];
$moneyString = $_REQUEST["moneyString"];
$formType = 2;
$accountType = $_REQUEST["accountType"];
$accountType = substr($accountType, 1);;
$receipt = $_REQUEST["receipt"];
$userId = $_REQUEST["userId"];
$warehouseId = $_REQUEST['warehouseId'];
$moneyTypeId = $_REQUEST['moneyTypeId'];


$sql_role= "SELECT role from users where id ='".$userId."'";
$role = $conn->query($sql_role);
if ($role->num_rows > 0){
    $roleId = mysqli_fetch_array($role)[0];
}
else {
     $conn->error;
}
    if ($roleId ==1)
        $status =2;
    else $status =1;
    print_r($status);   

//check customer
$sql = "SELECT id FROM customers where id ='" . $customerId . "'";
// echo $sql;
$res = $conn->query($sql);
if ($res->num_rows > 0) {
    $main_sql = "INSERT INTO form(form_id, date_create, content, total_money, total_money_text, form_type, account_type, receipt, user, customer, warehouse, money_type, status) VALUES ('" . $formId . "', '" . $dateCreate . "', '" . $content . "', '" . $totalMoney . "', '" . $moneyString . "', '" . $formType . "', '" . $accountType . "', '" . $receipt . "', '" . $userId . "', '" . $customerId . "', '" . $warehouseId . "', '" . $moneyTypeId . "', '".$status."')";
    $result = $conn->query($main_sql);
    if ($result == true) {
        var_dump('sucess');
    } else {
        echo $conn->error;
    }
} else {
    $sql_customer = "INSERT INTO customers values('".$customerId."','" . $name . "','" . $company . "','" . $address . "')";
    $result1 = $conn->query($sql_customer);
    if ($result1 == true) {
        $main_sql = "INSERT INTO form(form_id, date_create, content, total_money, total_money_text, form_type, account_type, receipt, user, customer, warehouse, money_type, status) VALUES ('" . $formId . "', '" . $dateCreate . "', '" . $content . "', '" . $totalMoney . "', '" . $moneyString . "', '" . $formType . "', '" . $accountType . "', '" . $receipt . "', '" . $userId . "', '" . $customerId . "', '" . $warehouseId . "', '" . $moneyTypeId . "', 2)";
        $result2 = $conn->query($main_sql);
        if ($result2 == true) {
            var_dump('sucess');
        } else {
            echo $conn->error;
        }
    } else {
        echo $conn->error;
    }
}
print_r($formId);

?>