<?php

use Creational\SimpleFactory\Problem\A;
use Creational\SimpleFactory\Problem\B;
use Creational\SimpleFactory\Problem\C;

$obj = new A(new B(), new C());