<?php
    @session_start();
    session_unset("uid");
    header("Location:http://localhost:8888/ahihi/view/page/login.php");
?>
