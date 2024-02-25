<?php
declare(strict_types = 1);

define('APP_DIR', __DIR__ . '/');

require APP_DIR . 'classes/TaskManager.php';
require APP_DIR . 'enum/TaskStatus.php';


try {

    $taskManager = new TaskManager('tasks.json');

} catch (Exception $error){

    echo $error->getMessage();
}


$taskManager->deleteTask(5);

print_r($taskManager->getTaskList());

//$taskManager->addTask('php learn' , 4);
//$taskManager->addTask('php learn' , 2);
//$taskManager->addTask('php learn' , 5);
//
//
//$taskManager->completeTask(2);
//
//print_r($taskManager->getTaskList());


