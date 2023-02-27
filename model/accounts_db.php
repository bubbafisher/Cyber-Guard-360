<?php

function get_accounts(){
    global $db;
    $query = 'SELECT * FROM login_info
              ORDER BY username';
    
    $statement = $db->prepare($query);
    $statement->execute();
    $accounts =  $statement->fetchAll();
    $statement->closeCursor();
    
    return $accounts;
}

function login_cust($email, $password){
    global $db;
    
    $query = 'SELECT * FROM login_info
              WHERE email = :email and password = :password';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue('password', $password);
    $statement->execute();
    $account = $statement->fetch();
    $statement->closeCursor();
    
    return $account;
    
} 

