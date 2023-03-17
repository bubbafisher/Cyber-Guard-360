<?php

include ("../model/database.php");
include ('../model/accounts_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'create_account';
    
    }   
}

elseif ($action == 'create_account') {
    $fName = filter_input(INPUT_POST, 'fName' );
    $lName = filter_input(INPUT_POST, 'lName'  );
    $email = filter_input(INPUT_POST, 'email'  );
    $phone = filter_input(INPUT_POST, 'phone'  );
    $bName  = filter_input(INPUT_POST, 'bName'  );
    $add1 = filter_input(INPUT_POST, 'add1'  );
    $add2  = filter_input(INPUT_POST, 'add2'  );
    $city = filter_input(INPUT_POST, 'city'  );
    $state = filter_input(INPUT_POST, 'state'  );
    $zip = filter_input(INPUT_POST, 'country'  );
    $username = filter_input(INPUT_POST, 'user'  );
    $password = filter_input(INPUT_POST, 'password'  );
    
    create_account($fName, $lName, $email, $phone, $bName, $add1,
            $add2, $city, $state, $zip, $username, $password);
    
    include '../login_page/login_page.php';
}