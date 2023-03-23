<?php

function create_survey($account_id){
    
    global $db;
    $query = 'INSERT INTO survey
            (account_id)
             VALUES  
                (:account_id)';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':account_id', $account_id);
    
    $statement->execute();
    $statement->closeCursor();
     
}

