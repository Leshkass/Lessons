<?php
// lesson 8

declare(strict_types = 1);

require 'classes/Workers.php';

try {
    $employee = new Workers('Nick', 'tester');

} catch (Exception $error){

    echo $error->getMessage();
}

echo $employee->getData();

