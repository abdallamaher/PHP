<?php

use Structural\Bridge\Problem\boyAFootball;

require_once __DIR__ . '/../../../vendor/autoload.php';

$obj = new boyAFootball();
echo $obj->sport_name();

/*
 *play a sport do the same thing in any boy
 *And as a result but when i want to change it i have to change in many places
 */