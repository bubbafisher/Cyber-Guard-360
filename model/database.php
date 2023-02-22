<?php


    $dsn = 'mysql:host=localhost;dbname=CyberGuard360';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo 'Sorry, no DB';
        exit();
    }
?>
