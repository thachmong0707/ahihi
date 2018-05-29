<?php
include "../../server/config.php";

// load STT into input fields
$sql_getID = "select max(id) from form";
$getID = $conn->query($sql_getID);
$id = (int)mysqli_fetch_array($getID)[0] + 1;
$currentDate = date("d-m-y");
$STT = "CTM" . $id . $currentDate;

// Load AccountType into select options
$sql_getAccountType = "select * from account_type";
$getAccountType = $conn->query($sql_getAccountType);

// load Warehouse into select options
$sql_getWarehouse = "select * from warehouse";
$getWarehouse = $conn->query($sql_getWarehouse);

// load Money_type into select options
$sql_getMoneyType = "select * from money_type";
$getMoneyType = $conn->query($sql_getMoneyType);

//Load list Users
$sql_getListCustomers = "select * from customers";
$getListCustomers = $conn->query($sql_getListCustomers);


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
<style type="text/css">
    /*  .table-wrapper {
          width: 700px;
          margin: 30px auto;
          background: #fff;
          padding: 20px;
          box-shadow: 0 1px 1px rgba(0,0,0,.05);
      }
      .table-title {
          padding-bottom: 10px;
          margin: 0 0 10px;
      }
      .table-title h2 {
          margin: 6px 0 0;
          font-size: 22px;
      }*/
    .table-title .add-new {
        float: right;
        height: 30px;
        font-weight: bold;
        font-size: 12px;
        text-shadow: none;
        min-width: 100px;
        border-radius: 50px;
        line-height: 13px;
    }

    .col-xs-2,.col-xs-1 label{
        text-align: right;
    }

    .table-title .add-new i {
        margin-right: 4px;
    }
    label{
        font-size: 12px;
    }
    table.table {
        table-layout: fixed;
    }

    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }

    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }

    table.table th:last-child {
        width: 100px;
    }

    table.table td a {
        cursor: pointer;
        display: inline-block;
        margin: 0 5px;
        min-width: 24px;
    }

    table.table td a.add {
        color: #27C46B;
    }

    table.table td a.edit {
        color: #FFC107;
    }

    table.table td a.delete {
        color: #E34724;
    }

    table.table td{
        font-size: 13px;
    }
    table.table th{
        font-size: 13px;
    }

    table.table td i {
        font-size: 19px;
    }

    table.table td a.add i {
        font-size: 24px;
        margin-right: -1px;
        position: relative;
        top: 3px;
    }

    .panel-body{
        background: #F6F5F5;
    }
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }

    table.table .form-control.error {
        border-color: #f50000;
    }

    table.table td .add {
        display: none;
    }
