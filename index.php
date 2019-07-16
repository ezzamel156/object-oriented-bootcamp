<?php

require 'vendor/autoload.php';

use ACME\{Business, Staff, BankAccount};
use ACME\Users\Person;
use ACME\Math;

$mel =  new Person('Mel Ali');


// still adheres to object reference way of accessing memory
// $mel->setAge(18);

// var_dump($mel);

// $test = $mel;

// $mel->setAge(20);

// var_dump($mel);

// var_dump($test);

$staff = new Staff([$mel]);

$lol = Person::class;

var_dump($lol);

$test = new $lol('jem');

var_dump($test);

$randstad = new Business($staff);

$randstad->hire(new Person('Bella'));

var_dump($randstad->getStaffMembers());

$math = new Math();
// still can static method in an instance of an object
var_dump($math->add(1,2,3));


/**
 * accessing const
 */
echo (Business::NUMBER);



