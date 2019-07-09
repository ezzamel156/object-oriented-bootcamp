<?php

use ACME\{Business, Staff};
use ACME\Users\Person;
use ACME\Math;

require 'vendor/autoload.php';

$mel =  new Person('Mel Ali');

$staff = new Staff([$mel]);

$randstad = new Business($staff);

$randstad->hire(new Person('Bella'));

//var_dump($randstad->getStaffMembers());

$math = new Math();
//still can static method in an instance of an object
var_dump($math->add(1,2,3));



