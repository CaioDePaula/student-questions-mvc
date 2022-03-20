<?php

namespace App\controller;

use App\helpers\LoadHelper;

class NotFound
{
    public function index()
    {
        LoadHelper::view('not-found/index');
    }
}