</style>
<!DOCTYPE html>
<html lang="en">
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
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                    <h2 style="text-align: center;">PHIẾU CHI TIỀN MẶT</h2>
            </div>
            <div class="form-group" style="text-align: right; padding-bottom: 20px;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label class="control-label" style="font-weight: normal;">Ngày lập:</label>
                    <label style="font-style: italic; padding-right: 20px; font-weight: normal;"><?php echo $currentDate; ?></label>
                    <label class="control-label" style="font-weight: normal;">Số thứ tự:</label>
                    <label style="font-style: italic; font-weight: normal;"><?php echo $STT; ?></label>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"">
                            <label class="control-label">Mã khách hàng:</label>
                            <label id="hidden-label" class="<?php echo $id; ?>"></label>
                        </div>
                       <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <input type="text" name="" class="form-control" value="" required="required" pattern="" title="" disabled="true" id="customerId">
                            <label id="hidden-label" class="<?php echo $id; ?>"></label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <button type="button" class="btn btn-primary" style="height: 34px;"
                            id="btn-showListCustomers" data-target="#listCustomersModal" data-toggle="modal">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" >
                            <label class="control-label">Họ tên:</label>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="text" name="" id="customerName" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" >
                            <label class="control-label">Đơn vị:</label>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <input type="text" name="" id="customerCompany" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" >
                            <label class="control-label">Địa chỉ:</label>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="" id="customerAddress" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                    </div> 
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" >
                            <label class="control-label">Tài khoản:</label>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <select name="" id="accountId" class="form-control" required="required">
                                <?php
                                    if ($getAccountType->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $getAccountType->fetch_assoc()) {
                                            echo "<option id='" . $row['id'] . "' class='" . $row['name'] . "'>C" . $row['id'] . "</option>";
                                        }
                                    } ?>
                            </select>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <input type="text" name="" id="accountName" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" >
                            <label class="control-label">Hợp đồng:</label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" >
                            <label class="control-label">Lý do:</label>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" >
                            <label class="control-label">Chứng từ gốc:</label>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" >
                            <label class="control-label">Kho:</label>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <select name="" id="wareHouseId" class="form-control" required="required">
                                <?php
                                    if ($getWarehouse->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $getWarehouse->fetch_assoc()) {
                                            echo "<option id='" . $row['name'] . "' class='" . $row['id'] . "' title='" . $row['address'] . "'>" . $row['name'] . "</option>";
                                        }
                                    } ?>
                            </select>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <input type="text" name="" id="wareHouseAddress" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" >
                            <label class="control-label">Loại tiền:</label>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <select name="" id="wareHouseId" class="form-control" required="required">
                                <?php
                                    if ($getMoneyType->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $getMoneyType->fetch_assoc()) {
                                            echo "<option id='" . $row['unit'] . "' class='" . $row['id'] . "' title='" . $row['name'] . "'
                                                            alt='" . $row['rate'] . "'>" . $row['unit'] . "</option>";
                                        }
                                    } ?>
                            </select>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <input type="text" name="" id="wareHouseAddress" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="margin-left: 170px;">
                            <label class="control-label">Tỷ giá:</label>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    
        <div>
            <div class="table-wrapper" style="background: #F6F5F5;">
                <form id="tableForm" method="post" action="../../server/form_detail.php">
                    <table class="table table-striped table-bordered table-hover edit-table" id="edit-table">
                        <thead>
                        <tr>
                            <th>TKDU</th>
                            <th>Ngày PHHĐ</th>
                            <th>Số HĐ</th>
                            <th>Loại HĐ</th>
                            <th>Số tiền</th>
                            <th>Số tiền VNĐ</th>
                            <th>Tỉ lệ</th>
                            <th>Mã ĐC</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>N1111</td>
                            <td>- -</td>
                            <td></td>
                            <td></td>
                            <td>111</td>
                            <td>50001011</td>
                            <td></td>
                            <td>4565</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>N11221</td>
                            <td>- -</td>
                            <td></td>
                            <td></td>
                            <td>22</td>
                            <td>123456</td>
                            <td></td>
                            <td>2222</td>
                            <td>
                                <a class="add" title="Add" data-toggle="tooltip"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="table-title">
                        <div class="row">
                            <button type="button" class="btn btn-danger add-new" style="margin-right: 15px; margin-bottom: 10px;"><i class="fa fa-plus"></i> Add New
                            </button>
                            <button id="sendForm" type="button" class="btn btn-danger add-new" style="margin-right: 15px; margin-bottom: 10px;" ><i class="fa fa-plus"></i> Submitform
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group" style="padding-top: 30px;">
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" >
                        <label class="control-label" style="text-align: right;">Tổng: </label>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <input type="text" name="" id="totalMoney" class="form-control" value="" required="required" pattern="" title="" disabled="true">
                    </div>
                    
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <input type="text" name="" id="moneyString" class="form-control" value="" required="required" pattern="" title="" disabled="true">
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                        <input type="text" name="" id="accountNameTable" class="form-control" value="" required="required" pattern="" title="" disabled="true">
                    </div>

                </div>
                <div class="form-group" style="padding-top: 30px;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;" >
                        <button type="button" id="btn-save" name="btn-save" class="btn btn-danger add-new" style="margin-right: 15px; margin-bottom: 10px;"><i class="glyphicon glyphicon-floppy-save"></i> Lưu và in
                            </button>
                            <button type="button" id="resetFields" class="btn btn-danger add-new" style="margin-right: 15px; margin-bottom: 10px;"><i class="glyphicon glyphicon-remove"></i> Đóng
                            </button>
                    </div>
                </div>
            </form>


            
            <!-- </form> -->
        </div>
    </div>

