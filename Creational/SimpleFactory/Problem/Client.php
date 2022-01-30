<?php

use Creational\SimpleFactory\Problem\A;
use Creational\SimpleFactory\Problem\B;
use Creational\SimpleFactory\Problem\C;

require_once __DIR__ . '/../../../vendor/autoload.php';

$obj = new A(new B(), new C());