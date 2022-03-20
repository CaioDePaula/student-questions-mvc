<?php

namespace App\controller;

use App\helpers\LoadHelper;
use App\model\QuestionModel;

class QuestionController
{
    public function index()
    {
        $questions = (new QuestionModel())->listQuestions();
        LoadHelper::view('questions/list', $questions);
    }

    public function post()
    {
        $data = $_POST;
        (new QuestionModel())->insertQuestions($data['duvida']);
        header('Location: /index.php/questions');
    }

}
