<?php

include ("../model/database.php");
include ('../model/accounts_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'cust_login';
    
    }   
}

elseif ($action == 'login'){
    session_start();    //starts user session
    $email = filter_input(INPUT_POST, 'email'); //gets email input
    $password = filter_input(INPUT_POST, 'password'); //gets input password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    if ($email == ""){
        echo 'Incorrect Email or Password ';
     
    }
    
    else{
    $_SESSION['password'] = $email; //stores email in session data
    
    
    $account = login_cust($email, $hashedPassword);
    
    
    include ('../logged_in/logged_in.php');
    
    }
    
}