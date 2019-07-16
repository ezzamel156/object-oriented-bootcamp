<?php

require 'vendor/autoload.php';

use ACME\{AuthController, RegisterUser};


$controller = new AuthController(new RegisterUser);

$controller->register([]);


