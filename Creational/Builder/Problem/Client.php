<?php

use Creational\Builder\Problem\A;
use Creational\Builder\Problem\B;
use Creational\Builder\Problem\C;

require_once __DIR__ . '/../../../vendor/autoload.php';


$obj1 = new A(new B(), new C());
$obj2 = new A(new B());
$obj3 = new A(new C());
$obj4 = new A();