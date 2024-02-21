<?php
declare(strict_types=1);

class TaskManager
{
    private string $taskName;

    private int $priority;

    private int $taskID;

    private string $filePath;

    private  $taskArray;


    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    private function setTaskArray( $taskArray)
    {
        $this->taskArray = $taskArray;
    }

    private function getTaskArray() : array
    {
        return $this->taskArray;
    }

    /**
     * @throws Exception
     */
    public function addTask(string $taskName, int $priority): void
    {

        if ($priority > 10 || $priority < 0) {

            throw new Exception('Allowed range for priority is from 0 to 10');
        }

        $file = fopen($this->filePath, 'a+');

        fwrite($file, $taskName . ' Приоритет  ' . $priority . PHP_EOL);

        $this->setTaskArray(json_decode(fread($file, filesize($this->filePath)),true));
    }



    public function getTaskList()
    {
            return $this->taskArray;
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
