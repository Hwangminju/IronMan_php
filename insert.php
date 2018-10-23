<?php
    $host = 'mydbinstance.c8qpurav57by.us-east-2.rds.amazonaws.com';
    $user = 'ikarus125';
    $pw = '!soma2018456852';
    $dbName = 'myDB';
    $conn = mysqli_connect($host, $user, $pw, $dbName);
    
    $emg1 = $_POST[emg1];
    $emg2 = $_POST[emg2];
    $emg3 = $_POST[emg3];
    $gesture = $_POST[gesture];
    $id = $_POST[u_id];
    
    mysqli_set_charset($conn, "utf8");
    
    $result = mysqli_query($conn, "INSERT INTO user_$id (emg1, emg2, emg3, gesture)");
    
    if($result)
    {
        echo "1";
    } else {
        echo "0";
    }
    
    mysql_close($conn);
?>

