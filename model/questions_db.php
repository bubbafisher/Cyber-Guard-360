<?php

function get_question($id){
    global $db;
    
    $query = 'SELECT * FROM questions
              WHERE id = :id';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $customer = $statement->fetch();
    $statement->closeCursor();
    
    return $customer;
    
} 

