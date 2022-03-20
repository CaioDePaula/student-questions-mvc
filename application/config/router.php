<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\controller\NotFound;
use App\controller\QuestionController;


return [
    'default' => NotFound::class,
    '/questions' => QuestionController::class
];
