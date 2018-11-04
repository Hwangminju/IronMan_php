<?php
   $host = 'mydbinstance.c8qpurav57by.us-east-2.rds.amazonaws.com';
   $user = 'ikarus125';
   $pw = '!soma2018456852';
   $dbName = 'myDB';
   $connect = mysqli_connect($host, $user, $pw, $dbName);
 
   $id = $_POST[u_id];
   $pw = $_POST[u_pw];
   $lr = $_POST[u_lr];

   mysqli_set_charset($connect, "utf8");

   $sql = "INSERT INTO USERS(USERID, PASSWORD, lr) VALUES('$id', '$pw', '$lr')";
   $result = mysqli_query($connect, $sql);
   $sql = "CREATE TABLE user_$id (emg1 int(5) not null, emg2 int(5) not null, emg3 int(5) not null, gesture int(3) not null)";
   $result = mysqli_query($connect, $sql);

   // result of sql query
   if($result) {
      echo "1";
   } else {
      echo mysqli_errno($connect);
   }

   mysqli_close($connect);
?>
