<?php
    @session_start();
    include 'config.php';

    if(isset ($_POST['btn_login']) && ($_POST['btn_login']=='Login') ) {
          $username = $_POST['username'];
          $password = $_POST['password'];
      $sql = "SELECT * FROM users where username ='". $username ."'  and password = '".$password."' ";
      // echo $sql;
      $result = $conn->query($sql);
          if ($result->num_rows > 0){
              $_SESSION['userInfo'] = mysqli_fetch_array($result);
              header("Location:http://localhost:8888/ahihi/views/pages/index.php");
          }
          else {
              header("Location:http://localhost:8888/ahihi/views/pages/login.php");
          }
      }

?>
