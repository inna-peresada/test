<?php

namespace src\controllers;

use src\core\Viewer;

class Gallery
{
    public function index()
    {
        Viewer::view('gallery', 'index');
    }

    public function create()
    {
        Viewer::view('gallery', 'create');
    }
    public function delete()
    {
        Viewer::view('gallery', 'delete');
    }

}