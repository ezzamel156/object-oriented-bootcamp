<?php

namespace ACME\Users;

class Person
{
    
    protected $name;

    private $age;

    public function __construct($name)
    {

        $this->name = $name;

    }

    public function getAge()
    {

        return $this->age * 365;

    }

    public function setAge($age)
    {
        if($age < 18)
            throw new Exception("Person is not old enough");
            
        $this->age = $age;

    }

}

// $person = new Person('Mel Ali');

// $person->setAge(25);

// var_dump($person->getAge());