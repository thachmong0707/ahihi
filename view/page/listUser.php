<!DOCTYPE html>
<html lang="en">
<?php
    include '../layout/header.php';
?>


<link rel="stylesheet" href="../css/listUser.css"
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
             <div class="col-md-12">

                         <div class="table-responsive">


                             <table id="mytable" class="table table-bordred table-striped">

                                 <thead>
                                 <th>STT</th>
                                 <th>Họ tên</th>
                                 <th>Username</th>
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

                             <div class="clearfix"></div>
                             <!--<ul class="pagination pull-right">-->
                                 <!--<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>-->
                                 <!--<li class="active"><a href="#">1</a></li>-->
                                 <!--<li><a href="#">2</a></li>-->
                                 <!--<li><a href="#">3</a></li>-->
                                 <!--<li><a href="#">4</a></li>-->
                                 <!--<li><a href="#">5</a></li>-->
                                 <!--<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>-->
                             <!--</ul>-->

                         </div>
                 </div>

                 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <h4 class="modal-title" id="gridSystemModalLabel">Thông tin chi tiết</h4>
                             </div>
                             <div class="modal-body">
                                 <div class="avatar">
                                     <img src="../img/avatar.png"/>
                                 </div>
                                 <div class="row margin-top-20">
                                     <div class="col-sm-6">
                                         <div>
                                             <label>Họ tên</label>
                                             <p>Võ Huyền Lan Uyên</p>
                                         </div>

                                         <div>
                                             <label>Username</label>
                                             <p>lanuyen.uit</p>
                                         </div>

                                     </div>
                                     <div class="col-sm-6" >
                                         <div>
                                             <label>Thông tin</label>
                                             <p>non dsaonf psa pfsa pfas òa dsk nfkds nfds kfdsf fs df ds fdsf fdsf \
                                                 f ds fsd fsd  fsd  dfsdfsd
                                             </p>
                                         </div>
                                         <div>
                                             <label>Role</label>
                                             <p>employee</p>
                                         </div>





                                     </div>
                                 </div>

                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             </div>
                         </div><!-- /.modal-content -->
                     </div><!-- /.modal-dialog -->
                 </div>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../javascript/modal.js">

</script>






</html>
