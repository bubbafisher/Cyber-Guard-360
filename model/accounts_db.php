<?php


function create_account($fName, $lName, $email, $phone, $bName, $add1, $add2, 
        $city, $state, $zip, $username, $password){
    
    global $db;
    $query = 'INSERT INTO accounts
            (firstName, lastName, email, phone, business, addLine1, addLine2,
                city, state, zipcode, username, password)
             VALUES  
                (:fName, :lName, :email, :phone, :bName, :add1, :add2, 
                    :city, :state, :zip, :username, :password)';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':fName', $fName);
    $statement->bindValue(':lName', $lName);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':bName', $bName);
    $statement->bindValue(':add1', $add1);
    $statement->bindValue(':add2', $add2);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':zip', $zip);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    
    $statement->execute();
    $statement->closeCursor();
     
}


function get_accounts(){
    global $db;
    $query = 'SELECT * FROM accounts
              ORDER BY username';
    
    $statement = $db->prepare($query);
    $statement->execute();
    $accounts =  $statement->fetchAll();
    $statement->closeCursor();
    
    return $accounts;
}

function login_cust($email, $password){
    global $db;
    
    $query = 'SELECT * FROM accounts
              WHERE email = :email and password = :password';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue('password', $password);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    
    return $customer;
    
} 

