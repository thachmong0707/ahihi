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
            <!-- show List User -->
            <h2>Users</h2>
              <p>Show all user on database</p>
              <div class="table-responsive">


                          <table id="mytable" class="table table-bordred table-striped">

                              <thead>
                              <th>STT</th>
                              <th>Họ tên</th>
                              <th>Usernam</th>
                              <th>Role</th>
                              <th>Xem chi tiết</th>

                              </thead>

                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Võ Huyền Lan Uyên</td>
                                  <td>lanuyen.uit</td>
                                  <td>employee</td>
                                  <td>
                                      <p data-placement="top" data-toggle="tooltip" title="Xem">
                                          <button  class="btn btn-primary btn-xs showModal" data-title="Edit" data-toggle="modal"
                                                   data-target="#edit">Xem
                                          </button>
                                      </p>
                                  </td>
                              </tr>

                              <tr>
                                  <td>2</td>
                                  <td>Nguyễn Thị Hiền</td>
                                  <td>hien.uit</td>
                                  <td>employee</td>
                                  <td>
                                      <p data-placement="top" data-toggle="tooltip" title="Xem">
                                          <button class="btn btn-primary btn-xs showModal" data-title="Edit" data-toggle="modal"
                                                  data-target="#edit">Xem
                                          </button>
                                      </p>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Lê Thiện Bảo</td>
                                  <td>bao.uit</td>
                                  <td>employee</td>
                                  <td>
                                      <p data-placement="top" data-toggle="tooltip" title="Xem">
                                          <button class="btn btn-primary btn-xs showModal" data-title="Edit" data-toggle="modal"
                                                  data-target="#edit">Xem
                                          </button>
                                      </p>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>Nguyễn Trọng Duy Linh</td>
                                  <td>linh.uit</td>
                                  <td>employee</td>
                                  <td>
                                      <p data-placement="top" data-toggle="tooltip" title="Xem">
                                          <button class="btn btn-primary btn-xs showModal" data-title="Edit" data-toggle="modal"
                                                  data-target="#edit">Xem
                                          </button>
                                      </p>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>Nguyễn Thạch Mộng</td>
                                  <td>mong.uit</td>
                                  <td>employee</td>
                                  <td>
                                      <p data-placement="top" data-toggle="tooltip" title="Xem">
                                          <button class="btn btn-primary btn-xs showModal" data-title="Xem" data-toggle="modal"
                                                  data-target="#edit">Xem
                                          </button>
                                      </p>
                                  </td>
                              </tr>


                              </tbody>

                          </table>

                          <ul class="pagination pull-right">
                              <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                          </ul>

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
