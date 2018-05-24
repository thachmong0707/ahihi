<?php
    @session_start();
    include 'config.php';

    if(isset ($_POST['btn_login']) && ($_POST['btn_login']=='Login') ) {
      // if(isset($_POST['username'])  && isset($_POST['password'])){
          $username = $_POST['username'];
          $password = $_POST['password'];
    // }else{
    //     echo "that bai";
    // }
      $sql = "SELECT id FROM users where username ='". $username ."'  and password = '".$password."' ";
      // echo $sql;
      $result = $conn->query($sql);

          if ($result->num_rows > 0){
              $_SESSION['uid'] = mysqli_fetch_array($result)[0];

              header("Location:http://localhost:8888/ahihi/view/page/index.php");
          }
          else {
              header("Location:http://localhost:8888/ahihi/view/page/login.php");
          }

      }
      // while ( $row = mysqli_fetch_row($result) ) {
      //     echo "id:".$row[0]."<br>\n";
      //     echo "fullname:".$row[1]."<br>\n";
?>
