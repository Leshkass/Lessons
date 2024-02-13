<?php


class Workers
{
    private string $name;

    private string $job;

    public function __construct(string $name, string $job)
    {
        $this->setName($name);
        $this->setJob($job);
    }

    private function setName(string $name) : void
    {
        if(strlen($name) < 2){
            throw new Exception('Invalid name');
        }

        $this->name = $name;

    }

    private function setJob(string $job) : void
    {

        if($job === 'developer' or $job === 'manager' or $job === 'tester'){
            $this->job = $job;

        }

        throw new Exception('Invalid job');


    }

    private function getJob() : string
    {
        return $this->job;
    }

    private function getName() : string
    {
        return $this->name;
    }

    public function getData() : string
    {
        return $this->getName() . '  ' . $this->getJob();

    }
}
