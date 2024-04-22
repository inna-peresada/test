<?php

namespace src\controllers;

use src\core\Viewer;

class About
{
    public function index()
    {
        Viewer::view('about', 'index');
    }
}