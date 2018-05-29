<!DOCTYPE html>
<html lang="en">
<?php
    include '../layouts/header.php';
?>

<?php
    include "../../server/config.php";
    $sql_getUser = "select id, fullname, username, role  from users";
    $getUser = $conn->query($sql_getUser);
    $users = mysqli_fetch_all($getUser);

    $sql_getRole = "SELECT id,name FROM roles order by id desc";
    $getRole = $conn->query($sql_getRole);
    $roles = mysqli_fetch_all($getRole);
    // echo"<br>";
    // print_r($roles);
    // echo"<br>";
    // die;
?>


<link rel="stylesheet" href="../../vendor/css/listUser.css"
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include '../layouts/navigation.php';
        ?>
        <div id="page-wrapper">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-12">
                          <h1 class="page-header">User
                              <small>Phân quyền</small>
                          </h1>
                      </div>
                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                          <thead>
                              <tr align="center">
                                  <th>STT</th>
                                  <th>Họ tên</th>
                                  <th>Username</th>
                                  <th>Quyền</th>
                                  <th>Xử lý</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                  foreach($users as $user){
                              ?>
                              <tr class="odd gradeX" align="center">
                                <form action='../../server/xulyPhanQuyen.php' method='post'>
                                  <?php
                                      foreach($user as $key => $value){
                                          if($key == 0){
                                              $id = $value;
                                          }
                                          if($key != 3){
                                              echo "<td>".$value."</td>";
                                          }else{?>
                                              <td><input type='text' name='id' value='<?php echo $id; ?>' hidden>
                                              <select id='inputState' class='form-control' name="quyen">
                                                  <?php
                                                      foreach($roles as $role){
                                                  ?>
                                                      <option <?php if($role[0] == $value) echo "selected"; ?>><?php echo $role[1]; ?></option>
                                                  <?php
                                                      }
                                                  ?>
                                              </select></td>
                                              <?php
                                          }
                                      }
                                  ?>
                                  <td><button type="submit" class="btn btn-primary" name="btn_Luu" value="Save">Lưu</button></td>
                                </form>
                              </tr>
                              <?php
                                  }
                              ?>
                          </tbody>
                      </table>
                  </div>
                  <!-- /.row -->
              </div>

        </div>
    <!-- /#wrapper -->
    <?php
        include '../layouts/script-footer.php';
    ?>

</body>
</html>
