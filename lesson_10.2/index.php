<?php

declare(strict_types=1);

define('APP_DIR', __DIR__ . '/');

require 'classes/Figure.php';
require 'classes/Rectangle.php';
require 'classes/Circle.php';

try {
    $rectangle = new Rectangle(3,2);

} catch (Exception $error){

    echo $error->getMessage();
}


//echo $rectangle->area() . PHP_EOL;

try {
    $circle = new Circle(5);

} catch (Exception $error){

    echo $error->getMessage();
}

echo $circle->area() . PHP_EOL;


