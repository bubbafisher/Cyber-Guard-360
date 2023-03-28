<?php

include ("../model/database.php");
include ('../model/questions_db.php');
include ("../model/survey_db.php");
include ("../model/answers_db.php");


$action = filter_input(INPUT_POST, 'action');

switch($action)
{
    case null:
    case 'begin':
        include('quiz_start.php');
        break;
    case 'start':
        $survey_id = create_survey(filter_input(INPUT_POST, 'userID'));
        $question = get_question(filter_input(INPUT_POST, 'questionID'));
        include('quiz.php');
        break;
    case 'next':
        if(filter_input(INPUT_POST, 'answer') != null)
        {
            $survey_id = filter_input(INPUT_POST, 'survey_id');
            $question_id = filter_input(INPUT_POST, 'question_id');
            $answer = filter_input(INPUT_POST, 'answer');
            if(filter_input(INPUT_POST, 'answer')=='yes')
                $question = get_question(filter_input(INPUT_POST, 'yes_id'));
            else
                $question = get_question(filter_input(INPUT_POST, 'no_id'));
        }
        include('quiz.php');
        break;
    case 'end':
        include('quiz_end.php');
        break;
}