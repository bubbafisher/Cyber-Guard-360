<?php

function get_question($question_id){
    global $db;
    
    $query = 'SELECT * FROM questions
              WHERE question_id = :question_id';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':question_id', $question_id);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    
    return $customer;
    
} 

function get_guideline_question($guideline){
    global $db;
    
    $query = 'SELECT * FROM questions
              WHERE guideline = :guideline
              ORDER BY question_id';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':guideline', $guideline);
    $statement->execute();
    $question = $statement->fetch();
    $statement->closeCursor();
    
    return $question;
}

