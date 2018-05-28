</html>
</html>
<!DOCTYPE html>
<html lang="en">
<?php
    include '../layouts/header.php';
?>

    <?php

    include '../../server/config.php';
     $sql = " SELECT * FROM customers";

    // Thực thi câu truy vấn và gán vào $result
    $result = $conn->query($sql);
 ?>

        <body>

            <style type="text/css">
                .header-title {
                    padding: 15px 5px 15px 5px;
                }
                
                .body-content {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }
                
                .info {
                    color: blue;
                }
                
                .padding-row {
                    padding-top: 10px;
                    padding-bottom: 10px;
                }
                
                .body-content {
                    padding-top: 40px;
                    padding-bottom: 40px: 
                    background-color: black;
                }
            </style>
            <div class="container">
                <div class="body-content">
                <div class="header-title">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1 col-xs-6">
                            <h3 class="text-center">CÔNG TY ĐẠI HƯNG PHÁT</h3>
                            <h5 class="text-center">17- P.KD VLXH (BH)</h5>
                        </div>
                        <div class="col-md-4 col-md-offset-1 col-xs-6">
                            <h6 class="text-center">Mẫu số 02 -TT</h6>
                            <h5 class="text-center">( Ban hành theo QĐ số 15/2016/QĐ-BTC <br> ngày 20/03/2006 của Bộ trưởng BTC )</h5>
                        </div>

                    </div>
                    <div class="row text-center">
                        <h2><strong>PHIẾU CHI</strong></h2></div>
                </div>

                <div class="body-content">
                    <!-- <form class=""> -->
                    <div class="row padding-row">
                        <div class="col-md-5 col-md-offset-1 col-sm-5 col-xs-6">
                            <label>Người nhận tiền</label>
                            <label class="info">Đặng Minh Tâm (09001305</label>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <label>Địa chỉ:</label>
                            <label class="info">Kho Trà Nóc: Đặng Minh Tâm</label>
                        </div>
                    </div>
                    <div class="row padding-row">
                        <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-6">
                            <label>Lý do chi: </label>
                            <label class="info">Phí vận chuyển xi măng</label>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <label>Số tiền:</label>
                            <label class="info">1.650.000</label>
                        </div>
                    </div>
                    <div class="row padding-row">
                        <div class="col-md-5 col-md-offset-1">
                            <label>Chứng từ gốc:</label>
                            <label class="info">HĐ 164</label>
                        </div>
                    </div>
                    <div class="row padding-row">
                        <div class="col-md-5 col-md-offset-1">
                            <label>Viết bằng chữ: </label>
                            <label class="info">(Một triệu sáu trăm năm mươi ngàn đồng chẵn)</label>
                        </div>
                    </div>
                </div>
                <div class="table-detail">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã số</th>
                                        <th>Tên khách hàng</th>
                                        <th>TKDU</th>
                                        <th>Số tiền</th>
                
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>71009613</th>
                                        <th>Cty TNHH MTV NNK Khánh Vinh</th>
                                        <th>1.500.000</th>
                                        <th>1.500.000</th>
                                    </tr>

                                    <tr>
                                        <th>71009613</th>
                                        <th>Cty TNHH MTV NNK Khánh Vinh</th>
                                        <th>1.500.000</th>
                                        <th>1.500.000</th>
                                    </tr>
                                     <tr>
                                        <th class="text-right" colspan="3">Tổng tiền</th>
                                        <th>1.500.000</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    
                </div>
            </div>
        </div>
        </body>

</html>