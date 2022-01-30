<?php

namespace Creational\SimpleFactory\Solution\Models;

class A
{
    public $classb;
    public $classc;
    public function __construct($classb, $classc)
    {
        $this->classb = $classb;
        $this->classc = $classc;
    }
}