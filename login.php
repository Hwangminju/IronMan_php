<?php
   $host = 'mydbinstance.c8qpurav57by.us-east-2.rds.amazonaws.com';
   $user = 'ikarus125';
   $pw = '!soma2018456852';
   $dbName = 'myDB';
   $conn = mysqli_connect($host, $user, $pw, $dbName);  

  $id = $_POST[u_id];
  $pw = $_POST[u_pw]; 

  // $id = 'joy';
  // $pw = '1111';
  mysqli_set_charset($conn, "utf8");
  $sql_lr = "SELECT * FROM USERS WHERE USERID='$id'";
  $result_lr = mysqli_query($conn, $sql_lr);
  $row_lr = mysqli_fetch_array($result_lr);

  $sql = "SELECT IF(strcmp(PASSWORD,'$pw'),0,1) pw_chk FROM USERS WHERE USERID = '$id'";
  $result = mysqli_query($conn, $sql);

  // result of sql query
  if($result)
  {
    $row = mysqli_fetch_array($result);
 
    if(is_null($row[pw_chk]))
    {
      echo "Can not find ID";
    } else {
      echo "$row[pw_chk]"."$row_lr[lr]";
    }
  }
  else {
   echo mysql_errno($conn);
  }
  mysql_close($conn);
?>
