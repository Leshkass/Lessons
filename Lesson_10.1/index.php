<?php
declare(strict_types = 1);

define('APP_DIR', __DIR__ . '/');

require APP_DIR . 'classes/SomeText.php';
require APP_DIR . 'classes/SomeTextHeir.php';

$test = new SomeText();

$test1 =new SomeTextHeir();

echo $test1->printHeir() . PHP_EOL;