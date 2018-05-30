<?php
    @session_start();
    session_unset("userInfo");
    header("Location:http://localhost:8888/ahihi/views/pages/login.php");
?>
