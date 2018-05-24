<?php
    @session_start();
    session_unset("uid");
    header("Location:http://localhost/ahihi/view/page/login.php");
?>
