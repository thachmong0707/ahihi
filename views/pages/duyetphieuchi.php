<!DOCTYPE html>
<html lang="en">
<?php
    include '../layouts/header.php';
?>

<?php
    
    include '../../server/config.php';
     $sql = " SELECT * FROM form WHERE form_type= 2 and status=2";
 
    // Thực thi câu truy vấn và gán vào $result
    $result = $conn->query($sql);
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
                    <h1 class="page-header">Danh Sách Phiếu Chi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <h2>Duyệt Phiếu</h2>
                        
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>FORM_ID</th>
                    <th>DATE_CREATE</th>
                    <th>CONTENT</th>
                    <th>TOTAL_MONEY</th>
                    <th>TOTAL_MONEY_TEXT</th>
                    <!-- <th>FORM_TYPE</th> -->
                    <th>ACCOUNT_TYPE</th>
                    <th>RECEIPT</th>
                    <th>USER</th>
                    <th>CUSTOMER</th>
                    <th>WAREHOUSE</th>
                    <th>MONEY_TYPE</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["form_id"]; ?></td>
                        <td><?php echo $row["date_create"]; ?></td>
                        <td><?php echo $row["content"]; ?></td>
                        <td><?php echo $row["total_money"]; ?></td>
                        <td><?php echo $row["total_money_text"]; ?></td>
                        <!-- <td><?php echo $row["form_type"]; ?></td> -->
                        <td><?php echo $row["account_type"]; ?></td>
                        <td><?php echo $row["receipt"]; ?></td>
                        <td><?php echo $row["user"]; ?></td>
                        <td><?php echo $row["customer"]; ?></td>
                        <td><?php echo $row["warehouse"]; ?></td>
                        <td><?php echo $row["money_type"]; ?></td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php
        include '../layouts/script-footer.php';
    ?>
</body>

</html>
