<?php

function login_cust($email){
    global $db;
    
    $query = 'SELECT * FROM login
              WHERE email = :email';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    
    return $customer;
    
} 

