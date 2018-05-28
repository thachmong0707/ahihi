<!DOCTYPE html>
<html lang="en">
<?php
    include '../layout/header.php';
?>

<?php
    
    include '../../src/server/config.php';
     $sql = "   SELECT * FROM form_status , users ,form 
                WHERE form_status.id = form.status 
                    and form.user = users.id
                    and form_type= 2 
                    and status=3";
 
    // Thực thi câu truy vấn và gán vào $result
    $result = $conn->query($sql);
 ?> 
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include '../layout/navigation.php';
        ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Duyệt Phiếu Chi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- <h2>Duyệt Phiếu</h2> -->
                        
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NGÀY TẠO</th>
                    <th>NGƯỜI TẠO PHIẾU</th>
                    <th>TRẠNG THÁI</th>
                    <th style="text-align: center;">ACTION</th>                   
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>                        
                        <td><?php echo $row["date_create"]; ?></td>
                        <td><?php echo $row["fullname"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>   
                        <td style="text-align: center;" >                            
                            <?php echo "<a href='update.php?id=" . $row['id'] . "'>Xem</a>"; ?>&nbsp;&nbsp;&nbsp;
                         </td>
                        
                        
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php
        include '../layout/script-footer.php';
    ?>
</body>

</html>
