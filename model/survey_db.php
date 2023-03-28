<?php

function create_survey($account_id){
    //Create survey
    global $db;
    $query = 'INSERT INTO survey
            (account_id)
             VALUES  
                (:account_id)';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':account_id', $account_id);
    
    $statement->execute();
    //Return Survey ID
    $query = 'SELECT * FROM survey
              WHERE account_id = :account_id
              ORDER BY survey_id DESC';

    $statement = $db->prepare($query);
    $statement->bindValue(':account_id', $account_id);
    $statement->execute();
    $survey_id = $statement->fetch();
    $statement->closeCursor();
    
    return $survey_id;
}

