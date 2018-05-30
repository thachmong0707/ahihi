<?php
include "../../server/config.php";

// load STT into input fields
$sql_getID = "select max(id) from form";
$getID = $conn->query($sql_getID);
$id = (int)mysqli_fetch_array($getID)[0] + 1;
$currentDate = date("d-m-y");
$STT = "CTM" . $id . $currentDate;

// Load AccountType into select options
// load STT
$sql_getAccountType = "select * from account_type";
$getAccountType = $conn->query($sql_getAccountType);
// fetch các kiểu

// load Warehouse into select options
$sql_getWarehouse = "select * from warehouse";
$getWarehouse = $conn->query($sql_getID);
$currentDate = date("d-m-y");
$STT = "CTM" . $id . $currentDate;

if (isset($_POST['btn-save']) && ($_POST['btn-save'] == 'save')) {

    $content = ($_POST['content']);
    $total_money = $_POST['total_money'];


    $sql_getID = "select max(id) form form";
    $getID = $conn->query($sql_getID);

    $sql = "INSERT INTO form(id, form_id, date_create, content, total_money, total_money_text, form_type, account_type, receipt, user, customer, warehouse, money_type, status) 
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

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<?php
include '../layouts/header.php';
?>
<body>
<div id="wrapper">

    <!-- Navigation -->
    <?php
    include '../layouts/navigation.php';
    ?>
    <div id="page-wrapper">
        <div class=container">
            <form role="form" method="post" action="../../server/phieuchitienmat.php">
                <div class="title">
                    <legend class="text-center"><strong>PHIẾU CHI TIỀN MẶT</strong></legend> 
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control">
                    </div>
                </div>

                <div class="table">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>TKĐU</th>
                            <th>Ngày PHHĐ</th>
                            <th>Số HĐ</th>
                            <th>Loại HĐ</th>
                            <th>Số tiền</th>
                            <th>Số tiền VNĐ</th>
                            <th>Tỷ lệ</th>
                            <th>Mã ĐC</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>N331</td>
                            <td>- -</td>
                            <td></td>
                            <td></td>
                            <td>19.032.871,00</td>
                            <td>19.032.871</td>
                            <td></td>
                            <td>711389</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </form>
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php
include '../layouts/script-footer.php';
?>
<script>
    $(document).ready(function () {
        $("#accountId").change(function () {
            var accountId = $('#accountId').val();
            accountId = accountId.replace("C", "");
            var accountName = $('#' + accountId).attr("class");
            $('#accountName').attr('value', accountName);
        });
    });
</script>
</body>
</html>


