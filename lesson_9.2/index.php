<?php
declare(strict_types = 1);

define('APP_DIR', __DIR__ . '/');

require APP_DIR . 'classes/TaskManager.php';
require APP_DIR . 'enum/TaskStatus.php';


$taskManager = new TaskManager('tasks.json');

try {
    $taskManager->addTask('Learn php' ,2);

} catch (Exception $error){

    echo $error->getMessage();
}

try {
    $taskManager->addTask('Learn php' ,4);

} catch (Exception $error){

    echo $error->getMessage();
}

try {
    $taskManager->addTask('Learn php' ,9);

} catch (Exception $error){

    echo $error->getMessage();
}


//
//
$taskManager->completeTask(2);
//

var_dump($taskManager->getTaskList());


