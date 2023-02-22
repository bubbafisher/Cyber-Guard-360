<?php

include ("../model/database.php");
include ('../model/login_db.php');

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
    $_SESSION['password'] = $email; //stores email in session data
    
    
    $customer = login_cust($email);
    
    
    
    
    
}