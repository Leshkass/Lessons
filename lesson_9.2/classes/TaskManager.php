<?php
declare(strict_types=1);

class TaskManager
{
    private string $filePath;

    private array $taskArray = [];


    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;

        if(file_exists($this->filePath)) {

            $file = fopen($this->filePath, 'a+');

            $fileRead = fread($file, filesize($this->filePath));

            $this->taskArray = json_decode($fileRead,true);

            fclose($file);
        }
    }

    public function addTask(string $taskName, int $priority): void
    {
        if($priority > 10 || $priority < 1) {

            throw new Exception('Priority must be between 1 and 10');
        }

        $this->taskArray[] = ['task' => $taskName, 'priority' => $priority, 'status' => TaskStatus::NotDone->value];
    }




    public function getTaskList() : array
    {
        uasort($this->taskArray, function(array $a, array $b): int {

            if ($a['priority'] === $b['priority']) {

                return 0;
            }

            return $a['priority'] > $b['priority'] ? 1 : -1;
        });

        return $this->taskArray;
    }


    public function deleteTask(int $taskID) :void
    {
        foreach($this->taskArray as $key => $value){

            if($key === $taskID){

                unset($this->taskArray[$taskID]);
            }
        }

    }


    public function completeTask(int $taskID) : void
    {
        foreach ($this->taskArray as $key => &$value) {

            if($key === $taskID) {

                $value['status'] = TaskStatus::Done->value;
            }
        }
    }

    public function __destruct()
    {
        $file = fopen($this->filePath,'w');

        $fileWrite = json_encode($this->taskArray);

        fwrite($file,$fileWrite);

        fclose($file);

    }
}
