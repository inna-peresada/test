<?php

namespace src\core;

class Viewer
{
    public static function view(string $name1, string $name2, array $data = []) : void
    {
        include_once __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . $name1. DIRECTORY_SEPARATOR . $name2 . ".php";
    }
}