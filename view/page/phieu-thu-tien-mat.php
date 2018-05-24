<?php
/**
 * Created by PhpStorm.
 * User: LTB
 * Date: 5/17/2018
 * Time: 9:24 AM
 */
?>
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

        <div class="title">
            <p>PHIẾU THU TIỀN MẶT</p>
        </div>


        <div class="body" style="font-family: 'Times New Roman'; color: #0d6aad;">
            <form role="form" action="../../src/phieuthu/luuphieuthu.php" method="post">
            <div class="header">
                <div class="clear" style="width: 100%;"></div>
                <div class="num">
                    <label style="float: left">Số thứ tự:</label>
                    <input class="form-control" name="" style="width: 70%">
                </div>
                <div class="date-founded">
                    <label style="float: left">Ngày lập:</label>
                    <input class="form-control" name="" style="width: 50%">
                </div>
            </div>
            <div class="content">
                <div>
                    <div class="clear" style="width: 100%;"></div>
                    <div class="ma-khach" style="width: 20%">
                        <label>Mã Khách:</label>
                        <input class="form-control" name="customerID" style="width: 40%">
                    </div>
                    <div class="ho-ten" style="width: 30%">
                        <label>Họ Tên:</label>
                        <input class="form-control" name="" style="width: 70%">
                    </div>
                    <div class="don-vi" style="width: 50%">
                        <label>Đơn vị:</label>
                        <input class="form-control" name="" style="width: 86%">
                    </div>
                    <div class="clear" style="width: 100%;"></div>
                </div>
                <div>
                    <div class="ma-khach" style="width: 20%">
                        &nbsp;
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
                        <select class="select-acccount">
                            <option value="N1111">N1111</option>
                            <option value="N1112">N1112</option>
                        </select>
                       <!--  <input class="form-control" name="" style="width: 20%;float: left;"> -->
                        <input class="form-control" name="" style="width: 55%; color: #0d6aad; ">
                    </div>

                    <div class="don-vi" style="width: 50%">
                        <label>HĐ:</label>
                        <input class="form-control" name="" style="width: 20%;float: left;">
                        <input class="form-control" name="" style="width: 72%">
                    </div>
                    <div class="clear" style="width: 100%;"></div>
                </div>
                <div >
                    <div style="width: 100%; font-family: 'Times New Roman'; font-size: 20px">
                        <label style="float: left">Lý do:</label>
                        <input class="form-control" name="" style="width: 94%">
                    </div>


                    <div class="clear" style="width: 100%;"></div>
                </div>
                <div>
                    <div class="ma-khach" style="width: 30%">
                        <label>Mã kho:</label>
                        <input class="form-control" name="" style="width: 20%;float: left;">
                        <input class="form-control" name="" style="width: 50%">
                    </div>

                    <div class="don-vi" style="width: 50%">
                        <label>Loại tiền:</label>
                        <input class="form-control" name="" style="width: 20%;float: left;">
                        <input class="form-control" name="" style="width: 55%">
                    </div>
                    <div class="ma-khach" style="width: 20%">
                        <label style="float: left">Tỷ giá:</label>
                        <input class="form-control" name="" style="width:68%" >
                    </div>
                    <div class="clear" style="width: 100%;"></div>
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
            <div class="footer">
                <div>
                    <input class="form-control" name="" style="width: 50%;float: left;">
                    <label style="margin-left:10px; float: left; font-size: 20px"> Tổng số tiền: </label>
                    <input class="form-control" name="" style="width: 20%;float: left;">
                    <div class="clear" style="float:left;width: 100%;"></div>
                </div>
                <div class="show-text-money">
                    <label class="money">Số tiền:</label>
                    <div class="clear" style="float:left;width: 100%;"></div>
                </div>
                <div>
                    <button type="submit" class="btn btn-default">Lưu và In</button>
                    <button type="reset" class="btn btn-default">Xóa</button>
                    <button type="submit" class="btn btn-default">Hoàn Lại</button>
                    <button type="reset" class="btn btn-default">Đóng</button>
                    <input class="form-control" name="" style="width: 40%;color: #0d6aad;  ">
                </div>
            </div>
            </form>
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

