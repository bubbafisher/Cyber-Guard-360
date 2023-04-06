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
        create_survey(filter_input(INPUT_POST, 'userID'));
        $survey_id = get_survey(filter_input(INPUT_POST, 'userID'));
        $question = get_question(filter_input(INPUT_POST, 'questionID'));
        include('quiz.php');
        break;
    case 'back':
        $survey_id = get_survey_by_id(filter_input(INPUT_POST, 'survey_id'));
        $question = get_question(get_last_question(filter_input(INPUT_POST, 'survey_id'))['question_id']);
        include('quiz.php');
        break;
    case 'next':
        if(filter_input(INPUT_POST, 'answer') != null)
        {
            $survey_id = filter_input(INPUT_POST, 'survey_id');
            $question_id = filter_input(INPUT_POST, 'question_id');
            $answer = filter_input(INPUT_POST, 'answer');
            if(empty(get_answer($survey_id, $question_id))) //Check if question has been answered yet
                create_answer($survey_id, $question_id, $answer); //Post answer to DB
            else
                change_answer($survey_id, $question_id, $answer); //Change answer on DB
            $survey_id = get_survey_by_id(filter_input(INPUT_POST, 'survey_id'));
            if(filter_input(INPUT_POST, 'answer')=='yes') //Check to see if answer is yes
            {
                if(filter_input(INPUT_POST, 'yes_id')==-1) //Check to see if yes value is -1
                {
                    $question = get_guideline_question(filter_input(INPUT_POST, 'guideline')+1); //Get next guideline's question and see if its valid
                    if($question!=null)
                        include('quiz.php');
                    else
                        include('quiz_end.php');
                }
                else
                {
                    $question = get_question(filter_input(INPUT_POST, 'yes_id')); //Get next question
                    include('quiz.php');
                }
            }
            else
            {
                if(filter_input(INPUT_POST, 'no_id')==-1) //Check to see if no value is -1
                {
                    if(filter_input(INPUT_POST, 'guideline')>0) //Is this outside the prelude questions?
                    {
                        $question = get_guideline_question(filter_input(INPUT_POST, 'guideline')+1); //Get next guideline's question and see if its valid
                        if($question!=null)
                            include('quiz.php');
                        else
                            include('quiz_end.php');
                    }
                    else //The user does not need the quiz
                            include('quiz_end.php');  
                }
                else
                {
                    $question = get_question(filter_input(INPUT_POST, 'no_id')); //Get next question
                    include('quiz.php');
                }
            }
        }
        break;
}