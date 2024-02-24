<?php
declare(strict_types=1);

class TaskManager
{
    private string $taskName;

    private int $priority;

    private int $taskID;

    private string $filePath;

    private array $taskArray;


    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;

        if(empty($this->filePath)){

            $file = fopen($this->filePath, 'a+');

            $this->setTaskArray(fread($file, filesize($this->filePath)));

            fclose($file);
        }
    }

    private function setTaskArray($taskArray) : void
    {
        $this->taskArray = json_decode($taskArray,true);
    }



    /**
     * @throws Exception
     */
    public function addTask(string $taskName, int $priority): void
    {

        if ($priority > 10 || $priority < 0) {

            throw new Exception('Allowed range for priority is from 0 to 10');
        }

        $file = fopen($this->filePath,'a+');

        fwrite($file, $taskName . ' Приоритет ' . $priority . PHP_EOL);


    }



    public function getTaskList()
    {
        // возвращает все задания из списка , отсортированые в порядке убывания
    }


    public function deleteTask(int $taskID)
    {
        //удаляет задание из списка по индекатору

    }


    public function completeTask(int $taskID)
    {
        // отмечает задание которое выполнено
    }
}
