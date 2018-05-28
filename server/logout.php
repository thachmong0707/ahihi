<?php
    @session_start();
    session_unset("userInfo");
    header("Location:http://localhost/ahihi/views/pages/login.php");
?>
