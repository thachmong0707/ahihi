<?php

  include "config.php";

  $sql = 'SELECT * FROM form_status';
  $result = $conn->query($sql);
  if (!$result)
    die("Errors: ".mysqli_error($conn));
  else {
    while ( $row = mysqli_fetch_row($result) ) {
      echo "id:".$row[0]."<br>\n";
      echo "name:".$row[1]."<br>\n";
    }
  }

  // echo "Rows selected: ".$result->num_rows."<br>\n";
  // mysqli_free_result($result);
  // mysqli_close($conn);
?>  