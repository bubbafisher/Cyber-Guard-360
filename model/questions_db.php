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

