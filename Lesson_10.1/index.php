<?php
declare(strict_types = 1);

define('APP_DIR', __DIR__ . '/');

require APP_DIR . 'classes/SomeText.php';
require APP_DIR . 'classes/SomeTextHeir.php';

$secondText =new SomeTextHeir();

echo $secondText->print() . PHP_EOL;