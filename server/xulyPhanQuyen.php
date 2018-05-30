<?php
    include 'config.php';
    if(isset ($_POST['btn_Luu']) && ($_POST['btn_Luu']=='Save') ) {
        $quyen = $_POST['quyen'];
        $id = $_POST['id'];
        $sql = "UPDATE users SET role = ".$quyen." WHERE id = ".$id;
        $result = $conn->query($sql);
        if (!$result){
            die("Errors: ".mysqli_error($conn));
        }else{
            header("Location:http://localhost/ahihi/views/pages/role.php");
        }
    }
?>
