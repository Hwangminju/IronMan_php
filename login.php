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

  $sql = "SELECT IF(strcmp(PASSWORD,'$pw'),0,1) pw_chk FROM USERS WHERE USERID = '$id'";
  $result = mysqli_query($conn, $sql);
  mysqli_query($conn, "CREATE TABLE user_$id (emg1 int(5) not null, emg2 int(5) not null, emg3 int(5) not null, gesture int(3) not null, primary key(gesture))");

  // result of sql query
  if($result)
  {
    $row = mysqli_fetch_array($result);
 
    if(is_null($row[pw_chk]))
    {
      echo "Can not find ID";
    } else {
      echo "$row[pw_chk]";
    }
  }
  else {
   echo mysql_errno($conn);
  }
  mysql_close($conn);
?>
