<?php
include "../../server/config.php";

// load STT into input fields
$sql_getID = "select max(id) from form";
$getID = $conn->query($sql_getID);
$id = (int)mysqli_fetch_array($getID)[0] + 1;
$currentDate = date("d-m-y");
$STT = "TTM" . $id . $currentDate;

// Load AccountType into select options
// load STT
$sql_getAccountType = "select * from account_type";
$getAccountType = $conn->query($sql_getAccountType);
// fetch các kiểu

// load Warehouse into select options
$sql_getWarehouse = "select * from warehouse";
$getWarehouse = $conn->query($sql_getWarehouse);


//Load list Users
$sql_getListCustomers = "select * from customers";
$getListCustomers = $conn->query($sql_getListCustomers);

?>
<style>
    a:hover{

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
            <p>PHIẾU THU TIỀN MẶT</p>

        </div>


        <div class="body" style="font-family: 'Times New Roman'; color: #0d6aad;">
            <form role="form" method="post" action="../../server/luuphieuthu.php">
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
                            <input class="form-control" name="" id="customerID" style="width: 40%; background-color: white;" disabled>
                        </div>
                        <div class="ho-ten" style="width: 30%">
                            <label>Họ Tên:</label>
                            <input class="form-control" name="content" id="customerName" style="width: 70%">
                        </div>
                        <div class="don-vi" style="width: 50%">
                            <label>Đơn vị:</label>
                            <input class="form-control" name="" id="customerUnit" style="width: 86%">
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
                            <input class="form-control" name="" id="customerAddress" style="width: 91%;">
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
                        <div class="ma-khach" style="width: 30%">
                            <label style="width: 18%">Kho:</label>
                            <select class="form-control" id="wareHouseId" style="width: 25%;float: left;">
                                <?php
                                if ($getWarehouse->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $getWarehouse->fetch_assoc()) {
                                        echo "<option id='" . $row['id'] . "' class='" . $row['name'] . "' title='".$row['address']."'>" . $row['id'] . "</option>";
                                    }
                                } ?>
                            </select>
                            <input class="form-control" id="wareHouseName" style="width: 55%; color: #0d6aad; ">
                        </div>

                        <div class="don-vi" style="width: 50%">
                            <label>Loại tiền:</label>
                             <select class="form-control" id="unitSpecies" style="width: 25%;float: left;">
                                <option>VND</option>
                                <option>USD</option>
                            </select>
                            <input class="form-control" name="" id="money" style="width: 55%">
                        </div>
                        <div class="ma-khach" style="width: 20%">
                            <label style="float: left">Tỷ giá:</label>
                            <input class="form-control" name="" id="unit" style="width:68%; background-color: white;" disabled="">
                        </div>
                        <div class="clear" style="width: 100%;"></div>
                    </div>
                </div>

                <div class="table">
                    <table class="table table-striped table-bordered table-hover" id="table-phieuthu">
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
                            <td>C331</td>
                            <td>- -</td>
                            <td></td>
                            <td></td>
                            <td style="width:5%"><input name="" id="money-number" style="border: none; background-color: #f5f5f5;" disabled></td>
                            <td style="width:5%"><input name="" id="money-number-VND" style="border: none; background-color: #f5f5f5;" disabled></td>
                            <td><input name="" id="unit-column" style="border: none; width:35px; background-color: #f5f5f5;" disabled></td>
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
                        <input class="form-control" name="total_money" id="total_money" style="width: 20%;float: left; background-color: white" disabled>
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
                        <th>Mã KH</th>
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
                            echo "<tr class='onRow'><td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['fullname'] . "</td>";
                            echo "<td>" . $row['company'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "<td><a class='btn' data-dismiss='modal'><i style='color: green' class='fa fa-check-circle' aria-hidden='true'></i></a></td></tr>";
                        }
                    } ?>
                    </tbody>
                </table>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

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

        $("#wareHouseId").change(function () {
            var wareHouseId = $('#wareHouseId').val();
            

        });


        $('#listCustomers').DataTable({
            responsive: true
        });

          $("#unitSpecies").change(function () {
            var unitSpecies = $('#unitSpecies').val();
            if(unitSpecies == 'VND'){
                var unit = 1;
                $('#unit').attr('value', unit);
            }else{
                var unit = 2;
                $('#unit').attr('value', unit);
            }
        });

          $('#money').change(function(){
            var money = $('#money').val();
            var unit = $('#unit').val();
            $('#money-number').attr('value', money);
            $('#unit-column').attr('value', unit);
            if(unit == 1){
                $('#money-number-VND').attr('value', money);
                $('#total_money').attr('value', money);
            }else if(unit == 2){
                $('#money-number-VND').attr('value', money * 22768);
                $('#total_money').attr('value', money * 22768);
            }
          });

    });

    $(function(){
        $('#listCustomers tr').click(function (e){
            var id = $(this).closest('.onRow').find('td:nth-child(1)').text();
            var name = $(this).closest('.onRow').find('td:nth-child(2)').text();
            var company = $(this).closest('.onRow').find('td:nth-child(3)').text();
            var address = $(this).closest('.onRow').find('td:nth-child(4)').text();

            $('#customerID').val(id);
            $('#customerName').val(name);
            $('#customerUnit').val(address);
            $('#customerAddress').val(address);
        });
    }); 


</script>


</body>
</html>


