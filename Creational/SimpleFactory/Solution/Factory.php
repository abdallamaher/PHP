<?php

namespace Creational\SimpleFactory\Solution;

use Creational\SimpleFactory\Solution\Models\A;
use Creational\SimpleFactory\Solution\Models\B;
use Creational\SimpleFactory\Solution\Models\C;

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