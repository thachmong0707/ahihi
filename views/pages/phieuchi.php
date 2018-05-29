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
                    padding: 5px;
                }
                
                .body-content {
                    padding-top: 10px;
                    padding-bottom: 10px;
                }
                
                .info {
                    color: blue;
                    font-weight: 400;
                }
                
                label.sign {
                    font-weight: 400;
                    font-size: 13px;
                }
                
                @media(max-width: 1000px) {
                    label.sign {
                        font-size: 11px;
                    }
                }
                
                .padding-row {
                    padding-top: 7px;
                    padding-bottom: 7px;
                }
                
                td {
                    font-style: italic;
                }
                
                .money-total {
                    font-weight: 700;
                }
                
                .company-name {
                    padding-top: 10px;
                }
                
                .exception-col {
                    padding-left: 7px;
                    padding-right: 7px;
                }
                .date-sign{
                    margin-right: 10%;
                }
            </style>
            <div class="container">
                <div class="body-wrapper">
                    <div class="header-title">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1 col-xs-6 company-name">
                                <h3 class="text-center">CÔNG TY ĐẠI HƯNG PHÁT</h3>
                                <h5 class="text-center">17- P.KD VLXH (BH)</h5>
                            </div>
                            <div class="col-md-5 col-xs-6">
                                <h6 class="text-center">Mẫu số 02 -TT</h6>
                                <h5 class="text-center">( Ban hành theo QĐ số 15/2016/QĐ-BTC <br> ngày 20/03/2006 của Bộ trưởng BTC )</h5>
                                <h5 class="text-center">Số: Load số id của nó lên đây</h5>
                            </div>

                        </div>
                        <div class="row text-center">
                            <h2><strong>PHIẾU CHI</strong></h2></div>
                    </div>

                    <div class="body-content">
                        <!-- <form class=""> -->
                        <div class="row padding-row">
                            <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-6">
                                <label>Người nhận tiền:</label>
                                <label class="info">Đặng Minh Tâm (09001305</label>
                            </div>
                            <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-6">
                                <label>Địa chỉ:</label>
                                <label class="info">Kho Trà Nóc. Đặng Minh Tâm</label>
                            </div>
                        </div>
                        <div class="row padding-row">
                            <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-6">
                                <label>Lý do chi: </label>
                                <label class="info">Phí vận chuyển xi măng</label>
                            </div>
                            <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-6">
                                <label>Số tiền:</label>
                                <label class="info">1.650.000</label>
                            </div>
                        </div>
                        <div class="row padding-row">
                            <div class="col-md-5 col-md-offset-1
                        ">
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
                            <div class="col-md-10 col-md-offset-1 col-12">
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
                                            <td>71009613</td>
                                            <td>Cty TNHH MTV NNK Khánh Vinh</td>
                                            <td>1.500.000</td>
                                            <td>1.500.000</td>
                                        </tr>

                                        <tr>
                                            <td>71009613</td>
                                            <td>Cty TNHH MTV NNK Khánh Vinh</td>
                                            <td>1.500.000</td>
                                            <td>1.500.000</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="money-total">Tổng tiền</td>
                                            <td>1.500.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row padding-row">
                            <p class="text-right date-sign"><strong>
                                Ngày ... tháng ... năm ...
                            </strong></p>
                        </div>
                        <div class="row padding-row">
                            <div class="col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1">
                                <label class="sign">(Thủ trưởng)</label>
                                <label class="sign">(Ký, họ tên)</label>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <label class="sign">(Kế toán trưởng)</label>
                                <label class="sign">(Ký, họ tên)</label>
                            </div>
                            <div class="col-md-2 col-xs-2 exception-col">
                                <label class="sign">(Kế toán thanh toán)</label>
                                <label class="sign">(Ký, họ tên)</label>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <label class="sign">(Người nhận tiền)</label>
                                <label class="sign">(Ký, họ tên)</label>
                            </div>
                            <div class="col-md-2 col-xs-2">
                                <label class="sign">(Thủ qũy)</label>
                                <label class="sign">(Ký, họ tên)</label>
                            </div>
                        </div>
                    </div>
                </div>
        </body>

</html>