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
              <table class="table">
                <thead>
                  <tr>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                  </tr>
                  <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                    <td>john@example.com</td>
                  </tr>
                  <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                    <td>john@example.com</td>
                  </tr>
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
