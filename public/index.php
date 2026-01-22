<?php

require_once __DIR__ . '/../vendor/autoload.php';

use BeautyBook\Controllers\HelloController;

$controller = new HelloController();
echo $controller->sayHello();