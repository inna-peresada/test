<?php
require_once "vendor/autoload.php";

use src\core\router;

$router = new router();
$router->run();

