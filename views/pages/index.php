<!DOCTYPE html>
<html lang="en">
<?php
    include '../layouts/header.php';
?>

<?php
    include '../../server/config.php';
    $sql_user = 'select count(id) from users;';
    // Thực thi câu truy vấn và gán vào $result
    $result = $conn->query($sql_user);
    while ( $row = mysqli_fetch_row($result) ) {
        $users = $row;
    }

    $sql_phieuthu = 'SELECT count(*) FROM `form` WHERE `form_type` = 1';
    $result = $conn->query($sql_phieuthu);
    while ( $row = mysqli_fetch_row($result) ) {
        $form_thu = $row;
    }

    $sql_customer = 'SELECT count(*) FROM `customers`';
    $result = $conn->query($sql_customer);
    while ( $row = mysqli_fetch_row($result) ) {
        $customer = $row;
    }

    $sql_phieuchi = 'SELECT count(*) FROM `form` WHERE `form_type` = 2';
    $result = $conn->query($sql_phieuchi);
    while ( $row = mysqli_fetch_row($result) ) {
        $form_chi = $row;
    }
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include '../layouts/navigation.php';
        ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color: #337ab7">Quản Lý Thu - Chi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $customer[0];?></div>
                                    <div>Tổng số khách hàng</div>
                                </div>
                            </div>
                        </div>
                        <a href="danhsachkhachhang.php">
                            <div class="panel-footer">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cog fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $form_thu[0];?></div>
                                    <div>Phiếu thu</div>
                                </div>
                            </div>
                        </div>
                        <a href='danhsachphieuthu.php'>
                            <div class="panel-footer">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-edit fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $form_chi[0];?></div>
                                    <div>Phiếu chi</div>
                                </div>
                            </div>
                        </div>
                        <a href='phieudaduyet.php'>
                            <div class="panel-footer">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $users[0];?></div>
                                    <div>Tổng số nhân viên</div>
                                </div>
                            </div>
                        </div>
                        <a href="listUser.php">
                            <div class="panel-footer">
                                <span class="pull-left">Xem chi tiết</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php
        include '../layouts/script-footer.php';
    ?>
</body>

</html>
