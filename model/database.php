<?php

    // use 45.27.16.116
    //  Port: 3306
    $dsn = 'mysql:host=localhost;dbname=cyberguard360';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
    
   
   
?>
