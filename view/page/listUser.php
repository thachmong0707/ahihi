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
            <?php
                include '../../src/wrapper/execute-query.php';
            ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php
        include '../layout/script-footer.php';
    ?>
</body>

</html>
