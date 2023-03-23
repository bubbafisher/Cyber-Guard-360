<?php

include ("../model/database.php");
include ('../model/questions_db.php');


$action = filter_input(INPUT_POST, 'action');

switch($action)
{
    case null:
    case 'start':
        include('quiz_start.php');
        break;
    case 'next':
        $question = get_question(filter_input(INPUT_POST, 'questionID'));
        include('quiz.php');
        break;
    case 'end':
        include('quiz_end.php');
        break;
}