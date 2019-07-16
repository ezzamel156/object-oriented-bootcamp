<?php

namespace ACME;

use ACME\Users\Person;

class Business
{
    const NUMBER = 123;

    protected $staff;

    public function __construct(Staff $staff)
    {
        
        $this->staff = $staff;

    }

    public function hire(Person $person)
    {

        $this->staff->add($person);

    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }

}