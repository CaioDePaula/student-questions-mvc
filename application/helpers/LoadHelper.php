<?php

namespace App\helpers;


class LoadHelper
{
    public static function view($nameView, $data=null)
    {
        if (!is_null($data)) {
            extract($data);
        }

        require_once __DIR__ . '/../view/' . $nameView . '.php';
    }
}
