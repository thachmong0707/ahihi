<?php
    @session_start();
    session_unset("userInfo");
    session_unset("uid");
    header("Location:http://localhost/ahihi/views/pages/login.php");
?>
