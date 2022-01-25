<?php

namespace Creational\SimpleFactory\Solution;

class Factory
{
    public function build()
    {
        $classc = $this->buildC();
        $classb = $this->buildB();
        return $this->buildA($classb, $classc);

    }

    public function buildA($classb, $classc)
    {
        return new A($classb, $classc);
    }

    public function buildB()
    {
        return new B();
    }

    public function buildC()
    {
        return new C();
    }
}