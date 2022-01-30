<?php

namespace Creational\Builder\Problem;

class A
{
    public $classb;
    public $classc;
    public function __construct($classb = null, $classc = null)
    {
        $this->classb = $classb;
        $this->classc = $classc;
    }
}
