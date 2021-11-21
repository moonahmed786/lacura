<?php

    $servername = "localhost";
    $username = "lacura_hyiplac";
    $password = "b*X?GDT_9^QEYUU9";
    $dbname = "lacura_hyiplac";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // sql to delete a record
    $sql = "DELETE 
    FROM
        users 
    WHERE
        emailv = 0 
        AND created_at < DATE_SUB(
        NOW(),
        INTERVAL 24 HOUR)";
    
    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();

?>