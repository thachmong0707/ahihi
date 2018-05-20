<!DOCTYPE html>
<html lang="en">
<?php
    include '../layout/header.php';
?>
<body>

    
    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include '../layout/navigation.php';
        ?>
        <div id="page-wrapper"> 
            <div class="container" style="width: 100%">
                <div class="row">
                    <h4 class="header-title">Phiếu Thu Tiền Mặt</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="group-content">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label for="inputDate" class="col-form-label">Ngày Lập</label>
                                        <input type="date" class="form-control" id="inputDate">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputNumber" class="col-form-label">Số Thứ Tự</label>
                                        <input type="number" class="form-control" id="inputNumber">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="inputCustomerNumber" class="col-form-label">Mã Khách Hàng</label>
                                        <input type="text" class="form-control" id="inputCustomerNumber">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputCustomer" class="col-form-label">Họ Tên</label>
                                        <input type="text" class="form-control" id="inputCustomer">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputUnit" class="col-form-label">Đơn Vị</label>
                                        <input type="text" class="form-control" id="inputUnit">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress" class="col-form-label">Địa Chỉ</label>
                                    <input type="text" class="form-control" id="inputAddress" ="Địa Chỉ">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputAccount" class="col-form-label">Tài Khoản</label>
                                        <div class="form-group form-inline">
                                            <input type="text" class="form-control" id="inputAccountNumber">
                                            <input type="text" class="form-control" id="inputAccount">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputUnit" class="col-form-label">Hóa Đơn</label>
                                        <div class="form-group form-inline">
                                            <input type="text" class="form-control" id="inputUnit">
                                            <input type="text" class="form-control" id="inputUnitName">
                                        </div>
                                    </div>                    
                                </div>
                                <div class="form-group">
                                    <label for="inputReason" class="col-form-label">Lý Do</label>
                                    <input type="text" class="form-control" id="inputReason">
                                </div>
                                <div class="form-group">
                                    <label for="inputDocument" class="col-form-label">Chứng Từ Gốc</label>
                                    <input type="text" class="form-control" id="inputDocument">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="inputStoreNumber" class="col-form-label">Mã Kho</label>
                                        <div class="form-group form-inline">
                                            <input type="text" class="form-control" id="inputStoreNumber">
                                            <input type="text" class="form-control" id="inputStoreName">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="inputCashName" class="col-form-label">Loại Tiền</label>
                                        <div class="form-group form-inline">
                                            <input type="text" class="form-control" id="inputCash">
                                            <input type="text" class="form-control" id="inputCashName">
                                        </div>
                                    </div>   
                                    <div class="form-group col-md-2">
                                        <label for="inputRate" class="col-form-label">Tỷ Giá</label>
                                        <input type="text" class="form-control" id="inputRate">
                                    </div>                 
                                </div>
                                <div class="form-group">
                                    <div class="card-box">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Số Thứ Tự</th>
                                                <th>TKĐƯ</th>
                                                <th>Ngày PHHĐ</th>
                                                <th>Số HĐ</th>
                                                <th>Loại HĐ</th>
                                                <th>Số Tiền</th>
                                                <th>Số Tiền VN</th>
                                                <th>Tỷ Lệ</th>
                                                <th>Mã ĐC</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                 <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="inputMoney" class="col-form-label">Tạm Ứng Tiền VNĐ</label>
                                        <input type="text" class="form-control" id="inputMoneyNumber">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputMoney" class="col-form-label">Tổng Số Tiền</label>
                                        <input type="number" class="form-control" id="inputTotal">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputMoney" class="col-form-label">Viết Bằng Chữ</label>
                                    <input type="number" class="form-control" id="inputTotal">
                                </div>
                                <div class="form-row action-btn">
                                    <div class="form-group col-md-2">
                                        <button type="submit" class="btn btn-primary">Lưu và In</button>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <button type="submit" class="btn btn-primary">Xóa</button>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <button type="submit" class="btn btn-primary">Hoàn Lại</button>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <button type="submit" class="btn btn-primary">Đóng</button>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" id="inputCompleted">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php
        include '../layout/script-footer.php';
    ?>
</body>

</html>
