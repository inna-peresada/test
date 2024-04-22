<?php

namespace src\controllers;

use src\core\Viewer;

class Error
{
    public function index()
    {
        Viewer::view('error', 'index');
    }
}