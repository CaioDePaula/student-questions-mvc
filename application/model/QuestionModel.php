<?php

namespace App\model;

class QuestionModel
{
    private $keyData = 'questions';

    public function listQuestions()
    {
        $questions = (isset($_SESSION[$this->keyData]) && $_SESSION[$this->keyData]) ? $_SESSION[$this->keyData] : [];

        return [
            $this->keyData => $questions
        ];
    }

    public function insertQuestions($data)
    {
        if (!isset($data) || is_null($data)) {
            throw new Exception('Error dados invalidos!');
        }

        $questions = $this->listQuestions();
        $questionsToJoinNewQuestions = $questions[$this->keyData];
        $beforeTotalQuestions = count($questionsToJoinNewQuestions);

        $questionsToJoinNewQuestions[] = $data;
        $_SESSION[$this->keyData] = $questionsToJoinNewQuestions;

        $questions = $this->listQuestions();
        $questionsNewItemAdd = $questions[$this->keyData];
        $currentTotalQuestions = count($questionsNewItemAdd);

        if (!($currentTotalQuestions > $beforeTotalQuestions)) {
            throw new Exception('Error falha ao inserir dados!');
        }

        return true;
    }
    
}
