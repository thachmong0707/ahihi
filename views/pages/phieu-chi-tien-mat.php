<?php
include "../../server/config.php";

// load STT into input fields
$sql_getID = "select max(id) from form";
$getID = $conn->query($sql_getID);
$id = (int)mysqli_fetch_array($getID)[0] + 1;
$currentDate = date("d-m-y");
$STT = "CTM" . $id . $currentDate;

// Load AccountType into select options
<<<<<<< HEAD
$sql_getAccountType = "select * from account_type";
$getAccountType = $conn->query($sql_getAccountType);
=======
// load STT
$sql_getAccountType = "select * from account_type";
$getAccountType = $conn->query($sql_getAccountType);
// fetch các kiểu
>>>>>>> 341d35c545eaa0bab38c73941badc18ff3f3d37d

// load Warehouse into select options
$sql_getWarehouse = "select * from warehouse";
$getWarehouse = $conn->query($sql_getWarehouse);

<<<<<<< HEAD
// load Money_type into select options
$sql_getMoneyType = "select * from money_type";
$getMoneyType = $conn->query($sql_getMoneyType);
=======
>>>>>>> 341d35c545eaa0bab38c73941badc18ff3f3d37d

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
<<<<<<< HEAD
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

    .table-title .add-new i {
        margin-right: 4px;
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

    table.table td i {
        font-size: 19px;
    }

    table.table td a.add i {
        font-size: 24px;
        margin-right: -1px;
        position: relative;
        top: 3px;
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
=======
<style>
    a:hover{

>>>>>>> 341d35c545eaa0bab38c73941badc18ff3f3d37d
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

        <div class="title">
            <p>PHIẾU CHI TIỀN MẶT</p>

        </div>


        <div class="body" style="font-family: 'Times New Roman'; color: #0d6aad;">
<<<<<<< HEAD
            <!-- <form role="form" method="post" action="../../server/phieuchitienmat.php"> -->
            <div class="header">
                <div class="clear" style="width: 100%;"></div>
                <div class="num">
                    <label style="float: left">Số thứ tự:</label>
                    <input class="form-control" name="" style="width: 70%" value="<?php echo $STT; ?>">
                </div>
                <div class="date-founded">
                    <label style="float: left">Ngày lập:</label>
                    <input class="form-control" name="" style="width: 50%"
                           value="<?php echo $currentDate; ?>"/>
                </div>
            </div>
            <div class="content">
                <div>
                    <div class="clear" style="width: 100%;"></div>
                    <div class="ma-khach" style="width: 20%">
                        <label>Mã Khách:</label><label id="hidden-label" class="<?php echo $id; ?>"></label>
                        <input class="form-control" id="customerId" style="width: 40%" disabled>
                    </div>
                    <div class="ho-ten" style="width: 30%">
                        <label>Họ Tên:</label>
                        <input class="form-control" id="customerName" style="width: 70%">
                    </div>
                    <div class="don-vi" style="width: 50%">
                        <label>Đơn vị:</label>
                        <input class="form-control" id="customerCompany" name="" style="width: 86%">
                    </div>
                    <div class="clear" style="width: 100%;"></div>
                </div>
                <div>
                    <div class="ma-khach" style="width: 20%">
                        <label style="width: 44%"></label>
                        &nbsp;<button type="button" style="width: 40%" id="btn-showListCustomers"
                                      data-target="#listCustomersModal" data-toggle="modal" class="btn btn-info">DS
                            KH
                        </button>
                    </div>
                    <div class="dia-chi" style="width: 80%">
                        <label>Địa chỉ:</label>
                        <input class="form-control" id="customerAddress" name="" style="width: 91%;">
                    </div>
                    <div class="clear" style="width: 100%;"></div>
                </div>
                <div>
                    <div class="ma-khach" style="width: 50%">
                        <label>Tài khoản:</label>
                        <select class="form-control" id="accountId" style="width: 20%;float: left;">
                            <?php
                            if ($getAccountType->num_rows > 0) {
                                // output data of each row
                                while ($row = $getAccountType->fetch_assoc()) {
                                    echo "<option id='" . $row['id'] . "' class='" . $row['name'] . "'>C" . $row['id'] . "</option>";
                                }
                            } ?>
                        </select>
                        <input class="form-control" id="accountName" style="width: 55%; color: #0d6aad; ">
                    </div>

                    <div class="don-vi" style="width: 50%">
                        <label>HĐ:</label>
                        <input class="form-control" name="" style="width: 20%;float: left;">
                        <input class="form-control" name="" style="width: 72%">
                    </div>
                    <div class="clear" style="width: 100%;"></div>
                </div>
                <div>
                    <div style="width: 100%; font-family: 'Times New Roman'; font-size: 20px">
                        <label style="float: left">Lý do:</label>
                        <input class="form-control" name="" style="width: 94%">
                    </div>
                    <div class="clear" style="width: 100%;"></div>
                </div>
                <div>
                    <div style="width: 100%; font-family: 'Times New Roman'; font-size: 20px">
                        <label style="float: left">Chứng từ gốc:</label>
                        <input class="form-control" name="" style="width: 88%">
                    </div>
                    <div class="clear" style="width: 100%;"></div>
                </div>
                <div>
                    <div class="ma-khach" style="width: 30%">
                        <label style="width: 18%">Kho:</label>
                        <select class="form-control" id="wareHouseId" style="width: 25%;float: left;">
                            <?php
                            if ($getWarehouse->num_rows > 0) {
                                // output data of each row
                                while ($row = $getWarehouse->fetch_assoc()) {
                                    echo "<option id='" . $row['name'] . "' class='" . $row['id'] . "' title='" . $row['address'] . "'>" . $row['name'] . "</option>";
                                }
                            } ?>
                        </select>
                        <input class="form-control" id="wareHouseAddress" style="width: 55%; color: #0d6aad; ">
                    </div>

                    <div class="don-vi" style="width: 50%">
                        <label style="width: 18%">Loại tiền:</label>
                        <select class="form-control" id="moneyTypeId" style="width: 25%;float: left;">
                            <?php
                            if ($getMoneyType->num_rows > 0) {
                                // output data of each row
                                while ($row = $getMoneyType->fetch_assoc()) {
                                    echo "<option id='" . $row['unit'] . "' class='" . $row['id'] . "' title='" . $row['name'] . "'
                                                    alt='" . $row['rate'] . "'>" . $row['unit'] . "</option>";
                                }
                            } ?>
                        </select>
                        <input class="form-control" id="moneyTypeName" style="width: 55%; color: #0d6aad; ">
                    </div>
                    <div class="ma-khach" style="width: 20%">
                        <label style="float: left">Tỷ giá:</label>
                        <input class="form-control" id="moneyTypeRate" style="width:68%">
                    </div>
                    <div class="clear" style="width: 100%;"></div>
                </div>
            </div>
            <div class="table-wrapper">
                <form id="tableForm" method="post" action="../../server/form_detail.php">
                    <table class="table table-striped table-bordered table-hover edit-table" id="edit-table">
                        <thead>
                        <tr>
                            <th>TKDU</th>
=======
            <form role="form" method="post" action="../../server/phieuchitienmat.php">
                <div class="header">
                    <div class="clear" style="width: 100%;"></div>
                    <div class="num">
                        <label style="float: left">Số thứ tự:</label>
                        <input class="form-control" name="" style="width: 70%" value="<?php echo $STT; ?>">
                    </div>
                    <div class="date-founded">
                        <label style="float: left">Ngày lập:</label>
                        <input class="form-control" name="" style="width: 50%"
                               value="<?php echo $currentDate; ?>"/>
                    </div>
                </div>
                <div class="content">
                    <div>
                        <div class="clear" style="width: 100%;"></div>
                        <div class="ma-khach" style="width: 20%">
                            <label>Mã Khách:</label>
                            <input class="form-control" name="" style="width: 40%" disabled>
                        </div>
                        <div class="ho-ten" style="width: 30%">
                            <label>Họ Tên:</label>
                            <input class="form-control" name="content" style="width: 70%">
                        </div>
                        <div class="don-vi" style="width: 50%">
                            <label>Đơn vị:</label>
                            <input class="form-control" name="" style="width: 86%">
                        </div>
                        <div class="clear" style="width: 100%;"></div>
                    </div>
                    <div>
                        <div class="ma-khach" style="width: 20%">
                            <label style="width: 44%"></label>
                            &nbsp;<button type="button" style="width: 40%" id="btn-showListCustomers"
                                        data-target="#listCustomersModal" data-toggle="modal" class="btn btn-info">DS KH
                            </button>
                        </div>
                        <div class="dia-chi" style="width: 80%">
                            <label>Địa chỉ:</label>
                            <input class="form-control" name="" style="width: 91%;">
                        </div>
                        <div class="clear" style="width: 100%;"></div>
                    </div>
                    <div>
                        <div class="ma-khach" style="width: 50%">
                            <label>Tài khoản:</label>
                            <select class="form-control" id="accountId" style="width: 20%;float: left;">
                                <?php
                                if ($getAccountType->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $getAccountType->fetch_assoc()) {
                                        echo "<option id='" . $row['id'] . "' class='" . $row['name'] . "'>C" . $row['id'] . "</option>";
                                    }
                                } ?>
                            </select>
                            <input class="form-control" id="accountName" style="width: 55%; color: #0d6aad; ">
                        </div>

                        <div class="don-vi" style="width: 50%">
                            <label>HĐ:</label>
                            <input class="form-control" name="" style="width: 20%;float: left;">
                            <input class="form-control" name="" style="width: 72%">
                        </div>
                        <div class="clear" style="width: 100%;"></div>
                    </div>
                    <div>
                        <div style="width: 100%; font-family: 'Times New Roman'; font-size: 20px">
                            <label style="float: left">Lý do:</label>
                            <input class="form-control" name="" style="width: 94%">
                        </div>
                        <div class="clear" style="width: 100%;"></div>
                    </div>
                    <div>
                        <div style="width: 100%; font-family: 'Times New Roman'; font-size: 20px">
                            <label style="float: left">Chứng từ gốc:</label>
                            <input class="form-control" name="" style="width: 88%">
                        </div>
                        <div class="clear" style="width: 100%;"></div>
                    </div>
                    <div>
                        <div class="ma-khach" style="width: 30%">
                            <label style="width: 18%">Kho:</label>
                            <select class="form-control" id="wareHouseId" style="width: 25%;float: left;">
                                <?php
                                if ($getWarehouse->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $getWarehouse->fetch_assoc()) {
                                        echo "<option id='" . $row['name'] . "' class='" . $row['id'] . "' title='".$row['address']."'>" . $row['name'] . "</option>";
                                    }
                                } ?>
                            </select>
                            <input class="form-control" id="wareHouseAddress" style="width: 55%; color: #0d6aad; ">
                        </div>

                        <div class="don-vi" style="width: 50%">
                            <label>Loại tiền:</label>
                            <input class="form-control" name="" style="width: 20%;float: left;">
                            <input class="form-control" name="" style="width: 55%">
                        </div>
                        <div class="ma-khach" style="width: 20%">
                            <label style="float: left">Tỷ giá:</label>
                            <input class="form-control" name="" style="width:68%">
                        </div>
                        <div class="clear" style="width: 100%;"></div>
                    </div>
                </div>

                <div class="table">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>TKĐU</th>
>>>>>>> 341d35c545eaa0bab38c73941badc18ff3f3d37d
                            <th>Ngày PHHĐ</th>
                            <th>Số HĐ</th>
                            <th>Loại HĐ</th>
                            <th>Số tiền</th>
                            <th>Số tiền VNĐ</th>
<<<<<<< HEAD
                            <th>Tỉ lệ</th>
                            <th>Mã ĐC</th>
                            <th>Hành động</th>
=======
                            <th>Tỷ lệ</th>
                            <th>Mã ĐC</th>
>>>>>>> 341d35c545eaa0bab38c73941badc18ff3f3d37d
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
<<<<<<< HEAD
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
                            <button type="button" class="btn btn-info add-new" style="margin-right: 15px; margin-bottom: 10px;"><i class="fa fa-plus"></i> Add New
                            </button>

                        </div>
                    </div>
                    <button type="button" id="sendForm">submitform</button>
                </form>

            </div>
            <div class="footer">
                <div>
                    <input class="form-control" id="accountNameTable" style="width: 50%;float: left;">
                    <label style="margin-left:10px; float: left; font-size: 20px"> Tổng số tiền: </label>
                    <input class="form-control" id="totalMoney" name="total_money" style="width: 20%;float: left;">
                    <div class="clear" style="float:left;width: 100%;"></div>
                </div>
                <div>

                    <input class="form-control" name="" id="moneyString">
                    <div class="clear" style="float:left;width: 100%;"></div>

                </div>
                <div>
                    <button name="btn-save" type="button" class="btn btn-default" id="btn-save" value="save">Lưu và In</button>
                    <button type="reset" id="resetFields" class="btn btn-default">Đóng</button>
                    <input class="form-control" name="" id="customerCompany2" style="width: 40%;color: #0d6aad;  ">
                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>
=======
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
                <div class="footer">
                    <div>
                        <input class="form-control" name="" style="width: 50%;float: left;">
                        <label style="margin-left:10px; float: left; font-size: 20px"> Tổng số tiền: </label>
                        <input class="form-control" name="total_money" style="width: 20%;float: left;">
                        <div class="clear" style="float:left;width: 100%;"></div>
                    </div>
                    <div>

                        <input class="form-control" name="">
                        <div class="clear" style="float:left;width: 100%;"></div>

                    </div>
                    <div>
                        <button name="btn-save" type="submit" class="btn btn-default" value="save">Lưu và In</button>
                        <button type="reset" class="btn btn-default">Đóng</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /#page-wrapper -->
>>>>>>> 341d35c545eaa0bab38c73941badc18ff3f3d37d

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
<<<<<<< HEAD
                            echo "<td id='" . $row['id'] . "' class='" . $row['fullname'] . "' title='" . $row['address'] . "' alt='" . $row['company'] . "'>
                                    <a class='choose selectCustomer' title='Chọn' data-toggle='tooltip'><i style='color:green' class='fa fa-check-circle' aria-hidden='true'></i></a>
                            </td></tr>";
=======
                            echo "<td><a class='btn'><i style='color: green' class='fa fa-check-circle' aria-hidden='true'></i></a></td></tr>";
>>>>>>> 341d35c545eaa0bab38c73941badc18ff3f3d37d
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
<<<<<<< HEAD
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
=======
    $(document).ready(function () {
>>>>>>> 341d35c545eaa0bab38c73941badc18ff3f3d37d

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
<<<<<<< HEAD
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
=======
            debugger;
        });

>>>>>>> 341d35c545eaa0bab38c73941badc18ff3f3d37d

        $('#listCustomers').DataTable({
            responsive: true
        });

<<<<<<< HEAD

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
                '<td><input type="text" class="form-control"></td>' +
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

=======
    });


>>>>>>> 341d35c545eaa0bab38c73941badc18ff3f3d37d
</script>


</body>
</html>


