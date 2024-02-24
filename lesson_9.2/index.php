<?php
declare(strict_types = 1);

define('APP_DIR', __DIR__ . '/');

require APP_DIR . 'classes/TaskManager.php';
require APP_DIR . 'enum/Enumeration.php';

//$test = ['one' => 1, 'two' => 2, 'three' => 3];
//
//$str = json_encode($test);
//
//$str1 = json_decode($str, true);
//
//var_dump($str1);

$taskManager = new TaskManager('test.txt');

$taskManager->addTask('Hello' , 2);


$taskManager->getTaskList();
//unset($taskManager);

//$a = ['first' => 1, 'second' => 2, ['sdf' => 123]];
//echo json_encode($a) . PHP_EOL;
//$b = json_decode('{"first":1,"second":2,"0":{"sdf":123}}', true);
//var_dump($b);


// один обьект - один список завдань , в конструктор передавать название файла куда записывать задание или от куда читать
// приоритет от 0 до 10
// не работать в каждом методе с файлом
// в конструкторе если файл существует  считывать все в массив тасков и работать с массивом, потом в деструкторе перезаписываешь файл
// use JSON format for saving data in file. User json_encode\json_decode for work with arrays
