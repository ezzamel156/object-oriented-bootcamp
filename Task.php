<?php

class Task 
{

    public $title;

    public $description;

    public $completed = false;

    public function __construct($title, $description)
    {

        $this->description = $description;

        $this->description = $description;

    }

    public function complete()
    {

        $this->completed = true;

    }

}

$task = new Task('learn OOP');

$task2 = new Task('learn golang');

var_dump($task->description);
var_dump($task->completed);

$task->complete();

var_dump($task->completed);

