<?php
    $adminString = "<li>
        <a href='#'><i class='fa fa-wrench fa-fw'></i> Admin<span class='fa arrow'></span></a>
        <ul class='nav nav-second-level'>
            <li>
                <a href='listUser.php'>Danh sách nhân viên</a>
            </li>

            <li>
                <a href='role.php'>Phân quyền</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>";

    $managerString = "<li>
        <a href='#'><i class='fa fa-sitemap fa-fw'></i> Quản lý<span class='fa arrow'></span></a>
        <ul class='nav nav-second-level'>
            
            <li>
                <a href='danhsachphieuthu.php'>Danh sach phiếu thu</a>
            </li>

            
            <li>
                <a href='#'>Danh sách phiếu chi <span class='fa arrow'></span></a>
                <ul class='nav nav-third-level'>
                    <li>
                    <a href='duyetphieuchi.php'>Duyệt phiếu chi</a>
                    </li>
                    <li>
                        <a href='phieudaduyet.php'>Phiếu đã duyệt</a>
                    </li>
                    <li>
                        <a href='phieudangchan.php'>Phiếu đang chặn</a>
                    </li>
                </ul>
                <!-- /.nav-third-level -->
            </li>
            <li>
                <a href='danhsachkhachhang.php'>Danh sách khách hàng</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>"
?>

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Chức năng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="phieu-thu-tien-mat.php">Tạo phiếu thu</a>
                    </li>
                    <li>
                        <a href="phieu-chi-tien-mat.php">Tạo phiếu chi</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                <?php
                    if( $_SESSION['userInfo']['role'] == 3)
                        echo $adminString;
                    if($_SESSION['userInfo']['role'] == 2 or $_SESSION['userInfo']['role'] == 3)
                        echo $managerString;
                ?>
        </ul>
    </div>
    
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
