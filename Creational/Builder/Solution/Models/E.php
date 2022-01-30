<?php

namespace Creational\Builder\Solution\Models;

class E
{
    private $classb;
    private $classc;

    public function Add_B($classb)
    {
        $this->classb = $classb;
    }

    public function Add_C($classc)
    {
        $this->classc = $classc;
    }
}
