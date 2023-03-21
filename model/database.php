<?php

    // use 45.27.16.116
    //  Port: 3306
    $dsn = 'mysql:host=45.27.16.116;dbname=cyberguard360';
    $username = 'webuser';
    $password = 'capstone2023';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
    
   
   
?>
