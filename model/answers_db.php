<?php

function get_answer($survey_id, $question_id){
    global $db;
    
    $query = 'SELECT * FROM accounts
              WHERE survey_id = :survey_id and question_id = :question_id';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':survey_id', $survey_id);
    $statement->bindValue(':question_id', $question_id);
    $statement->execute();
    $answer = $statement->fetch();
    $statement->closeCursor();
    
    return $customer;
    
} 

function create_answer($survey_id, $question_id, $answer){
    
    global $db;
    $query = 'INSERT INTO answers
            (survey_id, question_id, answer)
             VALUES  
                (:survey_id, :question_id, :answer)';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':survey_id', $survey_id);
    $statement->bindValue(':question_id', $question_id);
    $statement->bindValue(':answer', $answer);
    
    $statement->execute();
    $statement->closeCursor();
     
}
