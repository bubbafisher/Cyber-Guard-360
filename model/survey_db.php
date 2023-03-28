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
    $statement->closeCursor();
}

function get_survey($account_id){
    //Return Survey ID
    global $db;
    $query = 'SELECT * FROM survey
              WHERE account_id = :account_id
              ORDER BY survey_id DESC;';

    $statement = $db->prepare($query);
    $statement->bindValue(':account_id', $account_id);
    $statement->execute();
    $survey_id = $statement->fetch();
    $statement->closeCursor();

    return $survey_id;
}

function get_survey_by_id($survey_id){
    //Return Survey ID
    global $db;
    $query = 'SELECT * FROM survey
              WHERE survey_id = :survey_id;';

    $statement = $db->prepare($query);
    $statement->bindValue(':survey_id', $survey_id);
    $statement->execute();
    $survey_id = $statement->fetch();
    $statement->closeCursor();

    return $survey_id;
}

