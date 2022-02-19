<?php

use Structural\Bridge\Solution\A;

require_once __DIR__ . '/../../../vendor/autoload.php';

$obj = new A();
echo $obj->play();

/*
 *play function does the same thing in any boy
 *but when i want to change it i have to change in many places
 */