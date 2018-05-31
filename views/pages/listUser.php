<!DOCTYPE html>
<html lang="en">
<?php
    include '../layouts/header.php';
?>

<?php
    include "../../server/config.php";
    $sql_getUser = "select u.id, fullname, username, r.name, info, picture from users u, roles r where u.role = r.id";
    $getUser = $conn->query($sql_getUser);
    $users = mysqli_fetch_all($getUser);
    $renderString = "";
    $defaultAvatar = "avatar.png";
    foreach($users as $user) {
        $renderString = $renderString."<tr>";
        foreach($user as $index => $attr) {
            if($index == 5){
                $renderString = $renderString."<td class=\"hide\">".$attr."</td>" ;
            }else{
                $renderString = $renderString."<td>".$attr."</td>" ;
            } 
        }



        $renderString = $renderString."<td>
                                            <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Xem\">
                                                <button  class=\"btn btn-primary btn-xs showModal\" data-title=\"Edit\" data-toggle=\"modal\"
                                                        data-target=\"#edit\">Xem
                                                </button>
                                              </p>
                                          </td>";

        $renderString = $renderString."</tr>";

    }
?>


<link rel="stylesheet" href="../../vendor/css/listUser.css"
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include '../layouts/navigation.php';
        ?>
        <div id="page-wrapper">
            <!-- show List User -->
            <h2>Users</h2>
                <p>Show all user on database</p>

                <!-- table  -->                
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="mytable" class="table table-bordred table-striped">

                            <thead>
                                <th>STT</th>
                                <th>Họ tên</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Xem chi tiết</th>
                                <th> More </th>

                            </thead>

                            <tbody>
                            <?php
                                echo $renderString;
                            ?>
                            </tbody>

                        </table>

                        <!-- <div class="clearfix"></div> -->
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
                <!-- end -->
                <!-- begin modal -->
                <div class="modal fade" id="userDetailModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <h4 class="modal-title" id="gridSystemModalLabel">Thông tin chi tiết</h4>
                             </div>
                             <div class="modal-body">
                                 <div class="avatar">
                                     <img id="user-avatar" src="../../vendor/img/<?php echo $defaultAvatar ?>"/>
                                 </div>
                                 <div class="row margin-top-20">
                                     <div class="col-sm-6">
                                         <div>
                                             <label>Họ tên</label>
                                             <p id="full-name">Võ Huyền Lan Uyên</p>
                                         </div>

                                         <div>
                                             <label>Username</label>
                                             <p id="username">lanuyen.uit</p>
                                         </div>

                                     </div>
                                     <div class="col-sm-6" >
                                         <div>
                                             <label>Thông tin</label>
                                             <p id="user-info">non dsaonf psa pfsa pfas òa dsk nfkds nfds kfdsf fs df ds fdsf fdsf \
                                                 f ds fsd fsd  fsd  dfsdfsd
                                             </p>
                                         </div>
                                         <div>
                                             <label>Role</label>
                                             <p id="user-role">employee</p>
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
                 <!-- end modal -->
        <!-- /#page-wrapper -->


    </div>
    <!-- /#wrapper -->
    <?php
        include '../layouts/script-footer.php';
    ?>

</body>
</html>