</div>
<!-- /#wrapper -->

<div class="modal fade" id="listCustomersModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="gridSystemModalLabel">Danh sách các Khách hàng</h4>
            </div>
            <div class="modal-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="listCustomers">
                    <thead>
                    <tr>
                        <th>Họ và tên</th>
                        <th>Công ty</th>
                        <th>Địa chỉ</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    //Load list Users
                    $sql_getListCustomers = "select * from customers";
                    $getListCustomers = $conn->query($sql_getListCustomers);

                    if ($getListCustomers->num_rows > 0) {
                        // output data of each row
                        while ($row = $getListCustomers->fetch_assoc()) {
                            echo "<tr><td>" . $row['fullname'] . "</td>";
                            echo "<td>" . $row['company'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "<td id='" . $row['id'] . "' class='" . $row['fullname'] . "' title='" . $row['address'] . "' alt='" . $row['company'] . "'>
                                    <a class='choose selectCustomer' title='Chọn' data-toggle='tooltip' data-dismiss='modal'><i style='color:green' class='fa fa-check-circle' aria-hidden='true'></i></a>
                            </td></tr>";
                        }
                    } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<?php
include '../layouts/script-footer.php';
?>
<script>
    $(function () {
        $('body').on('change','#customerCompany', function(){
            // alert($('#customerCompany').val());
            $('#customerCompany2').attr('value', $('#customerCompany').val());
        });

        $('#customerCompany2').attr('value', $('#customerCompany').val());

        $('#btn-save').on('click',function(){
            var id= $('#customerId').val();
            var name = $('#customerName').val();
            var company= $('#customerCompany').val();
            var address = $('#customerAddress').val();
            var data={id, name, company, address};

            $.ajax({
                type: "POST",
                url:'../../server/ajax_phieuchitienmat.php',
                data: data,
                success: function (response) {
                    alert('Send data Success');
                    // console.log(response);
                }
            });

        });

        $("#customerName, #customerAddress, #customerCompany").change(function () {
            const customerId = $('#hidden-label').attr('class');
            $("#customerId").attr('value', customerId);
        });

        $("#accountId").change(function () {
            var accountId = $('#accountId').val();
            accountId = accountId.replace("C", "");
            var accountName = $('#' + accountId).attr("class");
            $('#accountName').attr('value', accountName);
        });

        $("#wareHouseId").change(function () {
            var wareHouseId = $('#wareHouseId').val();
            var wareHouseAddress = $('#' + wareHouseId).attr("title");
            $('#wareHouseAddress').attr('value', wareHouseAddress);
        });

        $("#moneyTypeId").change(function () {
            var moneyTypeId = $('#moneyTypeId').val();
            var moneyTypeName = $('#' + moneyTypeId).attr("title");
            var moneyTypeRate = $('#' + moneyTypeId).attr("alt");
            $('#moneyTypeName').attr('value', moneyTypeName);
            $('#moneyTypeRate').attr('value', moneyTypeRate);
        });

        $('body').on('click', '.selectCustomer',function () {
            var customerId = $(this).parent().attr('id');
            var customerName = $(this).parent().attr('class');
            var customerAddress = $(this).parent().attr('title');
            var customerCompany = $(this).parent().attr('alt');
            $('#customerId').attr('value', customerId);
            $('#customerName').attr('value', customerName);
            $('#customerCompany').attr('value', customerCompany);
            $('#customerAddress').attr('value', customerAddress);
            $('#customerCompany2').attr('value', customerCompany);
        });

        $('#listCustomers').DataTable({
            responsive: true
        });


        $('body').on('mouseover', '.edit-table tbody tr', function () {
            var accountType = $(this).valueOf()[0].cells[0].innerText;
            // console.log(accountType)[0].cells[0].innerText;
            var money = $(this).valueOf()[0].cells[5].innerText;
            $('#totalMoney').attr('value', money);
            var $moneyString = ConvertMoneyNumberToString(money) + ' đồng';
            $('#moneyString').attr('value', $moneyString);

            var form = $("#tableForm");
            $.ajax({
                type: "POST",
                url: '../../server/ajax_getAccountName.php ?>',
                data: {'id': accountType},
                success: function (response) {
                    // console.log(response);
                    $('#accountNameTable').attr('value', response);
                }
            });
        });

        // Edit table
        $('[data-toggle="tooltip"]').tooltip();
        var actions = $(".edit-table td:last-child").html();
        // Append table with add row form on add new button click
        $(".add-new").click(function () {
            $(this).attr("disabled", "disabled");
            var index = $("body .edit-table tbody tr:last-child").index();

            var row = '<tr>' +
                '<td><input type="text" class="form-control"></td>' +
                '<td><input type="text" class="form-control" value=" - -"></td>' +
                '<td><input type="text" class="form-control" value=" "></td>' +
                '<td><input type="text" class="form-control" value=" "></td>' +
                '<td><input type="text" class="form-control"></td>' +
                '<td><input type="text" class="form-control" disabled></td>' +
                '<td><input type="text" class="form-control" value=" "></td>' +
                '<td><input type="text" class="form-control"></td>' +
                '<td>' + actions + '</td>' +
                '</tr>';
            $(".edit-table").append(row);
            $(".edit-table tbody tr").eq(index + 1).find(".add, .edit").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        // Add row on add button click
        // $(document).on("click", ".add", function(){
        //     var empty = false;
        //     var input = $(this).parents("tr").find('input[type="text"]');
        //     input.each(function(){
        //         if(!$(this).val()){
        //             $(this).addClass("error");
        //             empty = true;
        //         } else{
        //             $(this).removeClass("error");
        //         }
        //     });
        //     $(this).parents("tr").find(".error").first().focus();
        //     if(!empty){
        //         input.each(function(){
        //             $(this).parent("td").html($(this).val());
        //         });
        //         $(this).parents("tr").find(".add, .edit").toggle();
        //         $(".add-new").removeAttr("disabled");
        //     }
        // });
        // Customize
        $(document).on("click", ".add", function () {
            var input = $(this).parents("tr").find('input[type="text"]');
            input.each(function () {
                $(this).parent("td").html($(this).val());
            });
            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").removeAttr("disabled");
        });
        // Edit row on edit button click
        $(document).on("click", ".edit", function () {
            $(this).parents("tr").find("td:not(:last-child)").each(function () {
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });
            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").attr("disabled", "disabled");
        });
        // Delete row on delete button click
        $(document).on("click", ".delete", function () {
            $(this).parents("tr").remove();
            $(".add-new").removeAttr("disabled");
        });
    });


// function Conver Money Number to Money String
    var ChuSo = new Array(" không ", " một ", " hai ", " ba ", " bốn ", " năm ", " sáu ", " bảy ", " tám ", " chín ");
    var Tien = new Array("", " nghìn", " triệu", " tỷ", " nghìn tỷ", " triệu tỷ");

    //1. Hàm đọc số có ba chữ số;
    function DocSo3ChuSo(baso) {
        var tram;
        var chuc;
        var donvi;
        var KetQua = "";
        tram = parseInt(baso / 100);
        chuc = parseInt((baso % 100) / 10);
        donvi = baso % 10;
        if (tram == 0 && chuc == 0 && donvi == 0) return "";
        if (tram != 0) {
            KetQua += ChuSo[tram] + " trăm ";
            if ((chuc == 0) && (donvi != 0)) KetQua += " linh ";
        }
        if ((chuc != 0) && (chuc != 1)) {
            KetQua += ChuSo[chuc] + " mươi";
            if ((chuc == 0) && (donvi != 0)) KetQua = KetQua + " linh ";
        }
        if (chuc == 1) KetQua += " mười ";
        switch (donvi) {
            case 1:
                if ((chuc != 0) && (chuc != 1)) {
                    KetQua += " mốt ";
                }
                else {
                    KetQua += ChuSo[donvi];
                }
                break;
            case 5:
                if (chuc == 0) {
                    KetQua += ChuSo[donvi];
                }
                else {
                    KetQua += " lăm ";
                }
                break;
            default:
                if (donvi != 0) {
                    KetQua += ChuSo[donvi];
                }
                break;
        }
        return KetQua;
    }


    function ConvertMoneyNumberToString(money) {
        var lan = 0;
        var i = 0;
        var so = 0;
        var KetQua = "";
        var tmp = "";
        var ViTri = new Array();
        if (money < 0) return "Số tiền âm !";
        if (money == 0) return "Không đồng !";
        if (money > 0) {
            so = money;
        }
        else {
            so = -money;
        }
        if (money > 8999999999999999) {
            //money = 0;
            return "Số quá lớn!";
        }
        ViTri[5] = Math.floor(so / 1000000000000000);
        if (isNaN(ViTri[5]))
            ViTri[5] = "0";
        so = so - parseFloat(ViTri[5].toString()) * 1000000000000000;
        ViTri[4] = Math.floor(so / 1000000000000);
        if (isNaN(ViTri[4]))
            ViTri[4] = "0";
        so = so - parseFloat(ViTri[4].toString()) * 1000000000000;
        ViTri[3] = Math.floor(so / 1000000000);
        if (isNaN(ViTri[3]))
            ViTri[3] = "0";
        so = so - parseFloat(ViTri[3].toString()) * 1000000000;
        ViTri[2] = parseInt(so / 1000000);
        if (isNaN(ViTri[2]))
            ViTri[2] = "0";
        ViTri[1] = parseInt((so % 1000000) / 1000);
        if (isNaN(ViTri[1]))
            ViTri[1] = "0";
        ViTri[0] = parseInt(so % 1000);
        if (isNaN(ViTri[0]))
            ViTri[0] = "0";
        if (ViTri[5] > 0) {
            lan = 5;
        }
        else if (ViTri[4] > 0) {
            lan = 4;
        }
        else if (ViTri[3] > 0) {
            lan = 3;
        }
        else if (ViTri[2] > 0) {
            lan = 2;
        }
        else if (ViTri[1] > 0) {
            lan = 1;
        }
        else {
            lan = 0;
        }
        for (i = lan; i >= 0; i--) {
            tmp = DocSo3ChuSo(ViTri[i]);
            KetQua += tmp;
            if (ViTri[i] > 0) KetQua += Tien[i];
            if ((i > 0) && (tmp.length > 0)) KetQua += ',';//&& (!string.IsNullOrEmpty(tmp))
        }
        if (KetQua.substring(KetQua.length - 1) == ',') {
            KetQua = KetQua.substring(0, KetQua.length - 1);
        }
        KetQua = KetQua.substring(1, 2).toUpperCase() + KetQua.substring(2);
        return KetQua;//.substring(0, 1);//.toUpperCase();// + KetQua.substring(1);
    }


// function insert data form_detail
    $('#sendForm').on('click', function () {
        var data = getJson();
        console.log(data);
        $.ajax({
            type: "POST",
            url: '../../server/ajax_form_detail.php',
            data: data,
            success: function (response) {
                alert('Thêm dữ liệu thành công');
                // console.log(response);
            }
        });
    });

    function getJson() {
        var table = document.getElementById('edit-table');
        var tr = table.getElementsByTagName('tr');
        var jObject = {}
        var arr = [];
        for (var i = 0; i < tr.length; i++) {
            var td = tr[i].getElementsByTagName('td');

            arr[i] = [];
            for (var j = 0; j < td.length - 1; j++) {
                arr[i].push(td[j].innerHTML);
                jObject['table_tr' + i + 'td' + j] = td[j].innerHTML;
            }
        }
        return jObject;
    }

</script>


</body>
</html>


