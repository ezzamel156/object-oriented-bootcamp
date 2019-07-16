<?php

interface Logger 
{

    public function execute($message);

}

class LogToFile implements Logger
{

    public function execute($message)
    {

        var_dump('log message to file : ' .$message);

    }

}

class LogToDatabase implements Logger
{

    public function execute($message)
    {

        var_dump('log message to database : ' .$message);

    }

}

class UsersController
{

    protected $logger;

    public function __construct(Logger $logger)
    {

        $this->logger = $logger;

    }

    public function show()
    {

        $user = 'Mel';

        $this->logger->execute($user);

    }

}

$log = 'LogToFile';

$controller = new UsersController(new $log);

$controller->show();
// echo ((new UsersController((new LogToFile())))->show());