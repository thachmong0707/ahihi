

<!DOCTYPE html>
<html lang="en">
<?php
    include '../layout/header.php';
?>

<?php
    
    include '../../src/server/config.php';
     $sql = " SELECT * FROM customers";
 
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
                    <h1 class="page-header">Danh sách khánh hàng</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <h2>Khách Hàng</h2>
           <!--  <h3>
            	<button type="button" class="btn btn-default">THÊM</button>
            	<button type="button" class="btn btn-default">SỬA</button>
            	<button type="button" class="btn btn-default">XÓA</button>
            </h3>     -->        
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th> FULL NAME</th>
                    <th>ADDRESS</th>
                    <th>COMPANY</th>                    
                    <!-- <th>Action</th>                     -->
                                       
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["fullname"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["company"]; ?></td>
                        <!-- <td>
                        	<h3 style="margin-top: -3px">
				            	<button type="button" class="btn btn-default">THÊM</button>
				            	<button type="button" class="btn btn-default">SỬA</button>
				            	<button type="button" class="btn btn-default">XÓA</button>
				            </h3>    
                        </td> -->
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
