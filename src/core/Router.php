<?php
namespace src\core;
class Router
{
    public function run()
    {
        $var = str_replace("/test/", "", $_SERVER["REQUEST_URI"]);
        $constPath = "src\controllers\\";
        $path = $constPath . (empty($var) ? 'home' : $var);
        if (!class_exists($path)) {
            $path = $constPath . "error";
        }
        $controller = new $path;
        $controller->index();
    }
}